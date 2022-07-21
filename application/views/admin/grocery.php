<!DOCTYPE html>
<html>

<head>
    <?php
    $data['title'] = 'DEMO | GROCERY';
    $this->load->view('/admin/shared/head', $data);
    ?>

    <?php foreach ($css_files as $file) : ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
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
                    <div class="box-body">
                        <div style='height:20px;'></div>
                        <div style="padding: 10px">
                            <?php echo $output; ?>
                        </div>
                        
                    </div>
                </div>

            </section>
        </div>

        <?php $this->load->view('/admin/shared/footer'); ?>

        <?php $this->load->view('/admin/shared/control-sidebar'); ?>

    </div>

    <?php $this->load->view('/admin/shared/foot', $data); ?>
    <?php foreach ($js_files as $file) : ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>

</html>