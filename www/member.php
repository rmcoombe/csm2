
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="sweetalert-master/dist/sweetalert.min.js"></script>
    <script src="https://api.backendless.com/sdk/js/latest/backendless.min.js"></script>
    <script src="js/Chart.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var url = "http://192.168.8.159/mysql/json.php";
            var cm = window.localStorage.getItem('cm');
            console.log(cm);
            $.getJSON(url,{ "cm": cm }, function(result) {
                console.log(result);
                $.each(result, function(i, field) {
                    var name = field.name;
                    var position = field.Position;
                    var supervisor = field.Supervisor;
                    var team = field.Team;
                    var mont = field.MonT;
                    var tuet = field.TueT;
                    var wedt = field.WedT;
                    var thut = field.ThuT;
                    var frit = field.FriT;
                    var satt = field.SatT;
                    var sunt = field.SunT;
                    $("#name").append(name);
                    $("#team").append(team);
                    $("#position").append(position);
                    $("#supervisor").append(supervisor);
                    $("#mont").append(mont);
                    $("#tuet").append(tuet);
                    $("#wedt").append(wedt);
                    $("#thut").append(thut);
                    $("#frit").append(frit);
                    $("#satt").append(satt);
                    $("#sunt").append(sunt);
                });
            });
        });

    </script>
</head>

<body>
    <div class="bar bar-header bar-positive" style="margin-bottom:80px; ">

        
    </div><br /><br />
    <p id="name">Name: </p>
    <p id="team">Team: </p>
    <p id="position">Position: </p>
    <p id="supervisor">Supervisor: </p>

    <h3>Last 7 Days</h3>
      <table id="table" style="width:100%">
      <tr>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
        <th>Sun</th>    
      </tr>
      <tr>
        <td id="mont"></td>
        <td id="tuet"></td>
        <td id="wedt"></td>
        <td id="thut"></td>
        <td id="frit"></td>
        <td id="satt"></td>
        <td id="sunt"></td>
      </tr>
    </table>
</body>

</html>