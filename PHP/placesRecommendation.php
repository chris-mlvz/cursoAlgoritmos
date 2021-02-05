<?php
function placesRecommendation($condition = '', $question = '')
{
    $weather = array("Bogota" => "cold", "Montería" => "hot", "Medellín" => "mild");
    $ubication = array("Guijara" => "north", "Leticia" => "south", "Santander" => "east", "Antioca" => "west");
    $tourism = array("Santa Marta" => "sea", "Villavivencio" => "plains", "Riohacha" => "desert", "Quidío" => "valley");

    switch ($condition)
    {
        case 'weather':
            $search = $weather;
            break;
        case 'ubication':
            $search = $ubication;
            break;
        case 'tourism':
            $search = $tourism;
            break;
        default:
            echo "Welcome to Colombia!";
            break;
    }
    echo "The perfect place for you is ".array_search($question, $search);
}
placesRecommendation("ubication","south");
