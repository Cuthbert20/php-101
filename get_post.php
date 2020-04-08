<?php
# Need to use isset to check if the name value is set.
# GET
if(isset($_GET["name"])){
    // echo $_GET["name"] . "<br>"; 
    // To prevent xss attack where someone submits a html tag in our inputs we can use htmlentities, which takes the power away out of HTML ELEMENTS that may be submited in our form.
    // print_r($_GET);
    $name = htmlentities($_GET["name"]);
    // echo $name;
}
# POST BEST PRACTICE TO USE!
if(isset($_POST["name"])){
    // print_r($_POST);
    // $name = htmlentities($_POST['name']);
    // echo $name;
}
# REQUEST
if(isset($_REQUEST["name"])){
    // print_r($_REQUEST);
    // $name = htmlentities($_REQUEST['name']);
    // echo $name;
}
if(isset($_GET["email"])){
    # using print_r on $_GET because it is an Associative Array.
    // print_r($_GET);
}
# method on form needs to be GET.
echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
<!-- action is where we are submiting the form -->
    <form action="get_post.php" method="GET">
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
        
            <a href="get_post.php?name=Stu">Stu</a>
        </li>
        <li>
            <a href="get_post.php?name=Spencer">Spencer</a>
        </li>
    </ul>
    <h1><?PHP echo "{$name}'s Profile"; ?></h1>
</body>
</html>