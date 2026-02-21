<?php
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Carlo', 'surname' => 'Ferrari', 'gender' => 'M'],
  ['name' => 'Roberta', 'surname' => 'Mucci', 'gender' => 'F'],
  ['name' => 'Susanna', 'surname' => 'Manfredi', 'gender' => 'F'],
];

foreach ($users as $user){
    if ($user['gender']== 'F' ) {
            echo "Buongiorno Sig.ra " . $user['name'] ." ". $user['surname']. "\n";
    }elseif($user['gender']== 'M'){
        echo "Buongiorno Sig. ". $user['name'] ." ". $user['surname']."\n"; 
    } elseif ($user['gender']== 'NB'){
        echo "Buongiorno" . $user['name'] ." ".  $user['surname'] ."\n";
    }
    }