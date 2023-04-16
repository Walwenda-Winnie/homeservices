<?php

include_once "./include/header.php";
$cities = ["Ntulili", "Kibiru", "Lachathuriu", "Kuani", "Matiru", "Kandebene",	"Mweronkanga", 
"Limbine", "MAANTHI", "Karii", "Mwili", "Kaliati", "Ntiba", "Kitheo", "Mucuune", "Twale",
"Kiorimba", "Machegene", "Kieru", "Kibuline", "Kimirii", "Mbeu",
"Kunene", "Limauru", "Kilenchune", "Ntombo", "Kamaroo", "Amwari",
"Kiandiu", "Ithamare", "Miathene", "Kianjai", "Mutionjuri", "Machaku", "Nairiri", 
"Mituntu", "Kalithiria", "Urru", "Thau", "Muthiru", "Lairangi", "Mumui", "Rei"];

?>
<style>
    
         body {
            background-image: url("images/My project-1.png");
            background-repeat: no-repeat;
            background-size: cover;
         }
         
      </style>

   </head>
<h2 class="text-center" style="margin-top: 20px"><font color="blue">Home  Services</font color></h2>
<hr>
<div class="container" style="margin-top:20px; margin-bottom: 60px;">


    <div class="row">
        <div class="form-group col-2">
            <label for=""><font color="black">City</font color></label>
            <select class="form-control" name="city" id="city">
                <option value="none"><font color="black">-- Select City --</font color></option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-2">
            <label for=""><font color="black">Profession Required</font color></label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">--Select Profession--</option>
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

        <div class="form-group col-2">
            <label for=""><font color="black">Action</font color></label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="providers" class="table" >


            <thead background-image: url('example_img_girl.jpg');>
                <tr>
                    <th><font color="black">Photo</font color></th>
                    <th><font color="black">Name</font color></th>
                    <th><font color="black">Address</font color></th>
                    <th><font color="black">Profession</font color></th>
                    <th><font color="black">Action</font color></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='2'><font color="black">Select city and profession..</font color></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='2'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='2'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:150px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + ",<br>" + provider.adder2 +
                                ",<br>" +
                                provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>

<?php include_once "./include/footer.php";
