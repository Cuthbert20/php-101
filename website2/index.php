<?php include 'server-info.php'; # this include is what gives us access to the variables in our if statment and foreach loops below. ?>
<!DOCTYPE html>
<html>
    <head>
        <title>System Info</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h1>SERVER & FILE INFO</h1>
        <!-- below is a way to use an if statement && foreach inside of HTML Markup -->
        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
                    <br>
                    <h1>Client Info</h1>
                    <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                    </li>
                <?PHP endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    </body>
</html>