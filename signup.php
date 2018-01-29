<?php include("header.php");
include("database.php");
?>

    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Welcome to Quiz</h1>
        <div class="row center">
            <h5 class="header col s12 light">New User? Signup here</h5>
        </div
        <br><br>

        <div class="row">
            <form class="col s12" method="post" action="signupuser.php">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" name="name" class="validate" required>
                        <label for="first_name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" name="lid" type="text" class="validate" required>
                        <label for="last_name">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="disabled" type="password" class="validate" name="pass" required>
                        <label for="disabled">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="cpass" required>
                        <label for="password">Re-Enter Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" class="validate" name="address" required>
                        <label for="email">Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" class="validate" name="city" required>
                        <label for="email">City</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" class="validate" name="phone" required>
                        <label for="email">Phone Number</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email">email</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="Submit">Submit
                    <i class="material-icons right">send</i>
                </button>

            </form>
        </div>

    </div>



<?php include("footer.php")?>