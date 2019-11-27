<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $months = ['janvier ', 'février ', 'mars ', 'avril ', 'mai ', 'juin ', 'juillet ', 'aout ', 'septembre ', 'octobre ', 'novembre ', 'decembre '];
    foreach ($months as $value)
    {echo $value;
    }
    $departments = [' 02 ' => 'Aisne ' , ' 59 ' => 'Nord ' , ' 60 ' => 'Oise ' , ' 80 ' => 'Somme '];
    foreach ($departments as $key => $value)
    {echo "Le département " . $value . "a pour numéro" . $key;
    }
    ?>
    
</body>
</html>