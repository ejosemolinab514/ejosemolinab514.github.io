<!DOCTYPE html>
<html>

<head>
	<title>Subneteo</title>
        <style>body{font-family:Calibri Light;font-size:10pts;text-align:center;}</style>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      
</head>

<body>
<h1 style="text-align:center; font-size: 30px;">Subneteo</h1>


<h2 style="font-size: 15px;">Instrucciones de uso: Ingresa una dirección IP pretenenciente al rango de direcciones que quieres subnetear y la máscara modificada.<br>Da clic en "Comenzar" para ver el desarrollo.<br>
Por cuestiones de logística solo se imprimirán hasta 64 subredes.<br></h2>

<center>
<form method="post">
Dirección IP:

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_1" size=3 min=0 max=255 step=1 id="dirIP1" required>
    <label class="mdl-textfield__label" for="dirIP1">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_2" size=3 min=0 max=255 step=1 id="dirIP2" required>
    <label class="mdl-textfield__label" for="dirIP2">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_3" size=3 min=0 max=255 step=1 id="dirIP3" required>
    <label class="mdl-textfield__label" for="dirIP3">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>.
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="ip1_4" size=3 min=0 max=255 step=1 id="dirIP4" required>
    <label class="mdl-textfield__label" for="dirIP4">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>

<br>

Máscara: /<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <input class="mdl-textfield__input" type="number" name="mask_1" size=2 min=1 max=32 id="mask" required>
    <label class="mdl-textfield__label" for="mask">Número</label>
    <span class="mdl-textfield__error">Error</span>
</div>

<br>

<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
  <input type="submit" value="COMENZAR" name="start" style="background: none; border: none;">
</button>

<br><br>

</form>

<?php
if(isset($_POST['start']))
{
       print("Desarrollo: <br>");
       $ipDirection=array($_POST['ip1_1'],$_POST['ip1_2'],$_POST['ip1_3'],$_POST['ip1_4']);
       $mask_len=$_POST['mask_1'];
       $mask=array();
       
       //Verificación de clase y generación de máscara modificada
       if($ipDirection[0]<=126){
                $class=1;
                $minmask=8;
                print("La IP de segmento es de Clase A.<br>MD = /8 y MM = /{$mask_len}<br>");
                print("El segmento es: ");
                print($ipDirection[0].".0.0.0<br>");
        }elseif($ipDirection[0]==127){
                $class=4;
                print("La red 127 no es utilizable.<br>");
        }elseif($ipDirection[0]<=191){
                $class=2;
                $minmask=16;
                print("La IP de segmento es de Clase B.<br>MD = /16 y MM = /{$mask_len}<br>");
                print("El segmento de red es: ");
                for($j=0;$j<2;$j++){
                        print($ipDirection[$j].".");
                }
                print("0.0<br>");
        }elseif($ipDirection[0]<=223){
                $class=3;
                $minmask=24;
                print("La IP de segmento es de Clase C.<br>MD = /24 y MM = /{$mask_len}<br>");
                print("El segmento de red es: ");
                for($j=0;$j<3;$j++){
                        print($ipDirection[$j].".");
                }
                print("0<br>");
        }else{
                $class=4;
                $minmask=0;
                print("La direccion IP es de clase D o E. No es posible asignarla<br>");
        }

        //Verificación de máscara y generación de MM     
        if($mask_len>24){
                $mask[0]=255;
                $mask[1]=255;
                $mask[2]=255;
                $mask[3]=0;
                for($i=25;$i<=$mask_len;$i++){
                        $mask[3]=$mask[3]+pow(2,32-$i);
                }
       }elseif($mask_len>16){
                $mask[0]=255;
                $mask[1]=255;
                $mask[2]=0;
                $mask[3]=0;
                for($i=17;$i<=$mask_len;$i++){
                        $mask[2]=$mask[2]+pow(2,24-$i);
                }
        }elseif($mask_len>8){
                $mask[0]=255;
                $mask[1]=0;
                $mask[2]=0;
                $mask[3]=0;
                for($i=9;$i<=$mask_len;$i++){
                        $mask[1]=$mask[1]+pow(2,16-$i);
                }
        }else{
                $class=4;
        }

        if($mask_len<=$minmask){
                $class=4;
                print("La máscara modificada es menor o igual a la máscara por defecto<br>");
        }

        //SEGMENTOS
        if($class<4 && $class>0){
                //Cálculo del número de subredes.
                $bitsP = $mask_len-$minmask;
                $numSubR = pow(2,$bitsP);
                $numSubRU = $numSubR-2;
                $numHosts = pow(2,32-$mask_len);
                $numHostsU = $numHosts-2;
                print("<br>Se tienen {$bitsP} bits prestados.<br>Existen {$numSubR} subredes de las cuales {$numSubRU} son utilizables.<br>");
                print("Las subredes 0 y {$numSubR} no son utilizables<br>");
                print("<br>Existen {$numHosts} hosts de los cuales {$numHostsU} son utilizables.<br>");
                print("Los hosts 0 y {$numHosts} no son utilizables<br><br>");
                if($numSubR>64){
                        $maxCalc = 32;
                }else{
                        $maxCalc = $numSubR;
                }
                print("Rangos de algunas subredes<br>");
                for($i=0;$i<$maxCalc;$i++){
                        //CODIGO PARA SEGMENTO
                        print("<br>Subred {$i}<br>Segmento: ");
                        for($j=0;$j<$class;$j++){
                                print($ipDirection[$j].".");    
                        }
                        
                        //AQUI VA EL CODIGO PARA CALCULAR LOS OCTETOS RESTANTES
                        $aux=decbin($i);
                        $bin = str_pad($aux,$bitsP,"0",STR_PAD_LEFT);
                        $bin = str_pad($bin,32-8*$class,"0",STR_PAD_RIGHT);
                        for($j=0;$j<4-$class;$j++){
                                $aux2=0;
                                for($k=8*$j;$k<8*($j+1);$k++){
                                        if($bin[$k]=="1"){
                                                $aux2+=pow(2,7-($k%8));
                                        }
                                }
                                print("{$aux2}.");  
                        }
                        

                        //AQUI VA EL CODIGO PARA BROADCAST
                        print("<br>Broadcast: ");
                        for($j=0;$j<$class;$j++){
                                print($ipDirection[$j].".");    
                        }
                        //AQUI VA EL CODIGO PARA CALCULAR LOS OCTETOS RESTANTES
                        $bin = str_pad($aux,$bitsP,"0",STR_PAD_LEFT);
                        $bin = str_pad($bin,32-8*$class,"1",STR_PAD_RIGHT);
                        for($j=0;$j<4-$class;$j++){
                                $aux2=0;
                                for($k=8*$j;$k<8*($j+1);$k++){
                                        if($bin[$k]=="1"){
                                                $aux2+=pow(2,7-($k%8));
                                        }
                                }
                                print("{$aux2}.");
                        }
                        print("<br>");
                }

        }else{
                print("No se puede hace el subneteo");
        }     
}
?>
<br><br>Mayo de 2019. Facultad de Ingeniería. UNAM.<br>
</center>



</body>
</html>
