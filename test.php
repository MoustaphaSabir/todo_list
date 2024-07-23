<?php

function vardum($user){
          
   echo  '<pre>';
   var_dump($user);
   echo __FILE__ . " => " . __LINE__ . '<br>';
   echo  '</pre>';
}

$user = [
    'nom'  => "John",
    'prenom' => "Doe",
    'age' => 33,
    'genre' => "homme",
];

vardum($user);