<html>
    <head>
        <title>Useless Knowledge</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bienvenue sur le site Useless Knowledge !</h1>
        <h2>Vous trouverez ici des informations inutiles sur des sujets inutiles.</h2>

        <?php 
            //on compte le nombre de ligne du fichier
            $file = fopen("infos.txt", "r");
            $lineCount = 0;
            while(!feof($file)){
                $line = fgets($file);
                $lineCount++;
            }
            if(isset($_POST['submit'])){
                //on génère un nombre aléatoire entre 1 et le nombre de ligne du fichier
                $random = rand(1, $lineCount);
                //on lit et retourne la ligne correspondant au nombre aléatoire
                $lineCount2 = 0;
                $file = fopen("infos.txt", "r");
                while(!feof($file)){
                    $line = fgets($file);
                    $lineCount2++;
                    if($lineCount2 == $random){
                        echo "<div class='container'><div class='info'>".$line."</div></div>";
                    }
                }
            }
            echo "<div class='fin'><div class='container'>Le fichier comporte actuellement ".$lineCount." informations inutiles.</div></div>";
        ?>
        <form action="index.php" method="post">
            <div class="container" id="button">
                <button type="submit" name="submit" class="button"><span class="button-content">Afficher une information inutile</span></button>
            </div>
        </form>
    </body>
</html>