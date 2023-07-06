<html>
    <head>
        <title>Useless Knowledge</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bienvenue sur le site Useless Knowledge !</h1>
        <h2>Vous trouverez ici des informations inutiles sur des sujets inutiles.</h2>

        <form action="index.php" method="post">
            <input type="submit" name="submit" value="Afficher une information inutile">
        </form>
        <?php 
            if(isset($_POST['submit'])){
                $file = fopen("infos.txt", "r");
                $lineCount = 0;
                while(!feof($file)){
                    $line = fgets($file);
                    $lineCount++;
                }
                echo "Il y a ".$lineCount." lignes dans le fichier.<br>";
                //on génère un nombre aléatoire entre 1 et le nombre de ligne du fichier
                $random = rand(1, $lineCount);
                //on lit et retourne la ligne correspondant au nombre aléatoire
                $lineCount2 = 0;
                $file = fopen("infos.txt", "r");
                while(!feof($file)){
                    $line = fgets($file);
                    $lineCount2++;
                    if($lineCount2 == $random){
                        echo "<div class='info'>".$line."</div>";
                    }
                }
            }
        ?>
    </body>
</html>