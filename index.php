<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BadWords</title>
</head>
<body>
<?php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
    $badWord = $_GET['badword'];
    $badWordReplace = str_replace($badWord, "***", $paragraph);
    

?>

        <div>
            <h1>Lunghezza paragrafo:  <?php echo strlen($paragraph) . " " . "caratteri"?> </h1>
            <p> <?php echo $paragraph;?> </p>
        </div>

        <div>
            <h1>Lunghezza del nuovo paragrafo: <?php echo strlen($badWordReplace) . " " . "caratteri" ?> </h1>
            <p> <?php echo $badWordReplace;?> </p>
        </div>

    </body>
</html>