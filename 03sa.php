<?php  

$team = array(

  array( "Bulbasaur",
           "Grass",
             "Poison",
             "Overgrow", 
              45, 49, 49),

  array( "Ivysaur", 
             "Grass", 
             "Poison",
             "Overgrow", 
             60, 62, 63),

  array( "Venusaur", 
             "Grass", 
             "Poison",
             "Overgrow", 
             80, 82, 83),

  array( "Charmander", 
             "Fire", 
             "N/A", 
             "Blaze", 
             39, 52, 43),

  array( "Charmeleon", 
             "Fire", 
             "N/A", 
             "Blaze", 
             58, 64, 58),

  array( "Charizard", 
             "Fire", 
             "Flying", 
             "Blaze", 
             78, 84, 78),

  array( "Squirtle", 
             "Water", 
             "N/A", 
             "Torrent", 
             44, 48, 65),

  array( "Wartortle", 
             "Water", "N/A", 
             "Torrent", 
             59, 63, 80),

  array( "Blastoise", 
             "Water", "N/A", 
             "Torrent", 
             79, 83, 100), 

  array( "Caterpie", 
              "Bug", 
              "N/A", 
              "Shield Dust", 
              50, 20, 25),

);

function pokemon_def($team, $limit_num){

  for($i = 0; $i < 10; $i++){
    if($team[$i][5] >= $limit_num){
    echo $team[$i][6]."<br>";
    
    }  }
  }

#sample output
pokemon_def($team, 40)



?>