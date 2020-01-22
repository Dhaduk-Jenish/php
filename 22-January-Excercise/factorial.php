<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" class="factorial">
        Enter Numer : <input type="number" id="number"><br>
        <input type="button" value="click" onclick="countFactorial()">
    </form>
    <p id="answer"></p>
    <script type="text/javascript">

    function countFactorial(){
        var number = document.getElementById('number').value;
        var answer = 1;
        for (var i =1 ; i <= number; i++)
        {
            answer *=i;
        }
        document.getElementById("answer").innerHTML = "Factorial of entered number is :" + answer;

    }
    </script>


</body>
</html>