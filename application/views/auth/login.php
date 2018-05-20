<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Andi Hoerudin</title>
        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Log in</div>
                    <div class="panel-body">
                        <?php  echo form_open('Auth/chek_login') ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <button type="submit"  name=submit class="btn btn-primary">Login</button>
                        <?php echo form_close();  ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	


        <script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
