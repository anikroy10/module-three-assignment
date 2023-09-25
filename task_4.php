<?php
//Multidimensional Array
$studentGrades = [
    ["Math" => 97, "English" => 96, "Science" => 98],
    ["Math" => 90, "English" => 98, "Science" => 100],
    ["Math" => 88, "English" =>98, "Science" => 92]
];

function calculateAverageGrade($studentGrades){
    foreach($studentGrades as $grade){
        echo "Average grade : ".(($grade["Math"] + $grade["English"] + $grade["Science"])/3)."\n";
    }
}

calculateAverageGrade($studentGrades);


//Another version
// $studentGrades = [
//     "Anik" => ["Math" => 95, "English" => 90, "Science" => 98],
//     "John" => ["Math" => 80, "English" => 98, "Science" => 100],
//     "Dabid" => ["Math" => 90, "English" =>96, "Science" => 92]
// ];

// function calculateAverageGrade($studentGrades){
//     foreach($studentGrades as $student => $grade){
//         echo "Average grade of ".$student." : ".(($grade["Math"] + $grade["English"] + $grade["Science"])/3)."\n";
//     }
// }

// calculateAverageGrade($studentGrades);

