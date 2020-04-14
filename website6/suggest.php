<?php
// People Array @TODO - GET from static array DB $people below
$people[] = "Stu";
$people[] = "Spencer";
$people[] = "Bryn";
$people[] = "Ryk";
$people[] = "Cody";
$people[] = "Juno";
$people[] = "Bill";
$people[] = "Jill";
$people[] = "Bob";
$people[] = "Rob";
$people[] = "Robert";
$people[] = "Nat";
$people[] = "Boe";
$people[] = "Kylie";
$people[] = "Cord";
$people[] = "Dena";
$people[] = "Ken";
$people[] = "Lisa";
$people[] = "Matt";
$people[] = "Jim";
$people[] = "Me";


// Get Query String from xmlhttp.open("GET", "suggest.php?q="+str, true);
$q = $_REQUEST['q']; // using $_REQUEST instead of $_GET or $_POST so it will catch either.

$suggestion = "";

// Get Suggestions
if($q !== ""){
    // Getting Text
    $q = strtolower($q);
    // Getting Length of Text
    $len = strlen($q);
    foreach($people as $person){
        // stristr function returns the first occurrence of the query ie($q) inside of $person
        // substr function returns part of a string from php.net substr ( string $string , int $start [, int $length ] ) : string
        if(stristr($q, substr($person, 0, $len))){
    if($suggestion === ""){
        $suggestion = $person;
    }else{
            // .= is appending to $suggestion
        $suggestion .= ", $person";
    }
        }
    }
}

echo $suggestion = '' ? "No Suggestion" : $suggestion;