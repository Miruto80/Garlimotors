<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <?php require_once("comunes/head.php") ?>
    <title><?php echo $text['bank_approval']; ?></title>
    <link rel="stylesheet" href="css/Bank-approval.css">
    <!-- SweetAlert2 for modern alert messages -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php require_once("comunes/nav.php") ?>

<div class="form-wrapper container my-5">
    <meta name="description" content="Get pre-approved for car financing at Motorvibes.">

    <h2 class="text-center mb-4"><?php echo $text['bank_approval']; ?></h2>

    <div class="progress-track mb-4">
        <div id="progressBar" class="progress-bar" style="width: 25%;"></div>
    </div>

    <!-- Steps Navigation Indicator -->
    <div class="preapproval-steps mb-4 d-flex justify-content-between">
        <div id="badge-step-1" class="step active"><?php echo $text['personal']; ?></div>
        <div id="badge-step-2" class="step"><?php echo $text['residence']; ?></div>
        <div id="badge-step-3" class="step"><?php echo $text['employment']; ?></div>
        <div id="badge-step-4" class="step"><?php echo $text['vehicle']; ?></div>
    </div>

    <!-- Formspree Integration Endpoint -->
    <form id="preapprovalForm" action="https://formspree.io/f/mykreqpa" method="POST">
        
        <!-- STEP 1: Personal Info -->
        <p class="text-muted mb-4"><?php echo $text['all_required']; ?></p>
        <div id="step-1" class="step-content active">
            <div class="form-section">
                <h4><?php echo $text['personal_information']; ?></h4>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['first_name']; ?> *</label>
                        <input type="text" name="firstName" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['middle_name']; ?></label>
                        <input type="text" name="middleName" class="form-control data-no-numbers">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['last_name']; ?> *</label>
                        <input type="text" name="lastName" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['email']; ?> *</label>
                        <input type="email" name="email" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['phone']; ?> *</label>
                        <input type="tel" name="phone" class="form-control data-validate data-no-letters" limit="10" placeholder="10 digits">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['date_of_birth']; ?> *</label>
                        <input type="date" name="dob" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['ssn_or_itin']; ?> *</label>
                        <input type="text" name="socialOrItin" placeholder="9 digits" class="form-control data-validate data-no-letters" limit="9">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['drivers_license_number']; ?> *</label>
                        <input type="text" name="licenseNumber" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><?php echo $text['drivers_license_state']; ?> *
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
                <h4><?php echo $text['residential_address']; ?></h4>
                <div class="mb-3">
                    <label><?php echo $text['address']; ?> *</label>
                    <input type="text" name="address" class="form-control data-validate">
                    <span class="text-danger error-msg"></span>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label><?php echo $text['state']; ?> *</label>
                        <select name="state" id="mainState" class="form-select data-validate" disabled>
                            <option value="">Loading states...</option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><?php echo $text['city']; ?> *</label>
                        <select name="city" id="mainCity" class="form-select data-validate" disabled>
                            <option value="">Select City</option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><?php echo $text['zip_code']; ?> *</label>
                        <input type="text" name="zip" class="form-control data-validate data-no-letters" limit="5" placeholder="5 digits">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><?php echo $text['time_at_address']; ?> *</label>
                        <input type="text" name="timeAtAddress" placeholder="e.g., 2 years" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 3: Employment -->
        <div id="step-3" class="step-content">
            <div class="form-section">
                <h4><?php echo $text['employment_information']; ?></h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['employment_type']; ?> *</label>
                        <select name="employmentType" class="form-select data-validate">
                            <option value="">Select option</option>
                            <option value="self employed"><?php echo $text['self_employed']; ?></option>
                            <option value="employed full time"><?php echo $text['employed_full_time']; ?></option>
                            <option value="employed part time"><?php echo $text['employed_part_time']; ?></option>
                            <option value="Other"><?php echo $text['other']; ?></option>
                        </select>
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['company_name']; ?> *</label>
                        <input type="text" name="CompanyName" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['occupation']; ?> *</label>
                        <input type="text" name="occupation" class="form-control data-validate data-no-numbers">
                        <span class="text-danger error-msg"></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['monthly_income']; ?> *</label>
                        <input type="number" name="income" class="form-control data-validate data-no-letters">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['additional_income']; ?></label>
                        <input type="number" name="additionalIncome" class="form-control data-no-letters">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['time_at_job']; ?> *</label>
                        <input type="text" name="timeAtJob" placeholder="e.g., 1 year and 6 months" class="form-control data-validate">
                        <span class="text-danger error-msg"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 4: Vehicle Details -->
        <div id="step-4" class="step-content">
            <div class="form-section">
                <h4><?php echo $text['vehicle_details']; ?></h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['vehicle']; ?></label>
                        <input type="text" name="carType" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><?php echo $text['down_payment']; ?></label>
                        <input type="number" name="downPayment" class="form-control data-no-letters">
                    </div>
                </div>
            </div>
        </div>

        <!-- Step Controls Navigation -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button type="button" id="btnBack" class="btn btn-outline-secondary text-light" style="display: none;">
                <?php echo $text['back']; ?>
            </button>

            <div class="d-flex gap-2">
                <button type="button" id="btnNext" class="btn text-light">
                    <?php echo $text['next']; ?>
                </button>

                <button type="submit" id="btnSubmit" class="btn btn-success" style="display: none;">
                    <?php echo $text['submit_application']; ?>
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