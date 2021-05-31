<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/1602' => [
        [
            'title' => 'Primo Aforisma',
            'author' => 'William Shakespeare',
            'text' => 'Essere o non essere, questo è il dilemma'
        ],
        [
            'title' => 'Secondo Aforisma',
            'author' => 'William Shakespeare ',
            'text' => 'Ama tutti, credi a pochi e non far del male a nessuno.'
        ],
    ],
    '12/02/1804' => [
        [
            'title' => 'Terzo Aforisma',
            'author' => 'Immanuel Kant',
            'text' => 'Il cielo stellato sopra di me e la legge morale dentro di me'
        ]
    ],
    '08/02/1318' => [
        [
            'title' => 'Quarto Aforisma',
            'author' => 'Dante Alighieri',
            'text' => 'Lasciate ogni speranza, o voi che entrate'
        ],
        [
            'title' => 'Quinto Aforisma',
            'author' => 'Dante Alighieri',
            'text' => 'Non ragioniam di lor, ma guarda e passa'
        ],
        [
            'title' => 'Sesto Aforisma',
            'author' => 'Dante Alighieri',
            'text' => 'E se non piangi, di che pianger suoli?'
        ]
    ],
];


$date = array_keys($posts);

for ($i = 0; $i < count($date); $i++) {

    $default_data = $date[$i];

    echo $default_data . "<br>";

    for ($y = 0; $y < count($posts[$default_data]); $y++) {

        echo "TITLE: " . $posts[$default_data][$y]["title"] . "<br>" . "AUTHOR: " . $posts[$default_data][$y]["author"] . "<br>" . "TEXT: " . $posts[$default_data][$y]["text"] . "<br>";
    };
    
    echo "<br>";

}

?>