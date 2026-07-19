document.addEventListener("DOMContentLoaded", () => {
    let currentStep = 1;
    const totalSteps = 4;

    // API Configurations
    const API_KEY = 'fcd4726fc4858a2b59f737afc60ef270377d2be3cc24c87c653f6106b8529c68';
    const API_BASE_URL = 'https://api.countrystatecity.in/v1/countries/US';

    // DOM Target Elements
    const form = document.getElementById('preapprovalForm');
    const btnBack = document.getElementById('btnBack');
    const btnNext = document.getElementById('btnNext');
    const btnSubmit = document.getElementById('btnSubmit');
    const progressBar = document.getElementById('progressBar');
    
    const licenseStateSelect = document.getElementById('licenseState');
    const mainStateSelect = document.getElementById('mainState');
    const mainCitySelect = document.getElementById('mainCity');

    // Step field validation tracking mapping
    const stepFields = {
        1: ['firstName', 'lastName', 'socialOrItin', 'licenseNumber', 'licenseState', 'phone', 'dob', 'email'],
        2: ['address', 'city', 'state', 'zip', 'timeAtAddress'],
        3: ['employmentType', 'CompanyName', 'occupation', 'income', 'timeAtJob'],
        4: []
    };

    // 1. Fetch States from CountryStateCity API
    async function fetchStates() {
        try {
            const response = await fetch(`${API_BASE_URL}/states`, {
                headers: { 'X-CSCAPI-KEY': API_KEY }
            });
            if(!response.ok) throw new Error();
            const states = await response.json();
            
            let options = `<option value="">Select State</option>`;
            states.forEach(st => {
                options += `<option value="${st.iso2}">${st.name}</option>`;
            });

            licenseStateSelect.innerHTML = options;
            mainStateSelect.innerHTML = options;
            licenseStateSelect.disabled = false;
            mainStateSelect.disabled = false;
        } catch (err) {
            Swal.fire({ icon: 'error', title: 'Error', text: 'Could not load the state list.' });
        }
    }
    fetchStates();

    // 2. Fetch Cities whenever State updates
    mainStateSelect.addEventListener('change', async (e) => {
        const stateIso = e.target.value;
        if (!stateIso) {
            mainCitySelect.innerHTML = '<option value="">Select City</option>';
            mainCitySelect.disabled = true;
            return;
        }

        mainCitySelect.innerHTML = `<option value="">Loading cities...</option>`;
        mainCitySelect.disabled = true;

        try {
            const response = await fetch(`${API_BASE_URL}/states/${stateIso}/cities`, {
                headers: { 'X-CSCAPI-KEY': API_KEY }
            });
            const cities = await response.json();
            let options = `<option value="">Select City</option>`;
            cities.forEach(c => {
                options += `<option value="${c.name}">${c.name}</option>`;
            });
            mainCitySelect.innerHTML = options;
            mainCitySelect.disabled = false;
        } catch (err) {
            Swal.fire({ icon: 'error', title: 'Error', text: 'Could not load the cities list.' });
        }
    });

    // 3. Inline Input Sanitization & Mask (Regex patterns from original handleChange)
    form.addEventListener('input', (e) => {
        const input = e.target;
        if (input.classList.contains('data-no-numbers')) {
            input.value = input.value.replace(/\d/g, '');
        }
        if (input.classList.contains('data-no-letters')) {
            input.value = input.value.replace(/\D/g, '');
        }
        
        // Active single field validator trigger on change
        if(input.classList.contains('data-validate')) {
            validateInput(input);
        }
    });

    // 4. Core Form Field Evaluation logic
    function validateInput(input) {
        const name = input.name;
        const value = input.value.trim();
        let error = '';

        if (!value) {
            error = 'This field is required.';
        } else {
            if (name === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                error = 'Please enter a valid email address.';
            }
            if (name === 'phone' && value.length < 10) {
                error = 'Phone number must be at least 10 digits.';
            }
            if (name === 'income' && parseFloat(value) <= 0) {
                error = 'Income must be greater than 0.';
            }
            if (name === 'dob') {
                const today = new Date();
                const birthDate = new Date(value);
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                if (age < 18) {
                    error = 'You must be at least 18 years old.';
                }
            }
        }

        const errorSpan = input.parentElement.querySelector('.error-msg');
        if (error) {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
            if(errorSpan) errorSpan.textContent = error;
            return false;
        } else {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            if(errorSpan) errorSpan.textContent = '';
            return true;
        }
    }

    // 5. Steps Complete Checker
    function validateStep(step) {
        const fieldsToValidate = stepFields[step];
        let stepIsValid = true;

        fieldsToValidate.forEach(fieldName => {
            const input = form.querySelector(`[name="${fieldName}"]`);
            if (input) {
                const isValid = validateInput(input);
                if (!isValid) stepIsValid = false;
            }
        });

        if (!stepIsValid) {
            Swal.fire({ 
                icon: 'warning', 
                title: 'Missing Information', 
                text: 'Please complete all required fields correctly before moving forward.' 
            });
        }
        return stepIsValid;
    }

    // 6. Step Views & Component Display Controller
    function updateStepUI() {
        document.querySelectorAll('.step-content').forEach((el, index) => {
            el.classList.toggle('active', index === (currentStep - 1));
        });

        document.querySelectorAll('.preapproval-steps .step').forEach((el, index) => {
            el.classList.toggle('active', index < currentStep);
        });

        progressBar.style.width = `${(currentStep / totalSteps) * 100}%`;

        btnBack.style.display = currentStep > 1 ? 'inline-block' : 'none';
        
        if (currentStep === totalSteps) {
            btnNext.style.display = 'none';
            btnSubmit.style.display = 'inline-block';
        } else {
            btnNext.style.display = 'inline-block';
            btnSubmit.style.display = 'none';
        }
    }

    // Event hooks for structural control
    btnNext.addEventListener('click', () => {
        if (validateStep(currentStep)) {
            currentStep++;
            updateStepUI();
        }
    });

    btnBack.addEventListener('click', () => {
        currentStep--;
        updateStepUI();
    });

    // 7. Formspree Asynchronous Form Handler
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (!validateStep(currentStep)) return;

        btnSubmit.disabled = true;
        btnSubmit.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span> Submitting...`;

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                Swal.fire({ 
                    icon: 'success', 
                    title: 'Success!', 
                    text: 'Your pre-approval application has been successfully submitted.' 
                });
                form.reset();
                currentStep = 1;
                updateStepUI();
                
                // Clear validation statuses
                form.querySelectorAll('.form-control, .form-select').forEach(el => {
                    el.classList.remove('is-valid', 'is-invalid');
                });
                mainCitySelect.disabled = true;
            } else {
                throw new Error();
            }
        } catch (err) {
            Swal.fire({ 
                icon: 'error', 
                title: 'Submission Error', 
                text: 'Something went wrong while processing your request. Please try again later.' 
            });
        } finally {
            btnSubmit.disabled = false;
            btnSubmit.textContent = "Submit Application";
        }
    });
});