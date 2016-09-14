<html>
<meta charset="utf-8">
<body>
<!--LE PASAMOS DOS NUMEROS POR LA URL PARA QUE DEVUELVA LA SUMA      -->
<?php 
if (empty($_GET["num1"]) || empty($_GET["num2"])):?>
	No puede estar ningun parametro vacio
<?php else: ?>
	La suma es: <?php echo ($_GET["num1"]+$_GET["num2"]) ?>
<?php endif ?>

</body>
</html>