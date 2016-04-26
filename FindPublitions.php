<?php 
echo('<h1>Мои научные публикации:</h1>');
$url = 'http://sp.susu.ru/science/papers.html'; 
$html = file_get_contents($url); 
$kodirovka ='<META http-equiv="content-type" content="text/html; charset=koi8-r">';

	$pos = strpos($html, "tpl-content");
	$html=substr($html, $pos);
	$pos = strpos($html, "ol");
	$html=substr($html, $pos);
	$html=$kodirovka.$html;
	$i=1;
	while(strpos($html, "<li>")){
		$html=$kodirovka.$html;
		$pos = strpos($html, "<li>");
		$html=$kodirovka.substr($html, $pos+4);
		$pos=strpos($html, "</li>");
		$name=substr($html, 0, $pos); 
		if(strripos($name, 'Силкина')== TRUE){
			echo($name);
		}
		elseif (strripos($name, 'Жигальская')== TRUE){
			echo($name);
		}					
	}
?>