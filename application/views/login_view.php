<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Weonly Health Exercise">
        <meta name="author" content="Weonly">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    
        <title>Login - We Only</title>

        <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css") ?>"/>

        <!-- Sweetalert2 core CSS -->
        <link href="<?php echo base_url("vendor/swal/css/sweetalert2.min.css") ?>" rel="stylesheet">
    </head>

    <body>
        <div class="login-box">
            <h2>Login</h2>
            <form id="form-login" autocomplete="off">
                <div class="user-box">
                    <input type="text" name="username" id="username" required="" autocomplete="false">
                    <label>Username</label>
                </div>

                <div class="user-box">
                    <input type="password" name="password" id="password" required="" autocomplete="false">
                    <label>Password</label>
                </div>

                <a href="#" id="form-submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </a>
            </form>
        </div>

        <!-- JQuery core JavaScript -->
        <script src="<?php echo base_url("vendor/jquery/jquery.min.js") ?>"></script>
        <!-- Sweetalert2 core JavaScript -->
        <script src="<?php echo base_url("vendor/swal/sweetalert2.all.min.js") ?>"></script>

        <script>
            // request login using ajax
            $("#form-submit").click(function(e) {
                e.preventDefault();

                if($('#username').val().length <= 0 || $('#password').val().length <= 0) {
                    Swal.fire(
                    'Warning',
                    'Please complete your data',
                    'warning'
                    )

                    return false;
                }

                $.ajax({
                    url: "<?php echo base_url('dashboard/request_login'); ?>",
                    method: "POST",
                    data: $('#form-login').serialize(),
                    dataType: "JSON",
                    success: function(data){
                        if(data.status){
                            Swal.fire(
                                'Success',
                                'Successfully login',
                                'success'
                            )
                            
                            setTimeout(() => {
                                location.href = "<?php echo base_url('dashboard'); ?>";
                            }, 1000);
                        }else{
                            Swal.fire(
                                'Warning',
                                'Failed to login',
                                'warning'
                            )
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        Swal.fire(
                            'Error',
                            'Error login',
                            'error'
                        )
                    }
                });
            })
        </script>
    </body>
</html>
