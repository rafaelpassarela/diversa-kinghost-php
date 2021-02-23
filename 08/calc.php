<html>
    <body>
        <form method="post">
            Valor A <input type="number" name="txtValorA" step=".01"> <br>
            Valor B <input type="number" name="txtValorB" step=".01"> <br>
            <input type="submit" name="operacao" value="+"/>
            <input type="submit" name="operacao" value="-"/>
            <input type="submit" name="operacao" value="x"/>
            <input type="submit" name="operacao" value="/"/>
        </form>

<?php
    if ($_POST) {
        $valorA = $_POST['txtValorA'];
        $valorB = $_POST['txtValorB'];
        $operacao = $_POST['operacao'];

        if ($operacao == '+') {
            $total = $valorA + $valorB;
        } else if ($operacao == '-') {
            $total = $valorA - $valorB;
        } else if ($operacao == 'x') {
            $total = $valorA * $valorB;
        } else if ($operacao == '/') {
            $total = $valorA / $valorB;
        }

        echo "$valorA $operacao $valorB = $total";
    }
?>

    <body>
<html>