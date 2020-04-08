<?php 
    # filter has variable, check for posted data, data in filter_has_var refers to input name.
    # filter_var function takes in 2 params, first the variable that you are filtering second is the SANITIZE || VALIDATE that you are using.
    # We are also using filter_input_array see line 68
    # also using filter_var_array see line 95

    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo "Data Found";
    // }else {
    //     echo "No Data";
    // }

    /*
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email."<br>";

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Data is an email';
    }else {
        echo 'Data is not an email';
    }
}

    # DIFFERENT FILTER VALIDATIONS THAT WE CAN DO IN PHP
        #FILTER_VALIDATE_EMAIL
        #FILTER_VALIDATE_FLOAT
        #FILTER_VALIDATE_INT
        #FILTER_VALIDATE_IP
        #FILTER_VALIDATE_REGEXP
        #FILTER_VALIDATE_URL
    # DIFFERENT FILTER SANITIZE THAT WE CAN DO IN PHP
        #FILTER_SANITIZE_EMAIL
        #FILTER_SANITIZE_ENCODED
        #FILTER_SANITIZE_NUMBER_FLOAT
        #FILTER_SANITIZE_NUMBER_INT
        #FILTER_SANITIZE_SPECIAL_CHARS
        #FILTER_SANITIZE_STRING
        #FILTER_SANITIZE_URL

        $var = 23;
        if(filter_var($var, FILTER_VALIDATE_INT)){
            echo $var . " is a number";
        }else {
            echo $var . " is not a number";
        }
    */

    // $var = "2398rfj9ijv9ahq4y";
    //? below we are using FILTER_SANITIZE_NUMBER_INT to remove all values that are not a number from $var;
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

        //! Very COOL
    // $var = '<script>alert(1)</script>';
    // echo $var;
    // using FILTER_SANITIZE_SPECIAL_CHARS we can remove the tags so that the alert in the script tags doesn't work;
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    /*
    # filter_input_array
        $filters = array(
            "data" => FILTER_VALIDATE_EMAIL,
            "dataTwo" => array(
                "filter" => FILTER_VALIDATE_INT, 
                "options" => array("min_range" => 1, "max_range" => 100))
            );
            // will not print unless the data input post is a email and the dataTwo input post is a number between 1 && 100;
        print_r(filter_input_array(INPUT_POST, $filters));

        */
            // Below we are creating an array call $arr and we are creating a filter variable $filters that
            // we will use with filter_var_array function. The first value is the array we are filtering the second
            // 
        $arr = array(
            "name" => "Spencer Knowlton",
            "age" => '37',
            "email" => "spencer@me.com"
        );
        // creating a filters array
        $filters = array(
            "name" => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords"
            ),
            "age" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 120
                )
                ),
                "email" => FILTER_VALIDATE_EMAIL
            );
        
        print_r(filter_var_array($arr, $filters));
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input name="data" type="text">
    <input name="dataTwo" type="text">
    <button type="submit">Submit</button>
</form>