<?php
    $movies = array(
        "Tom and Jerry : Dr. Jekyll and Mr. Mouse" => array(
          "name_of_the_actor_1" => "Tom",
          "name_of_the_actor_2" => "Jerry",
          "name_of_the_actor_3" => "Joseph Barbera",
        ),
        "L'Île au trésor" => array(
            "name_of_the_actor_1" => "Wallace Beery",
            "name_of_the_actor_2" => "Jackie Cooper",
            "name_of_the_actor_3" => "Lionel Barrymore",
        ),
          "Body snatchers" => array(
            "name_of_the_actor_1" => "Boris Karloff",
            "name_of_the_actor_2" => "Henry Daniell",
            "name_of_the_actor_3" => "Bela Lugosi",
        ),
    );
    foreach($movies as $movie_title=> $actor){
        echo 'Dans le film ' .$movie_title.', les principaux acteurs sont :';
        if(is_array($actor)){
            foreach($actor as $key => $actor){
                 echo $actor. ', ';
            }
        }
        echo "\n";
      };
?>
