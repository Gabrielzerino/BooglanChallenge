<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booglan Challenge</title>
</head>
<body>
    <?php
    require_once 'App/Booglan.php';
    require_once 'App/Inputs.php';
       
    $test = $inputs["test"];
    $validation = $inputs["validation"];
    
    $booglanTest = new Booglan($test);
    $booglanValidation = new Booglan($validation);

    echo "<h1>Alfabeto Booglan</h1>";

    echo "<br>";

    echo "<h2>Contando preposições</h2>";

    $countPrepTest = $booglanTest->getPrep();
    $countPrepValidation = $booglanValidation->getPrep();

    echo "<h3>Preposições presentes no texto A: ".$countPrepTest."</h3>";
    echo "<h3>Preposições presentes no texto B: ".$countPrepValidation."</h3>";
    
    echo "<br>";

    echo "<h2>Contando verbos</h2>";

    $countVerbTest = $booglanTest->getVerb();
    $countVerbValidation = $booglanValidation->getVerb();

    echo "<h3>Verbos presentes no texto A: ".$countVerbTest."</h3>";
    echo "<h3>Verbos presentes no texto B: ".$countVerbValidation."</h3>";

    echo"<br>";

    echo "<h2>Contando verbos em primeira pessoa</h2>";

    $countVerbFirstTest = $booglanTest->getVerbFirst();
    $countVerbFirstValidation = $booglanValidation->getVerbFirst();

    echo "<h3>Verbos em primeira pessoa presentes no texto A: ".$countVerbFirstTest."</h3>";
    echo "<h3>Verbos em primeira pessoa presentes no texto B: ".$countVerbFirstValidation."</h3>";

    echo "<br>";

    echo "<h2>Contando números bonitos distintos</h2>";
    
    $booglanTest->setNumber($alphabet);
    $booglanValidation->setNumber($alphabet);

    $countBeautyWordsTest = $booglanTest->getBeautyNumber();
    $countBeautyWordsValidation = $booglanValidation->getBeautyNumber();

    echo "<h3>Números bonitos distintos presentes no texto A: ".$countBeautyWordsTest."</h3>";
    echo "<h3>Números bonitos distintos presentes no texto B: ".$countBeautyWordsValidation."</h3>";
      
    echo "<br>";

    echo "<h2>Organizando vocabulário</h2>";

    $booglanTest->setVocabulary($alphabet);
    $booglanValidation->setVocabulary($alphabet);

    $organizedVocTest = $booglanTest->getVocabularyOrdered();
    $organizedVocTestValidation = $booglanValidation->getVocabularyOrdered();

    echo "<h3>Vocabulário organizado do texto A:</h3>".implode(" ", $organizedVocTest);
    echo "<h3>Vocabulário organizado do texto B:</h3>".implode(" ", $organizedVocTestValidation);
   
    ?>
</body>
</html>