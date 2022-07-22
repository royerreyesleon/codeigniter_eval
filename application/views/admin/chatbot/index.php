<!DOCTYPE html>
<html>

<head>
    <?php
    $data['title'] = 'DEMO | CHATBOT';
    $this->load->view('/admin/shared/head', $data);
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view('/admin/shared/header'); ?>

        <?php $this->load->view('/admin/shared/main-sidebar'); ?>

        <div class="content-wrapper">
            <?php $this->load->view('/admin/shared/content-header'); ?>

            <section class="content">

                <?php $this->load->view('/admin/chatbot/comments'); ?>

            </section>
        </div>

        <?php $this->load->view('/admin/shared/footer'); ?>

        <?php $this->load->view('/admin/shared/control-sidebar'); ?>

    </div>

    <?php $this->load->view('/admin/shared/foot', $data); ?>
    <script src="<?= base_url('assets/js/'); ?>chatbot/index-min.js"></script>
</body>

</html>