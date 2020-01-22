<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p id="series"></p>

</body>

<script type="text/javascript">

    var fibo = [0, 1];

    for (var i = 2; i < 10; i++) {
        sum = fibo[i - 1] + fibo[i - 2];
        fibo.push(sum);
    }
    document.getElementById('series').innerHTML = fibo.join(","); 
</script>

</html>