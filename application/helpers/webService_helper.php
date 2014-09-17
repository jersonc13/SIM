<?php 
function print_p($expression){
	print("<pre>".print_r($expression,true)."</pre>");
}
function search_in_array($needle ,$haystack,$pointer){
	// @haystack(pajar) => donde se buscara 
	// @needle(aguja)  => lo que necesitas encontrar
	// @pointer => id donde sacaras los datos
	if ($haystack) {
		foreach ($haystack as $key => $row) {
			if ($row[$pointer]==$needle ) {
				return true;
			}
		}
	}
}
?>