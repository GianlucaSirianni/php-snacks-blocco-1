<?php $games = [
    ['squadraCasa' => 'catanzaro', 'squadraOspite' => 'roma', 'puntiCasa' => 20, 'puntiOspite' => 30],
    ['squadraCasa' => 'bari', 'squadraOspite' => 'genova', 'puntiCasa' => 40, 'puntiOspite' => 10],
    ['squadraCasa' => 'milano', 'squadraOspite' => 'cagliari', 'puntiCasa' => 20, 'puntiOspite' => 60]
];

for ($i = 0; $i < count($games); $i++) {
    echo $games[$i]['squadraCasa'] . '-' . $games[$i]['squadraOspite'] . '-' . $games[$i]['puntiCasa'] . '-' . $games[$i]['puntiOspite'];
}

?>