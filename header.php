<!doctype html>
<hentml lang="en">
    <head>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>
        <link href="quiz.css" rel="stylesheet" type="text/css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Welcome to Online Exam</title>
    </head>
    <body>
    <?php @$_SESSION['login'];
    error_reporting(1);
    ?>

    <?php

    include("database.php");
    extract($_POST);

    if(isset($submit))
    {
        $rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
        if(mysql_num_rows($rs)<1)
        {
            $found="N";
        }
        else
        {
            $_SESSION[login]=$loginid;
            $row = mysql_fetch_row($rs);
            $uname = $row[1];
            $name = $row[3];
            $email = $row[7];


        }
    }

    ?>

    <div class="row">

        <div class="col s3">
            <ul id="slide-out" class="side-nav fixed">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="images/office.jpeg">
                        </div>
                                            <a href="#!user"><img class="circle" src="images/users.png"></a>
                                            <a href="#!name"><span class="white-text name"><?php echo $name ?></span></a>
                                            <a href="#!email"><span class="white-text email"><?php echo $email ?></span></a>
                    </div>
                </li>

                <?php

                if (isset($_SESSION[login])){ ?>


                    <li><a class="waves-effect" href="sublist.php">Subject for Quiz</a></li>
                    <li><a class="waves-effect" href="result.php">Results</a></li>


                <?php } ?>


                <li>
                    <div class="divider"></div>
                </li>

                <li>

                    <?php
                    if (isset($_SESSION['login'])) { ?>

                        <a class="waves-effect" href="signout.php">Signout</a>


                    <?php } else { ?>
                        <form name="form1" method="post" action="">

                            <div class="row">
                                <div class="col s12">

                                    <a class="subheader">Login to System</a>

                                    <div class="divider"></div>

                                    <?php
                                    if(isset($found))
                                    {
                                        echo "Invalid Username or Password";
                                    }
                                    ?>

                                </div>


                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="loginid" id="loginid2">
                                    <label for="first_name">Username</label>

                                </div>
                                <div class="input-field col s6">
                                    <input type="password" class="validate" name="pass" id="pass2">
                                    <label for="last_name">Password</label>
                                    <input type="submit" class="waves-effect waves-light btn" name="submit"
                                           value="Login">
                                </div>
                            </div>


                        </form>

                <li><a class="waves-effect" href="signup.php">New User? Signup here</a></li>

                    <?php }
                    ?>


                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>

        <div class="col s9">
            <!-- Teal page content  -->


