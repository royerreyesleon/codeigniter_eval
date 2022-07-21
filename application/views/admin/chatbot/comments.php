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

                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Bot</span>
                        </div>
                        <img class="direct-chat-img" src="<?= base_url(ADMINLTE) ?>dist/img/bot.png" alt="Message User Image"><!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Is this template really for free? That's unbelievable!
                        </div>
                    </div>

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right"><?= $this->session->userdata('GLOBAL_USER_EMAIL') ?></span>
                        </div>
                        <img class="direct-chat-img" src="<?= base_url(ADMINLTE) ?>dist/img/user.png" alt="Message User Image"><!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            You better believe it!
                        </div>
                    </div>
                </div>
            
            </div>

            <div class="box-footer">
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-flat">Send</button>
                        </span>
                    </div>
                </form>
            </div>

        </div>
        <!--/.direct-chat -->
    </div>
    <!-- /.col -->

</div>