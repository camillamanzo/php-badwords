<!DOCTYPE html>
<?php 
    $richardFeynman = "Richard Phillips Feynman (/ˈfaɪnmən/; May 11, 1918 – February 15, 1988) was an American theoretical physicist, known for his work in the path integral formulation of quantum mechanics, the theory of quantum electrodynamics, the physics of the superfluidity of supercooled liquid helium, as well as his work in particle physics for which he proposed the parton model. For contributions to the development of quantum electrodynamics, Feynman received the Nobel Prize in Physics in 1965 jointly with Julian Schwinger and Shin'ichirō Tomonaga.";
    $richardFeynman2 = str_replace("physicist","***", $richardFeynman);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badword</title>
</head>
<body>
    <h1>Richard Feynman</h1>
    <p><?php echo $richardFeynman ?></p>
    <h3>Paragraph length: <?php echo strlen($richardFeynman); ?></h3>
    <p>Censured word: <?php echo $_GET["censured"] ?></p>
    <p><?php echo $richardFeynman2 ?></p>
</body>
</html>