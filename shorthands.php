<?php 
    $loggedIn = false;
    $arr = array(1,2,3,4);
/*
    if($loggedIn){
         echo "you are logged in";
    }else {
        echo "you are NOT Logged in";
    }
    */

    // echo ($loggedIn) ? "you are logged in" : "you are NOT Logged in"

    $isRegistered = ($loggedIn == true) ? true : false;
  // echo $isRegistered; // === 1 || nothing;

    $age = 7;
    $score = 15;
    # Nested Ternary
    // echo " Your Score is: " .($score > 10 ? ($age > 10 ? 'Average' : "Exceptional"):($age > 10 ? "Not so good": "Average"));

    # Alterantive syntax for loops, conditions, ect
    ?>
    <!-- Embedding statments into html -->
    <div>
    <!-- Regular Way -->
        <?php if($loggedIn){ ?>
            <h1>Welcome User</h1>
     <?php   }else { ?>
            <h1>Welcome Guest</h1>
     <?php } ?>
    </div>

    <!-- Better way then the Regular Way -->
    <div>
        <?php if($loggedIn): ?>
            <h1>Welcome User</h1>
        <?php else: ?>
            <h1>Welcome Guest</h1>
        <?php endif; ?>
    </div>

    <div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
        <?php echo "<h1>$val</h1>" ?>
    <?php endforeach; ?>
    </div>

    <div>
        <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
        <?php endfor; ?>
    </div>