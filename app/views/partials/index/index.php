        <?php
        $page_id = null;
        $comp_model = new SharedController;
        ?>
      <style>
        body {
            background-image: url(assets/images/logo2.png);
            background-repeat: no-repeat;
            background-size: cover;
            /* Set opacity to 0.8 (adjust value as needed) */
            opacity: 0.8;
        }
    </style>
        <div class=" py-5">
            <div class="container">

                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeInLeft animated mb-4">
                                <div class="text-capitalize">
                                    <h2 class="text-capitalize text-white" style="font-family: Bahnschrift SemiBold SemiConden;">
                                        <center><b>SISTEMA INFORMASAUN REJISTU DADUS KOMPUTADOR IHA ESKOLA TECNIK VOKASIONAL AINARU BAZEADU WEB</b></center>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <?php $this::display_page_errors(); ?>

                        <div class=" p-3 animated tada page-content" style="background: rgb(19,194,183);
background: -moz-linear-gradient(90deg, rgba(19,194,183,0.8935223747702206) 6%, rgba(19,153,194,1) 49%);
background: -webkit-linear-gradient(90deg, rgba(19,194,183,0.8935223747702206) 6%, rgba(19,153,194,1) 49%);
background: linear-gradient(90deg, rgba(19,194,183,0.8935223747702206) 6%, rgba(19,153,194,1) 49%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#13c2b7",endColorstr="#1399c2",GradientType=1);">
                            <div>
                                <center>
                                    <h4><i class="material-icons">lock_open</i> Login Sistema</h4> <br>

                                    <img src="assets/images/logo.png" alt="logo" width="120"> <br> <br>
                                </center>

                                <?php
                                $this::display_page_errors();
                                ?>
                                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                    <div class="input-group form-group">
                                        <input placeholder="Username Or Email" name="username" required="required" class="form-control" type="text" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback material-icons">account_circle</i></span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback material-icons">lock</i></span>
                                        </div>
                                    </div>
                                    <div class="row clearfix mt-3 mb-3">
                                        <div class="col-6">
                                            <label class="">
                                                <input value="true" type="checkbox" name="rememberme" />
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block btn-md" type="submit">
                                            <i class="load-indicator">
                                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader>
                                            </i>
                                            Login <i class="material-icons">lock_open</i>
                                        </button>
                                    </div>
                                    <hr />
                                    <div class="text-center">
                                        Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                            <i class="material-icons">account_box</i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>