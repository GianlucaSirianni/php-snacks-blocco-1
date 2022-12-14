<?php

// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

// i = ogni parentesi quadra
// n = ogni info in ogni parentesi quadra

$array = [
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'vote' => [7,8,8,5,7,4]
    ],
    [
        'name' => 'Elia',
        'lastname' => 'Magris',
        'vote' => [7,7,8,6,7,3]
    ],    
    [
        'name' => 'Paolo',
        'lastname' => 'Nicoletti',
        'vote' => [7,9,8,9,3,1]
    ]
]

?>


<?php

foreach($array as $value){
    echo $value['name'];
    echo $value['lastname'];
    echo array_sum($value['vote']) / count($value['vote']) . '<br/>';
}

?>






<!DOCTYPE html>
<html lang='en'>

<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Title</title>
<!-- BOOSTRAP CSS LINK-->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
<!-- FONTAWESOME LINK-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
<!-- CSS LINK-->
<link rel='stylesheet' href='./style.css'>
</head>

<body>





<!-- BOOTSTRAP JAVASCRIPT LINK-->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>

<!-- JAVASCRIPT LINK-->
<script type='text/javascript' src='./main.js'></script>
</body>

</html>

