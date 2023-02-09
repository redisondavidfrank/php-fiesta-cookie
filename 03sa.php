<?php

echo "Practice 4-03<br>";
        function hp_sum($team){
            $total = 0;
            foreach($team as $hp){
                $total += $hp['hp'];
            }
            echo "The sum of hp is: ".$total."<br>";
        }
        hp_sum($team);

        function ave_attack($team){
            $total = 0;
            foreach($team as $attack){
                $total += $attack['attack'];
            }
            echo "The average of attack is: ".$total/count($team)."<br>";
        } 

        ave_attack($team);

?>
