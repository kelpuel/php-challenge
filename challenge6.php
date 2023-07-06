<?php
    $animal = ['Le loup' => 1,
    'Le chien' => 2, 
    "L'Ours" => 3,
    "L'Aigle" => 4,
    'Le tigre' => 5];
    $places = ['la lune' => 1,
    'le soleil' => 2,
    'la montagne' => 3,
    'le temple' => 4,
    "l'arbre mystique" => 5];
    $randAnimal=(array_rand($animal, 1));
    $randPlaces=(array_rand($places, 1));
    
    function writeSecretSentence($randAnimal, $randPlaces): string
    {
        $strRandAnimal = json_encode($randAnimal);
        $strRandPlaces = json_encode($randPlaces);
        $result = $strRandAnimal. " s'incline devant " .$strRandPlaces. ".";
        return $result;
    }
    echo writeSecretSentence($randAnimal, $randPlaces);