<?php

$basket_matches = [
    [
        "home_team" => "squadra 1",
        "outside_team" => "squadra 2",
        "homeTeamPoints" => "64",
        "outsideTeamPoints" => "104",
    ],
    [
        "home_team" => "squadra 3",
        "outside_team" => "squadra 4",
        "homeTeamPoints" => "93",
        "outsideTeamPoints" => "78",
    ],
    [
        "home_team" => "squadra 5",
        "outside_team" => "squadra 6",
        "homeTeamPoints" => "134",
        "outsideTeamPoints" => "34",
    ],

];

var_dump($basket_matches);

foreach ($basket_matches as $sing_match) {
    echo $sing_match["home_team"] . ' - ' . $sing_match["outside_team"] . ' | ' . $sing_match["homeTeamPoints"] . ' - ' . $sing_match["outsideTeamPoints"];
    echo '<br>';
}
