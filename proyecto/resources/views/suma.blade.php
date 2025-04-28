<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos numeros</title>
</head>
<body>
    <h2>sumar 2 numeros</h2>
    <form action="/suma" method = "post">
        @csrf
        <label for="num1">numero 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">numero 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">sumar</button>
    <label for="num 1"></label>
    </form>
    @if (isset($resultado))
        <h3>el resultado de la suma : {{$resultado}} </h3>
    @endif
    
</body>
</html>