<?php include_once "./include/header.php"; ?>

<?php
$cities = ["Ntulili", "Kibiru", "Lachathuriu", "Kuani", "Matiru", "Kandebene",	"Mweronkanga", 
"Limbine", "MAANTHI", "Karii", "Mwili", "Kaliati", "Ntiba", "Kitheo", "Mucuune", "Twale",
"Kiorimba", "Machegene", "Kieru", "Kibuline", "Kimirii", "Mbeu",
"Kunene", "Limauru", "Kilenchune", "Ntombo", "Kamaroo", "Amwari",
"Kiandiu", "Ithamare", "Miathene", "Kianjai", "Mutionjuri", "Machaku", "Nairiri", 
"Mituntu", "Kalithiria", "Urru", "Thau", "Muthiru", "Lairangi", "Mumui", "Rei"];
?>

<style>
         body {
            background-image: url("images/pexels-photo-1643383.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
         }
      </style>

<?php include_once "msg/register.php"; ?>
<div class="container" style="margin-top: 30px; max-width: 800px;margin-bottom: 60px;">
    
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center"><font color="black">Register AS Service Provider</font color></h3>
            </div>
            <hr>


            <form action="scripts/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""><font color="black">Name</font color></label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Contact No.</font color></label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact" minlength="10"
                        maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Address Line 1</font color></label>
                    <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Address Line 2</font color></label>
                    <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">City</font color></label>
                    <select class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Photo(Square Size)</font color></label>
                    <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1"
                        required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Add Description</font color></label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Give a short description about you..." required></textarea>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Password</font color></label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter 6 Character Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for=""><font color="black">Profession</font color></label>
                    <select class="form-control" name="profession" id="profession">
                        <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="handymanservices">Handyman Services</option>
                        <option value="housecleaning">House Cleaner</option>
                        <option value="gardenservices">Garden Services</option>
                        <option value="interiordecorator">Interior Decorator</option>
                          <option value="homeinspectionservices">Home Inspection Services</option>
                          <option value="personalorganizer">Personal Organizer</option>
                          <option value="personaldriver">Personal Driver</option>
                    </select>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-success" type="submit" name="register"
                    id="register">Register</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";
