<!-- ignore, for dev
<br><a href="" target="_blank"></a>
<br><a href="https://fr.wikipedia.org/wiki/" target="_blank">Wikipedia</a>
-->

<html>
    <head>
        <title>Useless Knowledge</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <img src="UK-ai-no-bg.png" alt="icon for the Website" class="icon" id="i1">
        <img src="UK-ai-no-bg-reversed.png" alt="icon for the Website" class="icon" id="i2">
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
            else{
                echo "<div class='container'><div class='welcome'>Bienvenue sur le site Useless Knowledge !</div></div>";
            }
            echo "<div class='fin'><div class='container'>La base de données comporte actuellement ".$lineCount." informations inutiles.</div></div>";
        ?>
        <form action="index.php" method="post">
            <div class="container" id="button">
                <button type="submit" name="submit" class="button"><span class="button-content">Afficher une information inutile</span></button>
            </div>
        </form>
    </body>
</html>