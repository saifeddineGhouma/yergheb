	<!-- Main content -->
    <div class="content-wrapper">

<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Validation</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="form_validation.html">Forms</a></li>
            <li class="active">Validation</li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    Settings
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form validation</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <p class="content-group-lg">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages.</p>
            <form class="form-horizontal form-validate-jquery" action="#">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputsvsvsv</legend>

                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="basic" class="form-control" required="required" placeholder="Text input validation">
                        </div>
                    </div>
                    <!-- /basic text input -->


                    <!-- Input with icons -->
                    <div class="form-group has-feedback">
                        <label class="control-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="with_icon" class="form-control" required="required" placeholder="Text input with icon validation">
                            <div class="form-control-feedback">
                                <i class="icon-droplets"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /input with icons -->


                    <!-- Input group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Input group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon-mention"></i></div>
                                <input type="text" name="input_group" class="form-control" required="required" placeholder="Input group validation">
                            </div>
                        </div>
                    </div>
                    <!-- /input group -->


                    <!-- Password field -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Password field <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="password" name="password" id="password" class="form-control" required="required" placeholder="Minimum 5 characters allowed">
                        </div>
                    </div>
                    <!-- /password field -->


                    <!-- Repeat password -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="password" name="repeat_password" class="form-control" required="required" placeholder="Try different password">
                        </div>
                    </div>
                    <!-- /repeat password -->


                    <!-- Email field -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Email field <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" id="email" required="required" placeholder="Enter a valid email address">
                        </div>
                    </div>
                    <!-- /email field -->


                    <!-- Repeat email -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="email" name="repeat_email" class="form-control" required="required" placeholder="Enter a valid email address">
                        </div>
                    </div>
                    <!-- /repeat email -->


                    <!-- Minimum characters -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="minimum_characters" class="form-control" required="required" placeholder="Enter at least 10 characters">
                        </div>
                    </div>
                    <!-- /minimum characters -->


                    <!-- Maximum characters -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="maximum_characters" class="form-control" required="required" placeholder="Enter 10 characters maximum">
                        </div>
                    </div>
                    <!-- /maximum characters -->


                    <!-- Minimum number -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="minimum_number" class="form-control" required="required" placeholder="Enter a value greater than or equal to 10">
                        </div>
                    </div>
                    <!-- /minimum number -->


                    <!-- Maximum number -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="maximum_number" class="form-control" required="required" placeholder="Please enter a value less than or equal to 10">
                        </div>
                    </div>
                    <!-- /maximum number -->


                    <!-- Basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <textarea rows="5" cols="5" name="textarea" class="form-control" required="required" placeholder="Default textarea"></textarea>
                        </div>
                    </div>
                    <!-- /basic textarea -->

                </fieldset>

                <fieldset class="content-group">
                    <legend class="text-bold">Advanced inputs</legend>

                    <!-- Number range -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Number range <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="number_range" class="form-control" required="required" placeholder="Enter a value between 10 and 20">
                        </div>
                    </div>
                    <!-- /number range -->


                    <!-- Touchspin spinners -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Touchspin spinner <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="text" name="touchspin" value="" required="required" class="touchspin-postfix" placeholder="Not valid if empty">
                            </div>
                        </div>
                    </div>
                    <!-- /touchspin spinners -->


                    <!-- Custom message -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Custom message <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="custom" class="form-control" required="required" placeholder="Custom error message">
                        </div>
                    </div>
                    <!-- /custom message -->


                    <!-- URL validation -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">URL validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="url" class="form-control" required="required" placeholder="Enter a valid URL address">
                        </div>
                    </div>
                    <!-- /url validation -->


                    <!-- Date validation -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Date validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="date" class="form-control" required="required" placeholder="April, 2014 or any other date format">
                        </div>
                    </div>
                    <!-- /date validation -->


                    <!-- ISO date validation -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="date_iso" class="form-control" required="required" placeholder="YYYY/MM/DD or any other ISO date format">
                        </div>
                    </div>
                    <!-- /iso date validation -->


                    <!-- Numbers only -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="numbers" class="form-control" required="required" placeholder="Enter decimal number only">
                        </div>
                    </div>
                    <!-- /numbers only -->


                    <!-- Digits only -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Digits only <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="digits" class="form-control" required="required" placeholder="Enter digits only">
                        </div>
                    </div>
                    <!-- /digits only -->


                    <!-- Credit card validation -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="card" class="form-control" required="required" placeholder="Enter credit card number. Try 446-667-651">
                        </div>
                    </div>
                    <!-- /credit card validation -->


                    <!-- Basic file uploader -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic file uploader <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="file" name="unstyled_file" class="form-control" required="required">
                        </div>
                    </div>
                    <!-- /basic file uploader -->


                    <!-- Styled file uploader -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Styled file uploader <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="file" name="styled_file" class="file-styled" required="required">
                        </div>
                    </div>
                    <!-- /styled file uploader -->


                    <!-- Basic select -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic select <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="default_select" class="form-control" required="required">
                                <option value="">Choose an option</option> 
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!-- /basic select -->


                    <!-- Select2 select -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="select2" data-placeholder="Select a State..." class="select" required="required">
                                <option></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!-- /select2 select -->


                    <!-- Multiple select -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="default_multiple_select" class="form-control" multiple="multiple" required="required">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!-- /multiple select -->

                </fieldset>

                <fieldset class="content-group">
                    <legend class="text-bold">Checkboxes and radios</legend>

                    <!-- Basic single checkbox -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic single checkbox <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="single_basic_checkbox" required="required">
                                    Accept our terms
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /basic singlecheckbox -->


                    <!-- Basic checkbox group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic checkbox group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="basic_checkbox" required="required">
                                    Duis eget nibh purus
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="basic_checkbox">
                                    Maecenas non nulla ac nunc
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="basic_checkbox">
                                    Maecenas egestas tristique
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /basic checkbox group -->


                    <!-- Inline checkbox group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic inline checkbox group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="basic_inline_checkbox" required="required">
                                Duis eget nibh purus
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" name="basic_inline_checkbox">
                                Maecenas non nulla ac nunc
                            </label>
                        </div>
                    </div>
                    <!-- /inline checkbox group -->


                    <!-- Basic radio group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic radio group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="basic_radio" required="required">
                                    Cras leo turpis malesuada eget
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="basic_radio">
                                    Maecenas congue justo vel ipsum
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /basic radio group -->


                    <!-- Basic inline radio group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Basic inline radio group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="radio-inline">
                                <input type="radio" name="basic_radio_group" required="required">
                                Cras leo turpis malesuada eget
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="basic_radio_group">
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                    <!-- /basic inline radio group -->


                    <hr>


                    <!-- Single styled checkbox -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Single styled checkbox <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="single_styled_checkbox" class="styled" required="required">
                                    Accept our terms
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /single styled checkbox -->


                    <!-- Styled checkbox group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Styled checkbox group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="styled_checkbox" class="styled" required="required">
                                    Duis eget nibh purus
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="styled_checkbox" class="styled">
                                    Maecenas non nulla ac nunc
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="styled_checkbox" class="styled">
                                    Maecenas egestas tristique
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /styled checkbox group -->


                    <!-- Inline checkbox group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Inline checkbox group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="styled_inline_checkbox" class="styled" required="required">
                                Duis eget nibh purus
                            </label>
            
                            <label class="checkbox-inline">
                                <input type="checkbox" name="styled_inline_checkbox" class="styled">
                                Maecenas non nulla ac nunc
                            </label>										
                        </div>
                    </div>
                    <!-- /inline checkbox group -->


                    <!-- Styled radio group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Styled radio group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="styled_radio" class="styled" required="required">
                                    Cras leo turpis malesuada eget
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="styled_radio" class="styled">
                                    Maecenas congue justo vel ipsum
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /styled radio group -->


                    <!-- Styled inline radio group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Styled inline radio group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="radio-inline">
                                <input type="radio" name="styled_inline_radio" class="styled" required="required">
                                Cras leo turpis malesuada eget
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="styled_inline_radio" class="styled">
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                    <!-- /styled inline radio group -->

                </fieldset>

                <fieldset>
                    <legend class="text-bold">Switcher components</legend>

                    <!-- Switchery single -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Swichery single <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery switchery-xs">
                                <label>
                                    <input type="checkbox" name="switchery_single" class="switchery" required="required">
                                    Accept our terms
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /switchery single -->


                    <!-- Switchery group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Swichery group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery switchery-xs">
                                <label>
                                    <input type="checkbox" name="switchery_group" class="switchery" required="required">
                                    Duis eget nibh purus
                                </label>
                            </div>

                            <div class="checkbox checkbox-switchery switchery-xs">
                                <label>
                                    <input type="checkbox" name="switchery_group" class="switchery">
                                    Maecenas non nulla ac nunc
                                </label>
                            </div>

                            <div class="checkbox checkbox-switchery switchery-xs">
                                <label>
                                    <input type="checkbox" name="switchery_group" class="switchery">
                                    Maecenas egestas tristique
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /switchery group -->


                    <!-- Inline switchery group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Inline swichery group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="checkbox-inline checkbox-switchery switchery-xs">
                                <input type="checkbox" name="inline_switchery_group" class="switchery" required="required">
                                Duis eget nibh purus
                            </label>

                            <label class="checkbox-inline checkbox-switchery switchery-xs">
                                <input type="checkbox" name="inline_switchery_group" class="switchery">
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                    <!-- /inline switchery group -->


                    <hr>


                    <!-- Switch single -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Switch single <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switch">
                                <label>
                                    <input type="checkbox" name="switch_single" data-on-text="Yes" data-off-text="No" class="switch" required="required">
                                    Accept our terms
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /switch single -->


                    <!-- Switch group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Switch group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switch">
                                <label>
                                    <input type="checkbox" name="switch_group" class="switch" required="required">
                                    Duis eget nibh purus
                                </label>
                            </div>

                            <div class="checkbox checkbox-switch">
                                <label>
                                    <input type="checkbox" name="switch_group" class="switch">
                                    Maecenas non nulla ac nunc
                                </label>
                            </div>

                            <div class="checkbox checkbox-switch">
                                <label>
                                    <input type="checkbox" name="switch_group" class="switch">
                                    Maecenas egestas tristique
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /switch group -->


                    <!-- Inline switch group -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Inline switch group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="checkbox-inline checkbox-switch">
                                <input type="checkbox" name="inline_switch_group" class="switch" required="required">
                                Duis eget nibh purus
                            </label>

                            <label class="checkbox-inline checkbox-switch">
                                <input type="checkbox" name="inline_switch_group" class="switch">
                                Maecenas non nulla ac nunc
                            </label>
                        </div>
                    </div>
                    <!-- /inline switch group -->

                </fieldset>

                <div class="text-right">
                    <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->


    <!-- Footer -->
    <div class="footer text-muted">
        &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
    </div>
    <!-- /footer -->

</div>
<!-- /content area -->

</div>
<!-- /main content -->