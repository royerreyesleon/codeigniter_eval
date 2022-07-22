<header class="main-header">
    <a href="<?= base_url('admin/index') ?>" class="logo">
        <span class="logo-mini">DEMO</span>
        <span class="logo-lg"><b>DEMO</b></span>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url(ADMINLTE) ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $this->session->userdata('GLOBAL_USER_EMAIL') ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?= base_url(ADMINLTE) ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                <?= $this->session->userdata('GLOBAL_USER_EMAIL') ?>
                            </p>
                        </li>
                        <li class="user-footer">
                            <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger bg-red btn-flat btn-block">Sign out</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout') ?>" class=" btn-danger bg-red">Logout <i class="fa fa-share"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>