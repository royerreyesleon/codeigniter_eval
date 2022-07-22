<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url(ADMINLTE) ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $this->session->userdata('GLOBAL_USER_EMAIL') ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
       
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?= base_url('admin/index') ?>"><i class="fa fa-comments-o"></i> <span>Chat Bot</span></a></li>
            <li><a href="<?= base_url('admin/users') ?>"><i class="fa fa-users"></i> <span>Users</span></a></li>
        </ul>
    </section>

</aside>