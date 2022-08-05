<?php

function obtener_factorial($factorial)
{
	if($factorial==1)
		return 1;
	
	else
		return $factorial* obtener_factorial($factorial-1)
}

?>