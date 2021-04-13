<?php 
	/*$source = fopen("file://C:/Users/Ислам/Desktop/Assignment1.txt",'r');
	while(true){
		$line = fgets($source);

		if(!$line){
			break;
		}

		echo $line;
	}

	fclose($source);*/

	/*$source = fopen("file://D:/Back.txt",'r');
	$copy = fopen("file://D:/Copy.txt",'w');
	while(1){
		$line = fgets($source);

		if(!$line){
			break;
		}

		fputs($copy,$line);
	}

	fclose($source);
	fclose($copy);*/


	/*$source = fopen('D:/Back.txt','rb');
	//stream_filter_append($source, 'string.toupper');*/

	$source = fopen('php://filter/read=string.toupper/resource=D:/Back.txt','rb');

	while(feof($source) !== true){
		echo fgets($source);
	}

	fclose($source);
?>