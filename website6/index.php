<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--    using bootswatch for quick and easy styling-->
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <title>PHP with JavaScript & AJAX</title>
    <script>
        function showSuggestion(str){
            // console.log(str);
            if(str.length === 0){
                document.getElementById("output").innerHTML = "";
            }else {
                // AJAX REQ see URL https://www.w3schools.com/xml/ajax_xmlhttprequest_send.asp && https://www.youtube.com/watch?v=nU0KDn-vLT4&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=18 5mins on
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200){
                        document.querySelector('#output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
<div class="container">
    <h1>Search Users</h1>
    <form action="">
        Search User: <input type="text" class="form-control"
        onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight: bolder"></span></p>
</div>
</body>
</html>