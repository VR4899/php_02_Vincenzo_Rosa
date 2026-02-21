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




$numbers = [19, 28, 6, 42, 33, 65, 34,  20, 99, 10];

$counter = 0;
$total = 0;

foreach($numbers as $number){
    if ($number %2 == 0){
        $total += $number;
        $counter++;
    }
}
echo $total/$counter;

for ($i = 1; $i <= 100; $i++)
    switch ($i) {
        case $i %3 == 0:
            echo "PHP \n";
            break;
            case $i %5 == 0:
                echo "JAVASCRIPT \n";
                break;
                case $i %15 == 0:
                echo "HACKADEMY \n";
                break;
                default: 
                echo "$i \n";

    };
