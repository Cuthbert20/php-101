<?php
    // Working with File System Functions in PHP
    //THIS IS IMPORTANT!

    // Functions that work with File System Paths
    $path = 'acc/dir1/myfile.php';
    $file = "file1.txt";
    $folder = "subfolder";
    // Return Filename with extension
    echo basename($path);
    echo "<br>";
    // Return Filename without extension
    echo basename($path, ".php");
    echo "<br>";
    // Return the directory name from path
    echo dirname($path);
    echo "<br>";
    // Check if file exists will return 1 if true nothing if false; NOTE file_exists works for a folder/dir as well
    echo file_exists($file) ." " . file_exists("subfolder");
    echo "<br>";
    // Get abs path ie full/real path
    echo realpath($file);
    echo "<br>";
    // Checks to see if file exists doesn't work with folders/dirs
    echo is_file($file);
    echo "<br>";
    // Check if file is writeable, checking if file is read only
    echo is_writable('file1.txt');
    echo "<br>";
    // Check if file is readable
    echo is_readable($file);
    echo "<br>";
    // Get file size
    echo filesize($file);
    echo "<br>";

    // Functions that can manipulate a file system such as rename, create, copy, ect
    // Create a directory
//    mkdir('testing');
    // Delete a directory as long as there are no files in it ie directory is empty
//    rmdir('testing');
    // Copy a file content and create a new file with that content (first arg file to be copied, second arg file name we are copying content to)
//    echo copy('file1.txt', 'file2.txt');
    // Rename a file
//    rename('file2.txt', 'myfile.txt');
    // Delete a file
//    unlink('myfile.txt');
    // Write from file to string. ie displaying the file content
    echo file_get_contents($file);
    echo "<br>";
    // Write a string to the file and replace the content with whatever string we pass in as the second arg.
//    file_put_contents($file, "Foo Bar");
    // Getting the file content, append on to file content and then put content back. Note every time it this runs it will append the string foobar.
/*
    $current = file_get_contents($file);
    $current .= " foobar";
    file_put_contents($file, $current);
*/

    // Put a file into a file into a variable(called a handle) then run continuous functions on that handle
    // Open file for Reading
/*
    $handle = fopen($file, "r");
    $data = fread($handle, filesize($file)); // second arg is the length
    echo $data;
    fclose($handle);
*/
    // Creating a file file2.txt writing to it foobar7 and then closing it.
    $handle = fopen('file2.txt', 'w');
    $text = "foobar7\n";
    fwrite($handle, $text);
    $text = " writing to file again with a new line\n"; // use double quotes to create a new line.
    fwrite($handle, $text);
    fclose($handle);
    echo file_get_contents('file2.txt');
