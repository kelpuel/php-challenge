<?php 
$weapons = ['les poings', 'le fouet', 'le pistolet'];
$opponentWeapon = $weapons[rand(0,2)]; 
$stevensonWeapon = $weapons[rand(0,2)];
echo 'Stevenson à choisi comme arme: ' .$stevensonWeapon. ' et son adevrsaire lui à choisi: ' .$opponentWeapon."\n";
echo "\n";
            if ($opponentWeapon === $stevensonWeapon) {
                echo 'Personne ne gagne ils ont prit la même arme';
            }
            if ($stevensonWeapon === 'les poings') {
                if ($opponentWeapon === 'le fouet') {
                    echo 'Stevenson à gagné';
                } else {
                    echo 'Stevenson à perdu';
                }
            }
            if ($stevensonWeapon === 'le fouet') {
                if ($opponentWeapon === 'le pistolet') {
                    echo 'Stevenson à gagné';
                } else {
                    echo 'Stevenson à perdu';
                }
            }
            if ($stevensonWeapon === 'le pistolet') {
                if ($opponentWeapon === 'les poings') {
                    echo 'Stevenson à gagné';
                } else {
                    echo 'Stevenson à perdu';
                }
            };
?>
