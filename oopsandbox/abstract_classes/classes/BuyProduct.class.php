<?php
    include '../abstract/paymentTyes.abstract.php';

        # Extending Visa class to Buy Product so we have access to visaPayment method.
    class BuyProduct extends Visa{
        public function getPayment(){
            return $this->visaPayment();
        }
    }

?>


<!--
///////////////////////////// Showing friend how to create a react class based component///////////////////////////////
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script>
    export default class App extends React.Component{
        constructor() {
            super();
            this.state = {
                name: 'bill',
                age: 29,
                hairColor: "Pink",
                admin: false
            }
        }
        render(){
            return(
                <div>
                    <h1>Home Page </h1>
                </div>
            )
        }
    }

</script>
</body>
</html>
-->