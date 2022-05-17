<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body >
        <div class="titulo">
            <h2>calculo IMC</h2>

        </div>
       <div class="formulario" > 
           <form action="index.php" method="post" id="form" >
            
          <br>  Qual seu peso em Kg:</br> <input type="text" name="n1"class="peso" required><br>
          <br>Qual sua altura em Metros: </br> <input type="text" name="n2" class="metros" required><br>
           
            <input type="submit" value="Calcular" class="botao">
           </form>
        </div>
    </body>
<?php
if(!empty($_POST['n1'])){


    $n = floatval ($_POST['n1']);
    $n2 = floatval ($_POST['n2']);
    $imc = $n / ($n2 * $n2);
  function imc($n,$n2){


    $imc = round($n / ($n2 * $n2),1);
    

    if ($imc<=18.5){
        $a = "Seu peso ".$imc."Esta abaixo do normal";
    }elseif($imc>=18.5 and $imc<=24.9){
        $a = "Seu peso ".$imc."Esta Normal";
    }elseif($imc>=25.5 and $imc<=29.9){
        $a = "Seu peso ".$imc."Execesso de peso";
    }elseif($imc>=30.0 and $imc<=34.9){
        $a = "Seu peso ".$imc."Obessidade classe I";
    }elseif($imc>=35.0 and $imc<=39.9){
        $a = "Seu peso ".$imc."Obessidade Classe II";
    }else {
        $a = "Seu peso ".$imc."Obessidade Classe III perigo";
    }

    return $a;
   

}
echo imc($n,$n2);


    

}
?>