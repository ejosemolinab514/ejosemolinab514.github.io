<!DOCTYPE html>
<html>

<head>
	<title>ejemplo de iframe</title>
       <style>body{font-family:Calibri Light;font-size:10pts;text-align:center;}</style>
       <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        
</head>

<body>
<h1 style="text-align:center; font-size: 30px">Sumarización de rutas</h1>


<h2 style="font-size: 15px;">Instrucciones de uso: Ingresa las direcciones IP (hasta 4) y la máscara de subred correspondiente para la sumarización de rutas. Da clic en "Comenzar" para ver el desarrollo  </h2>

<center>
<form method="post">
<input type="checkbox" name="isActiveIP1">Dirección IP1:
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_1" size=3 min=0 max=255 step=1 id="dirIP1_1">
    <label class="mdl-textfield__label" for="dirIP1_1">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_2" size=3 min=0 max=255 step=1 id="dirIP1_2">
    <label class="mdl-textfield__label" for="dirIP1_2">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_3" size=3 min=0 max=255 step=1 id="dirIP1_3">
    <label class="mdl-textfield__label" for="dirIP1_3">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_4" size=3 min=0 max=255 step=1 id="dirIP1_4">
    <label class="mdl-textfield__label" for="dirIP1_4">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>
<br>
<input type="checkbox" name="isActiveIP2">Dirección IP2:
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip2_1" size=3 min=0 max=255 step=1 id="dirIP2_1">
    <label class="mdl-textfield__label" for="dirIP2_1">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip2_2" size=3 min=0 max=255 step=1 id="dirIP2_2">
    <label class="mdl-textfield__label" for="dirIP2_2">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip2_3" size=3 min=0 max=255 step=1 id="dirIP2_3">
    <label class="mdl-textfield__label" for="dirIP2_3">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip2_4" size=3 min=0 max=255 step=1 id="dirIP2_4">
    <label class="mdl-textfield__label" for="dirIP2_4">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>
<br>
<input type="checkbox" name="isActiveIP3">Dirección IP3:
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip3_1" size=3 min=0 max=255 step=1 id="dirIP3_1">
    <label class="mdl-textfield__label" for="dirIP3_1">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip3_2" size=3 min=0 max=255 step=1 id="dirIP3_2">
    <label class="mdl-textfield__label" for="dirIP3_2">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip3_3" size=3 min=0 max=255 step=1 id="dirIP3_3">
    <label class="mdl-textfield__label" for="dirIP3_3">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip3_4" size=3 min=0 max=255 step=1 id="dirIP3_4">
    <label class="mdl-textfield__label" for="dirIP3_4">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>
<br>
<input type="checkbox" name="isActiveIP4">Dirección IP4:
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip4_1" size=3 min=0 max=255 step=1 id="dirIP4_1">
    <label class="mdl-textfield__label" for="dirIP4_1">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip4_2" size=3 min=0 max=255 step=1 id="dirIP4_2">
    <label class="mdl-textfield__label" for="dirIP4_2">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip4_3" size=3 min=0 max=255 step=1 id="dirIP4_3">
    <label class="mdl-textfield__label" for="dirIP4_3">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip4_4" size=3 min=0 max=255 step=1 id="dirIP4_4">
    <label class="mdl-textfield__label" for="dirIP4_4">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>
<br><br>

<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
  <input type="submit" value="COMENZAR" name="start" style="background: none; border: none;">
</button>

<br><br>

</form>

<br><br>

<?php
if(isset($_POST['start']))
{
       print("Desarrollo: <br>");
       $ipNum=0;
       $ipDirections=array();
       if(isset($_POST['isActiveIP1'])){
              $ipDirections[$ipNum]=array($_POST['ip1_1'],$_POST['ip1_2'],$_POST['ip1_3'],$_POST['ip1_4']);
              $ipNum++;
       }
       if(isset($_POST['isActiveIP2'])){
              $ipDirections[$ipNum]=array($_POST['ip2_1'],$_POST['ip2_2'],$_POST['ip2_3'],$_POST['ip2_4']);
              $ipNum=$ipNum+1;
       }
       if(isset($_POST['isActiveIP3'])){
            $ipDirections[$ipNum]=array($_POST['ip3_1'],$_POST['ip3_2'],$_POST['ip3_3'],$_POST['ip3_4']);
            $ipNum=$ipNum+1;
       }
       if(isset($_POST['isActiveIP4'])){
            $ipDirections[$ipNum]=array($_POST['ip4_1'],$_POST['ip4_2'],$_POST['ip4_3'],$_POST['ip4_4']);
            $ipNum=$ipNum+1;
       }

        sort($ipDirections);

        print("Existen $ipNum direcciones para asignar y son:<br>");
        for($i=0;$i<$ipNum;$i++){
            for($j=0;$j<4;$j++){
                print($ipDirections[$i][$j].".");
            }
            print("<br>");
        }
        //verificación de en que octeto empizar a variar
        $bandera=0;
        $terminado=0;
        for($i=0;$i<4;$i++){
            if($terminado==0){
                for($j=0;$j<$ipNum-1;$j++){
                    if($ipDirections[$j][$i]!=$ipDirections[$j+1][$i]){
                        $bandera=$i;
                        $terminado=1;
                    }else{
                        $superNet[$i]=$ipDirections[$j][$i];
                    }
                }
            }
        }
        print("El primer octeto en variar es el ".($bandera+1)."<br>");
        $contiguidad=1;
        $terminar=0;
        if($bandera>=0){
            for($i=0;$i<$ipNum-1;$i++){
                if(terminar==0){
                    if($ipDirections[$i][$bandera]+1!=$ipDirections[$i+1][$bandera]){
                        $contiguidad=0;
                        $terminar=1;
                    }      
                }
            }
        }
        
        if($contiguidad==1){
            //binarización del primer octeto variante
            print("LAS DIRECCIONES DE LOS SEGMENTOS DE RED SON CONTIGUAS<br>Se procede a calcular el segmento de superred<br>");
            for($i=0;$i<$ipNum;$i++){
                $aux[$i]=$ipDirections[$i][$bandera];
                $aux[$i]=decbin($aux[$i]);
                $aux[$i] = str_pad($aux[$i],8,"0",STR_PAD_LEFT);
                print("El octeto ".($bandera+1)." de la dirección ".($i+1)." en binario es: ".$aux[$i]."<br>");
            }
            $bitdevarianza=0;
            $areAllEqual=0;
            for($i=0;$i<8;$i++){
                if($areAllEqual==0){
                    for($j=0;$j<$ipNum-1;$j++){
                        if($aux[$j][$i]!=$aux[$j+1][$i]){
                            $bitdevarianza=$i;
                            $areAllEqual=1;
                        }
                    }
                }
            }
            for($i=0;$i<=$bitdevarianza;$i++){
                $binarioSuperRed[$i]=$aux[0][$i];
            }
            //El error esta antes de esta linea
            $binarioSuperRed = implode($binarioSuperRed);
            print("El primer bit del octeto ".($bandera+1)." en variar fue el ".($bitdevarianza+1)."°<br>");
            $binarioSuperRed = str_pad($binarioSuperRed,8,"0",STR_PAD_RIGHT);
            print("El binario del ".($bandera+1)."° octeto la SuperRed es: ".$binarioSuperRed);
            $superNet[$bandera]=bindec($binarioSuperRed);
            for($i=$bandera+1;$i<4;$i++){
                $superNet[$i]=0;
            }
            print("<br>EL SEGMENTO DE SUPER RED ES: ");
            for($i=0;$i<4;$i++){
                print($superNet[$i].".");
            }
            $mm=$bandera*8+$bitdevarianza;
            print("<br>LA MÁSCARA MODIFICADA ES: ".$mm);
        }else{
            print("<br>LAS DIRECCIONES DE LOS SEGMENTOS DE RED NO SON CONTIGUAS<br>NO SE PUEDE SUPERNETEAR<br>");
        }
        print("<br><br>");
}
?>
</center>
</body>
</html>
