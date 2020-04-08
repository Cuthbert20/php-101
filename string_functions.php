<?php 
# substr() LIKE SUBSTRING IN JS.
# Returns a portion of a string

// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);
// echo $output;

# strlen() LENGTH OF STRING.
# Returns the length of a string like .length in js

// $name = "Spencer";
// $output = strlen($name);
// echo $output;

# strpos() FIRST OCCURENCE IN STRING
# Finds the position of the first occurence of a subString
//I am also using strtolower to convert string to lowercase

// $response = "PHP Rules";
// $output = strpos(strtolower($response), strtolower("ru"));
// echo $output;

# strrpos() LAST OCCURENCE IN STRING
#Find the numeric position of the last occurrence of needle in the haystack string.

// $response = "Testing one two three one two three";
// $output = strrpos(strtolower($response), "e");
// echo $output;

# trim()
# Strip whitespace (or other characters) from the beginning and end of a string.

// var_dump(" What is going on                   ");
// $trimmed = trim(" What is going on                        ", );
// var_dump($trimmed);
// $text   = "\t\tThese are a few words :) ...  ";
// $output = trim($text);
// var_dump($output);

# strtoupper UPPERCASE
# Makes everything uppercase.

// $output = strtoupper("hey there");
// echo $output;

#strtolower lowercase
# Makes everything lowercase.

//  $output = strtolower("what'S UP");
//  echo $output;

 # ucwords() Caps First Letter In Each Word
 # Capitalize every word in string.

//  $output = ucwords("lets see if this works");
//  echo $output;

# str_replace()
# Replace all occurences of a search string with a replacement.
# This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.

// Provides: <body text='black'>
// $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
//Replacing vowels with "*";
// $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//?First Value is the value we are searching for, second is what we will replace that value with, thrid the value that we are searching.
// $onlyconsonants = str_replace($vowels, "*", "Hello World of PHP");
// echo $onlyconsonants;

# is_string; 
//checks if variable is a string or not return 1 for true and nothing for false;

// $output = "4";
// $type = is_string($output);
// echo $type;
/*
$values = array(true, false, "TEST", 22.5, "19", "", " ", null);
foreach($values as $data){
    if(is_string($data)){
        // Notice that true comes back as 1 and false && null don't come back at all.
        echo "The {$data} is a string <br>";
    }else {
        echo "The {$data} Not a String <br>";
    }
}
*/

# gzcompress() && gzuncompress COMPRESS A STRING || UNCOMPRESS A STRING
# Compress a string or uncompress a string;

$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dolorem reprehenderit amet ipsam, 
fugit minus incidunt provident, beatae officiis necessitatibus pariatur quae, commodi nobis ab error quibusdam libero quo. 
Et tempore accusamus placeat sint mollitia rerum quos doloribus earum voluptas fugit. Beatae, excepturi voluptatem blanditiis 
dolorum deleniti commodi, eligendi voluptas eaque quia asperiores perspiciatis modi, consequuntur cumque voluptatibus sit unde 
ea voluptate laborum laudantium qui natus nam. Ratione facilis, porro dolor reiciendis tempora totam perspiciatis amet quas eaque 
non eius ipsum ea magni quis ex maiores illo, consectetur, quaerat dicta. Unde fuga, esse eaque praesentium culpa numquam voluptas 
distinctio at.";
$compressed = gzcompress($string);
echo $compressed;
echo gzuncompress($compressed);
