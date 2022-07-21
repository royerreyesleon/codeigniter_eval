<!DOCTYPE html>
<html>

<head>
    <?php
        $data['title'] = 'DEMO | REGISTER'; 
        $this->load->view('/auth/shared/head', $data);
    ?>
    <!-- HERE ADD MORE FILES -->

</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <b><?= $data['title']; ?></b>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <div class="text-red text-center">
                <p>
                    <?= validation_errors(); ?>
                    <?= isset($error) ? $error : ''; ?>
                </p>
            </div>

            <form action="<?= base_url('auth/register_validation') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="full_name" value="<?= set_value('full_name'); ?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password'); ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password2" value="<?= set_value('password2'); ?>">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="<?= base_url('auth/login'); ?>" class="btn btn-primary btn-block btn-flat">
                    Login
                    <i class="fa fa-share"></i>
                </a>
            </div>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <?php $this->load->view('/auth/shared/foot', $data); ?>
    <!-- HERE ADD MORE FILES -->

</body>

</html>