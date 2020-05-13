<?php

    include('config.php');
    //include('session.php');
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // username and password sent from form
        $myusername = mysqli_real_escape_string($db_conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db_conn,$_POST['password']);

        $sql = "SELECT id FROM login_user WHERE username='$myusername' and password='$mypassword'";
        $result = mysqli_query($db_conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count == 1) {
            //session_register("myusername");
            $_SESSION['login_user'] = $myusername;
            header("location: library.php");
            exit;
        }
        else {
            $error = "Your Username or Password is invalid. Make sure you entered the correct department.";
        }

    }

    if (isset($_SESSION['login_user'])) {
        header("location: library.php");
    }
?>

<html>
<head>
    <title>Homeowner Login</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="css/semantic.js"></script>

<style type="text/css">
    body {
        background-color: #b9b9b9;
    }
    body > .grid {
        height: 100%;
    }
    .image {
        margin-top: -100px;
    }
    .column {
        max-width: 450px;
    }
    .ui.teal.header {
        color: #38ac46 !important;
</style>
<script>
    $(document)
        .ready(function() {
            $('.ui.form')
                .form({
                    fields: {
                        username: {
                            identifier  : 'username',
                            rules: [
                                {
                                    type   : 'empty',
                                    prompt : 'Please enter your username'
                                }
                            ]
                        },
                        password: {
                            identifier  : 'password',
                            rules: [
                                {
                                    type   : 'empty',
                                    prompt : 'Please enter your password'
                                }
                            ]
                        }
                    }
                })
            ;
        })
    ;
</script>

<link rel="stylesheet" type="text/css" href="css/components/reset.css">
<link rel="stylesheet" type="text/css" href="css/components/site.css">

<link rel="stylesheet" type="text/css" href="css/components/container.css">
<link rel="stylesheet" type="text/css" href="css/components/grid.css">
<link rel="stylesheet" type="text/css" href="css/components/header.css">
<link rel="stylesheet" type="text/css" href="css/components/image.css">
<link rel="stylesheet" type="text/css" href="css/components/menu.css">
    <link rel="stylesheet" type="text/css" href="css/components/dropdown.css">
    <script src="css/components/dropdown.js"></script>

<link rel="stylesheet" type="text/css" href="css/components/divider.css">
<link rel="stylesheet" type="text/css" href="css/components/segment.css">
<link rel="stylesheet" type="text/css" href="css/components/form.css">
<link rel="stylesheet" type="text/css" href="css/components/input.css">
<link rel="stylesheet" type="text/css" href="css/components/button.css">
<link rel="stylesheet" type="text/css" href="css/components/list.css">
<link rel="stylesheet" type="text/css" href="css/components/message.css">
<link rel="stylesheet" type="text/css" href="css/components/icon.css">
<script src="css/components/form.js"></script>

</head>
<body>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">

            <img src="logo_500px.png" class="image">

            <div class="content">
               One Cainta College Portal
            </div>
        </h2>
        <form class="ui large form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <div class="ui stacked segment">
                <div class="field">
                    <div style="width: 50%;display:inline">
                        <select class="ui dropdown search labeled selection">
                        <div class="text" contenteditable="true"></div>
                        <i class="dropdown icon"></i>

                        <option value="">Select Department</option>
                        <option value="AL">Admission</option>
                        <option value="AK">Library</option>
                            <option value="AK">Clinic</option>
                            <option value="AK">Registrar</option>
                            <option value="AK">Faculty</option>
                    </select>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="ui fluid large teal submit button">Login</div>

            </div>
        </form>
        <?php
            //echo $error;
            if(isset($error)){
                echo "<div class=\"field\" >";
                echo "<div class=\"ui error message\" style=\"display: inline-grid\">";
                echo $error;
                echo '';
                echo "</div></div>";
                unset($error);
            }?>
    </div>
</div>
<script>
    $('.ui.dropdown')
        .dropdown();
    $('.message .close')
        .on('click', function() {
            $(this)
                .closest('.message')
                .transition('fade')
            ;
        });
</script>
</body>
</html>
