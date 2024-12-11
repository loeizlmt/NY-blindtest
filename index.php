<html>

    <?php
    $mysqlClient = new PDO(
	    'mysql:host=localhost;dbname=ny_blindtest;charset=utf8',
	    'root',
	    ''
    );
    $identifiant = "malo";
    $mot_de_passe = "Malo1";
    $sqlQuery = 'SELECT * FROM utilisateurs1 WHERE identifiant = :identifiant AND mot_de_passe = :mot_de_passe';

    $testuser = $mysqlClient->prepare($sqlQuery);
    $testuser->execute([
    'identifiant' => $identifiant,
    'mot_de_passe' => $mot_de_passe,
    ]);
    $test = $testuser->fetch(PDO::FETCH_ASSOC);
?>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <script>
            function buzzed() {
                // Envoyer une requête Ajax
                fetch("update_buzz.php", {
                method: "POST", 
                headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: "identifiant=malo"
            })
            .then(response => response.text())
            .then(data => {
            console.log("Réponse du serveur :", data);
            })
            .catch(error => {
            console.error("Erreur :", error);
            });}
        </script>

        <center><p class="p1">Voici votre buzzer.</p></br><p class="p2">Lorsque vous cliquerez dessus, vous pourrez donner votre réponse, vous gagnerez un point par bonne réponse. </p></center>
        <center><div id='buzzer' class="buzzer" onclick="buzzed()" ></div></center> 
    </body>
</html>


