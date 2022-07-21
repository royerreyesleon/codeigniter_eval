
<section class="content-header">
    <h1 class="text-uppercase">
        <?php echo $this->router->fetch_class(); ?>
        <small><?php echo $this->router->fetch_method(); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?><?php echo $this->router->fetch_class(); ?>/index"><?php echo $this->router->fetch_class(); ?></a></li>
        <li class="active"><?php echo $this->router->fetch_method(); ?></li>
    </ol>
</section>