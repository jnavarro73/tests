<?php

function write_log($entrada,$tipo=0)
{   $cadena = $entrada;    
    if (is_array($entrada)) $cadena = json_encode($entrada);
	$arch = fopen(realpath( '.' )."/logs/milog_".date("Y-m-d").".txt", "a+"); 

	fwrite($arch, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." "
                   ." - $tipo ] ".$cadena."\n");
	fclose($arch);
}