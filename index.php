<html>

    <?php
    $mysqlClient = new PDO(
	    'mysql:host=localhost;dbname=utilisateurs1;charset=utf8',
	    'root',
	    ''
    );
?>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <script>
            function buzzed(){
                var buzzé = true
                if (buzzé === true) {
                    alert("message");
                    buzzé = false
                }
            }
        </script>
        <center><div id='buzzer' class="buzzer" onclick="buzzed()"></div></center> 
    </body>
</html>


