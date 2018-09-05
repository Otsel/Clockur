<!DOCTYPE HTML>
<head>
    <title>Clockur</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Raleway|Anonymous+Pro|Ubuntu+Mono" rel="stylesheet">

</head>

<body>

   <div class="container"> 
        <div id="time">
            00:00:00 PM
        </div>
        <form id="button-group" method="post" action="">
            <input type="text" id="projectName" name="projectName" placeholder="Project Name" required></input>
            <button type="submit" id="start">Start</button>
            <button type="submit" id="stop">Stop</button>
        </form>
        <div class="timestamps">
            <ul class="list">
                <li id="1"></li>
            </ul>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

    $(document).ready(function() {
        var stampNum = 1;
        localStorage.setItem("storage",stampNum);
        

        setInterval(function(){
            $('#time').load("time.php");
        }, 1000);

        $('#start').on("click", function() {
            $('#' + stampNum).load("timestamp.php");
            var projectName = $("#projectName").val();
            localStorage.setItem("projectName", projectName);
        });

        $('#stop').on("click", function() {
            $('#' + stampNum).load("stop.php");
            var projectName = $("#projectName").val();
            localStorage.setItem("projectName", projectName);
        });

        $('#button-group').on('submit', function(e){
            e.preventDefault();
        });
    });

</script>

</body>