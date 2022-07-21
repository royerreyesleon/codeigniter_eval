<!DOCTYPE html>
<html>

<head>
    <?php
    $data['title'] = 'DEMO | ADMIN';
    $this->load->view('/admin/shared/head', $data);
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php $this->load->view('/admin/shared/header'); ?>

        <?php $this->load->view('/admin/shared/main-sidebar'); ?> 

        <div class="content-wrapper">
            <?php $this->load->view('/admin/shared/content-header'); ?>

            <section class="content">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Title</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        Start creating your amazing application!
                    </div>
                    <div class="box-footer">
                        Footer
                    </div>
                </div>

            </section>
        </div>

        <?php $this->load->view('/admin/shared/footer'); ?> 

        <?php $this->load->view('/admin/shared/control-sidebar'); ?> 
        
    </div>

    <?php $this->load->view('/admin/shared/foot', $data); ?>
</body>

</html>