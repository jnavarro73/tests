<?php

function write_log($entrada,$etiqueta='')
{   $cadena = $entrada;    
    if (is_array($entrada)) $cadena = json_encode($entrada);
	$arch = fopen(realpath( '.' )."/logs/milog_".date("Y-m-d").".txt", "a+"); 

	fwrite($arch, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." "
                   ." - ".$etiqueta." ] ".$cadena."\n");
	fclose($arch);
}