<?php
    //Excercise 1

  /*  $firstname = "ashish";
	$middlename = "rajeshbhai";
	$surname ="varsani";
    echo implode(" ",[ucfirst($firstname) ,ucfirst($middlename) ,ucfirst($surname)]);     */


    // excercise 2
 /* 
 
 /*  $text = "Hello, World! How are you doing?";
    echo strlen($text) . "<br>";
    echo strtolower($text) . "<br>";
    echo strtoupper($text) . "<br>"; 
    echo str_replace("How are you doing","Fine, thank you!",$text) . "<br>";
    echo substr($text,0,10) . "<br>"; 
    echo substr($text,7);   */


    // excercise 3
 /*   $sentence = "The quick brown fox jumps over the lazy dog";
    echo strpos($sentence,"fox") . "<br>";
    echo strstr($sentence,"cat") . "<br>";
    echo substr($sentence,0,20);   */


    // excercise 4
 /*   $name = "John";
    echo str_pad($name,10,"_", STR_PAD_LEFT) . "<br>";
    echo str_pad($name,8,"*", STR_PAD_RIGHT);          */


    // excercise 5
    $quote = "In three words I can sum up everything I've learned about life: it goes on.";
    echo str_word_count($quote) . "<br>";
    echo strtolower($quote) . "<br>";
    echo ucwords($quote);
    



?>