<?php 

date_default_timezone_set("America/Mexico_City");

/**
 * Título de la aplicación
 * 
 * Mostramos el título de la aplicación para resutilizarse en las etiquetas <title></title> 
 * y la propiedad 'alt' de las etiquetas <img /> y la propiedad 'title' de las etiquetas <a></a>
 * 
 
 */
if(!function_exists("app_title")) {
	function app_title()
	{
		return "SPUMMA";
	}
}

/**
 * Nombre de la aplicación
 * 
 * Mostramos el nombre de la aplicación para resutilizarse en las etiquetas <title></title> 
 * y la propiedad 'alt' de las etiquetas <img /> y la propiedad 'title' de las etiquetas <a></a>

 */
if(!function_exists("app_name")) {
	function app_name()
	{
		return "Gestion de Spumma";
	}
}