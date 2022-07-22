<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <!-- DIRECT CHAT PRIMARY -->
        <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Chat Bot</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="box-body">

                <div class="direct-chat-messages" style="height: 50vh;">

                    <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Bot</span>
                        </div>
                        <img class="direct-chat-img" src="<?= base_url(ADMINLTE) ?>dist/img/bot.png" alt="Message User Image"><!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Hola bienvenido, soy el chatbot, escribe: hola
                        </div>
                    </div>

                </div>

            </div>

            <div class="box-footer">
                <form id="form_chatbot">
                    <div class="input-group">
                        <input type="text" id="message" name="message" placeholder="Type Message ..." class="form-control" autofocus>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-flat">
                                Send
                                <i class="fa fa-send"></i>
                            </button>
                        </span>

                        <input type="hidden" id="base_url" value="<?= base_url(ADMINLTE); ?>">
                        <input type="hidden" id="user_email" value="<?= $this->session->userdata('GLOBAL_USER_EMAIL'); ?>">
                        <input type="hidden" id="user_img" value="<?= base_url(ADMINLTE) ?>dist/img/user.png">
                        <input type="hidden" id="chatbot_img" value="<?= base_url(ADMINLTE) ?>dist/img/bot.png">
                    </div>
                </form>
            </div>

        </div>
        <!--/.direct-chat -->
    </div>
    <!-- /.col -->

</div>