<?php

$round = [
    [
        "teamHome" => "Phoenix Suns",
        "teamAway" => "Los Angeles Laker",
        "homePoints" => rand(85,125),
        "awayPoints" => rand(85,125),
    ],

    [
        "teamHome" => "Boston Celtics",
        "teamAway" => "Brooklyn Nets",
        "homePoints" => rand(85,125),
        "awayPoints" => rand(85,125),
    ],

    [
        "teamHome" => "Los Angeles Clippers",
        "teamAway" => "Dallas Mavericks",
        "homePoints" => rand(85,125),
        "awayPoints" => rand(85,125),
    ],

    [
        "teamHome" => "Utah Jazz",
        "teamAway" => "Memphis Grizzlies",
        "homePoints" => rand(85,125),
        "awayPoints" => rand(85,125),
    ],

    [
        "teamHome" => "Philadelphia 76ers",
        "teamAway" => "Washington Wizards",
        "homePoints" => rand(85,125),
        "awayPoints" => rand(85,125),
    ],
    
];

for ($i = 0; $i < count($round); $i++) {
    echo $round[$i]["teamHome"] . " - " . $round[$i]["teamAway"] . " | " . $round[$i]["homePoints"] . " - " . $round[$i]["awayPoints"] . "<br>";

}

?>