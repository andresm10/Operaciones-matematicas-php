<?php
	//CÓDIGO POR CODIGOWEBLIBRE: http://codigoweblibre.blogspot.com
	$resultado_suma = 0;
	$resultado_resta = 0;
	$resultado_multiplicacion = 0;
	$resultado_division = 0;
	$resultado_seno = 0;
	$resultado_coseno = 0;
	
	if(isset($_POST["sumar"])){
		$resultado_suma = $_POST["suma_valor_1"] + $_POST["suma_valor_2"]; 
	}
	
	if(isset($_POST["restar"])){
		$resultado_resta = $_POST["resta_valor_1"] - $_POST["resta_valor_2"]; 
	}
	
	if(isset($_POST["multiplicar"])){
		$resultado_multiplicacion = $_POST["multiplicacion_valor_1"] * $_POST["multiplicacion_valor_2"]; 
	}
	
	if(isset($_POST["dividir"])){
		if($_POST["division_valor_2"]<1){
			?>
            <script>
				alert("No puedes dividir por cero.");
			</script>
			<?php		
		}else{
			$resultado_division = $_POST["division_valor_1"] / $_POST["division_valor_2"]; 
		}
	}
	//CÓDIGO POR CODIGOWEBLIBRE: http://codigoweblibre.blogspot.com
	if(isset($_POST["seno"])){
		if(isset($_POST["seno_valor"]) && $_POST["seno_valor"]!=""){			
			$resultado_seno = sin($_POST["seno_valor"]);
		}
	}
	
	if(isset($_POST["coseno"])){
		if(isset($_POST["coseno_valor"]) && $_POST["coseno_valor"]!=""){
			$resultado_coseno = cos($_POST["coseno_valor"]);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operaciones matematicas en PHP.</title>
<style>
	*{
		font-family:Verdana, Geneva, sans-serif;
		color:#633;		
	}
</style>
</head>

<body bgcolor="#AAE9C0">
	<form method="post">
    	<div style="text-align:center;">
        	<h1>Operaciones matem&aacute;ticas basicas en PHP</h1>
            <h2><a href="http://codigoweblibre.blogspot.com" target="_blank">http://codigoweblibre.blogspot.com</a></h2>
        </div>
    	<table border="0" align="center">
        	<tr>
                <td><label>Suma</label></td>
                <td><input type="text" placeholder="Valor 1" name="suma_valor_1" value="<?php if(isset($_POST["suma_valor_1"])){echo $_POST["suma_valor_1"];} ?>" /></td>
                <td><input type="text" placeholder="Valor 2" name="suma_valor_2" value="<?php if(isset($_POST["suma_valor_2"])){echo $_POST["suma_valor_2"];} ?>" /></td>
                <td><label>=</label></td>
                <td><input type="text" name="" value="<?php if(isset($resultado_suma)){echo $resultado_suma;} ?>" /></td>
                <td><input type="submit" name="sumar" value="Sumar" /></td>
            </tr>
			<tr>
            	<!--CÓDIGO POR CODIGOWEBLIBRE: http://codigoweblibre.blogspot.com-->
                <td><label>Resta</label></td>
                <td><input type="text" placeholder="Valor 1" name="resta_valor_1" value="<?php if(isset($_POST["resta_valor_1"])){echo $_POST["resta_valor_1"];} ?>" /></td>
                <td><input type="text" placeholder="Valor 2" name="resta_valor_2" value="<?php if(isset($_POST["resta_valor_2"])){echo $_POST["resta_valor_2"];} ?>" /></td>
                <td><label>=</label></td>
                <td><input type="text" name="" value="<?php if(isset($resultado_resta)){echo $resultado_resta;} ?>" /></td>
                <td><input type="submit" name="restar" value="Restar" /></td>
             </tr>
			<tr>
                <td><label>Multiplicaci&oacute;n</label></td>
                <td><input type="text" placeholder="Valor 1" name="multiplicacion_valor_1" value="<?php if(isset($_POST["multiplicacion_valor_1"])){echo $_POST["multiplicacion_valor_1"];} ?>" /></td>
                <td><input type="text"  placeholder="Valor 2"name="multiplicacion_valor_2" value="<?php if(isset($_POST["multiplicacion_valor_2"])){echo $_POST["multiplicacion_valor_2"];} ?>" /></td>
                <td><label>=</label></td>
                <td><input type="text" name="" value="<?php if(isset($resultado_multiplicacion)){echo $resultado_multiplicacion;} ?>" /></td>
                <td><input type="submit" name="multiplicar" value="Multiplicar" /></td>
			</tr>
            <tr>
                <td><label>Divisi&oacute;n</label></td>
                <td><input type="text" placeholder="Valor 1" name="division_valor_1" value="<?php if(isset($_POST["division_valor_1"])){echo $_POST["division_valor_1"];} ?>" /></td>
                <td><input type="text" placeholder="Valor 2" name="division_valor_2" value="<?php if(isset($_POST["division_valor_2"])){echo $_POST["division_valor_2"];} ?>" /></td>
                <td><label>=</label></td>
                <td><input type="text" name="" value="<?php if(isset($resultado_division)){echo $resultado_division;} ?>" /></td>
                <td><input type="submit" name="dividir" value="Dividir" /></td>
             </tr>
             <tr>
                <td><label>Seno (Radianes)</label></td>
                <td><input type="text" placeholder="Valor 1" name="seno_valor" value="<?php if(isset($_POST["seno_valor"])){echo $_POST["seno_valor"];} ?>" /></td>
                <td></td>
                <td><label>=</label></td>
                <td><input type="text" name="" value="<?php if(isset($resultado_seno)){echo $resultado_seno;} ?>" /></td>
                <td><input type="submit" name="seno" value="Seno" /></td>
             </tr>
             <tr>
                <td><label>Coseno (Radianes)</label></td>
                <td><input type="text" placeholder="Valor 1" name="coseno_valor" value="<?php if(isset($_POST["coseno_valor"])){echo $_POST["coseno_valor"];} ?>" /></td>
                <td></td>
                <td><label>=</label></td>
                <td><input type="text" name="" value="<?php if(isset($resultado_coseno)){echo $resultado_coseno;} ?>" /></td>
                <td><input type="submit" name="coseno" value="Coseno" /></td>
             </tr>
        </table>
    </form>
</body>
</html>