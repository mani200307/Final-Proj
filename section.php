<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
        <h1>VEHICLE MANAGEMENT SYSTEM</h1>
        <div class="cont">
        <h2><br><br><span class="auto-type"></span></h2>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        
        <script>
          var typed = new Typed(".auto-type", {
            strings: ["ADD VEHICLE","MODIFY VEHICLE","ADD DRIVER"],
            typeSpeed: 150,
            backSpeed: 120,
            loop: true
          })
        </script>

        <div class="team">
            <div class="team_mem">
                <h3>ADD VEHICLE</h3>
                <br>
                <p> Want to ADD more Vehicles? <br>
                    This module appends a Vehicle to the existing list of Vehicles. 
                </p>
            </div>
            <div class="team_mem">
                <h3>MODIFY VEHICLE</h3>
                <br>
                <p> Want to MODIFY Vehicles? <br>
                    This module modifies a Vehicle from the existing list of Vehicles. 
                </p>
            </div>
            <div class="team_mem">
                <h3>ADD DRIVER</h3>
                <br>
                <p> Want to add more Drivers? <br>
                    This module appends a Driver to the desired Vehicle chosen. 
                </p>
            </div>
        </div>
    </div>



<br>
<footer class="text-center">
  <p>Copyright &copy; 2022 All rights reserved</p>
</footer>

</body>
</html>