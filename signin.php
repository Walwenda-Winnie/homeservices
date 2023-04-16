<?php
include_once "./include/header.php";
include_once "./msg/signin.php";
?>


<style>
         body {
            background-image: url("images/female-customer-watch-male-mechanic-repair-tv-female-customer-watch-male-mechanic-electrician-repair-tv-set-home-man-250969929.jpg");
            background-repeat: no-repeat;
            background-size: cover;
         }
      </style>
<div class="container" style="margin-top: 50px; width: 450px;">

        <img src="./images/providers.jpeg" style="height: 150px; width: 150px; margin-left: 130px" class="card-img-top"
            alt="...">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center"><font color="blue">Welcome. Please login.</font color></h3>
            </div>
            <hr>

            <form action="scripts/signin.php" method="post">
                <div class="form-group">
                    <label for=""><font color="black">Contact No.</font color></label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Enter Your Contact No."
                        minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Password</font color></label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter Password" minlength="4" required>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-info" type="submit" name="login"
                    id="login">Login</button>
            </form>

        </div>
    </div>
</div>


<?php include_once "./include/footer.php";
