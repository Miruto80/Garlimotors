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
        <p class="text-muted mb-4">All fields marked with * are required.</p>
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
                        <input type="tel" name="phone" class="form-control data-validate data-no-letters" limit="10" placeholder="10 digits">
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
                        <input type="text" name="socialOrItin" placeholder="9 digits" class="form-control data-validate data-no-letters" limit="9">
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
                        <input type="text" name="zip" class="form-control data-validate data-no-letters" limit="5" placeholder="5 digits">
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
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button type="button" id="btnBack" class="btn btn-outline-secondary text-light" style="display: none;">
                Back
            </button>

            <div class="d-flex gap-2">
                <button type="button" id="btnNext" class="btn text-light">
                    Next
                </button>

                <button type="submit" id="btnSubmit" class="btn btn-success" style="display: none;">
                    Submit Application
                </button>
            </div>
        </div>
    </form>
</div>

<!-- JavaScript Engine Logic matching React's custom Hooks and Validations -->
<script src="js/Bank.js"></script>
<?php require_once("comunes/Ws.php")?>
</body>
</html>