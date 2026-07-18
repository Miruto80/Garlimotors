<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pre-approval</title>
    <?php require_once("comunes/head.php") ?>
    <link rel="stylesheet" href="css/Bank-approval.css">
    <!-- SweetAlert2 for modern alert messages -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php require_once("comunes/nav.php") ?>

<div class="form-wrapper container my-5">
    <meta name="description" content="Get pre-approved for car financing at Motorvibes.">

    <h2 class="text-center mb-4">Bank-Approval</h2>

    <div class="progress-track mb-4">
        <div id="progressBar" class="progress-bar" style="width: 25%;"></div>
    </div>

    <!-- Steps Navigation Indicator -->
    <div class="preapproval-steps mb-4 d-flex justify-content-between">
        <div id="badge-step-1" class="step active">Personal</div>
        <div id="badge-step-2" class="step">Residence</div>
        <div id="badge-step-3" class="step">Employment</div>
        <div id="badge-step-4" class="step">Vehicle</div>
    </div>

    <!-- Formspree Integration Endpoint -->
    <form id="preapprovalForm" action="https://formspree.io/f/mykreqpa" method="POST">
        
        <!-- STEP 1: Personal Info -->
        <div id="step-1" class="step-content active">
            <div class="form-section">
                <h4>Personal Information</h4>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>First Name *</label>
                        <input type="text" name="firstName" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Middle Name</label>
                        <input type="text" name="middleName" class="form-control data-no-numbers">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Last Name *</label>
                        <input type="text" name="lastName" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Phone *</label>
                        <input type="tel" name="phone" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Date of Birth *</label>
                        <input type="date" name="dob" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>SSN or ITIN *</label>
                        <input type="text" name="socialOrItin" placeholder="9 digits" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Driver's License Number *</label>
                        <input type="text" name="licenseNumber" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Driver's License State *</label>
                        <select name="licenseState" id="licenseState" class="form-select data-validate" disabled>
                            <option value="">Loading states...</option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 2: Residence -->
        <div id="step-2" class="step-content">
            <div class="form-section">
                <h4>Residential Address</h4>
                <div class="mb-3">
                    <label>Address *</label>
                    <input type="text" name="address" class="form-control data-validate">
                    <span class="text-danger error-msg"></span>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label>State *</label>
                        <select name="state" id="mainState" class="form-select data-validate" disabled>
                            <option value="">Loading states...</option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>City *</label>
                        <select name="city" id="mainCity" class="form-select data-validate" disabled>
                            <option value="">Select City</option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Zip Code *</label>
                        <input type="text" name="zip" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Time at Address *</label>
                        <input type="text" name="timeAtAddress" placeholder="e.g., 2 years" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 3: Employment -->
        <div id="step-3" class="step-content">
            <div class="form-section">
                <h4>Employment Information</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Employment Type *</label>
                        <select name="employmentType" class="form-select data-validate">
                            <option value="">Select option</option>
                            <option value="self employed">Self Employed</option>
                            <option value="employed full time">Employed Full Time</option>
                            <option value="employed part time">Employed Part Time</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Company Name *</label>
                        <input type="text" name="CompanyName" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Occupation *</label>
                        <input type="text" name="occupation" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Monthly Income *</label>
                        <input type="number" name="income" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Additional Income</label>
                        <input type="number" name="additionalIncome" class="form-control data-no-letters">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Time at Job *</label>
                        <input type="text" name="timeAtJob" placeholder="e.g., 1 year and 6 months" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 4: Vehicle Details -->
        <div id="step-4" class="step-content">
            <div class="form-section">
                <h4>Vehicle Details</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Vehicle Type of Interest</label>
                        <input type="text" name="carType" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Down Payment</label>
                        <input type="number" name="downPayment" class="form-control data-no-letters">
                    </div>
                </div>
            </div>
        </div>

        <!-- Step Controls Navigation -->
        <div class="d-flex justify-content-between mt-4">
            <button type="button" id="btnBack" class="btn btn-outline-secondary" style="display: none;">
                Back
            </button>

            <button type="button" id="btnNext" class="btn btn-primary ms-auto">
                Next
            </button>

            <button type="submit" id="btnSubmit" class="btn btn-success ms-auto" style="display: none;">
                Submit Application
            </button>
        </div>
    </form>
</div>

<!-- JavaScript Engine Logic matching React's custom Hooks and Validations -->
<script>
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
</script>

<?php require_once("comunes/Ws.php")?>
</body>
</html>