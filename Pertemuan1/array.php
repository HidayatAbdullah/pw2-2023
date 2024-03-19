<?php

// Default
// Associative Array
// Multidimensional Array

// Default
     // $fruits = ["Mangga", "Berry", "Kiwi"];

     // foreach ($fruits as $fruit) {
     //      echo $fruit;
     //      echo '<br>';
     // }

// Associative Array
     // $dinos = [
     //      "dinoName" => "Rex",
     //      "dinoAge" => 500,
     //      "isMerried" => "false"
     // ];
     
     // foreach ($dinos as $dino) {
     //      echo $dino;
     //      echo '<br>';
     // };

// Multidimensional Array
     $dinos = [
          [
               "dinoName" => "Rex",
               "dinoAge" => 500
          ],
          [
               "dinoName" => "Bracio",
               "dinoAge" => 800
          ],
          [
               "dinoName" => "Ptera",
               "dinoAge" => 250
          ]
     ];

     foreach ($dinos as $dino) {
          echo $dino["dinoName"];
          echo $dino["dinoAge"];
          echo '<br>';
     }


?>