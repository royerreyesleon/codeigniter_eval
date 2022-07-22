<!DOCTYPE html>
<html>

<head>
    <?php
    $data['title'] = 'DEMO | LOGIN';
    $this->load->view('/auth/shared/head', $data);
    ?>
    <!-- HERE ADD MORE FILES -->
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b><?= $data['title']; ?></b>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <div class="text-red text-center">
                <p>
                    <?= validation_errors(); ?>
                    <?= isset($error) ? $error : ''; ?>
                </p>
            </div>

            <form action="<?= base_url('auth/login_validation') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password'); ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>


            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="<?= base_url('auth/register'); ?>" class="btn btn-default btn-block btn-flat">
                    Register
                    <i class="fa fa-share"></i>
                </a>
            </div>

        </div>
    </div>

    <?php $this->load->view('/auth/shared/foot', $data); ?>
    <!-- HERE ADD MORE FILES -->

</body>

</html>