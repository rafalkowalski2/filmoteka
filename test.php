<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
</head>
 
<body>
      <?php
 
echo $strona = "onet.pl";
$useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
 
 
 if(!function_exists("curl_init")) echo "brak curla";
      $rC = curl_init();
curl_setopt($rC, CURLOPT_HEADER, 1);
curl_setopt($rC, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($rC, CURLOPT_COOKIEFILE, 'cookies.txt');
curl_setopt($rC, CURLOPT_COOKIEJAR, 'cookiesjar.txt');
curl_setopt($rC, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($rC, CURLOPT_VERBOSE, 0);
curl_setopt($rC, CURLOPT_USERAGENT, $useragent);
curl_setopt($rC, CURLOPT_REFERER, 'www.google.pl');
curl_setopt($rC, CURLOPT_URL, $strona);
 
      $wejscie = curl_exec($rC);
      curl_setopt($rC, CURLOPT_REFERER, $strona);
      $wejscie = curl_exec($rC);

      curl_close($rC);
	   echo $wejscie;
     /*preg_match('/<div class="filmPlot bottom-15"><p class=text>(.+?)<\/p><\/div>/ism', $wejscie, $desc); 
	 //print_r($desc);
	 preg_match('/<span property="v:average">(.+?)<\/span>/ism', $wejscie, $grade);
	 //print_r($grade);
	 preg_match('/<ul class="inline sep-comma"><li><a href="(.+?)">USA<\/a><\/li><\/ul><\/td><\/tr><tr><th>(.+?):<\/th><td><a href="(.+?)"> <span> (.+?)<\/span>(.+?)<span> (.+?) <\/span> (.+?) <\/a><\/td><\/tr>/ism', $wejscie, $release_date);
	 $temp = explode('inline sep-comma', $wejscie);
	 $genre_temp  = $temp[4];
	 $release_temp = $temp[5];
	 $r_t_2 = explode('<span>', $release_temp);
		$release = explode(" ", $r_t_2[1]);
		$release[2] = str_replace(array('stycznia'), array('01'), $release[2]);
		if($release[1]<10)
		{
			$release[1] ='0'.$release[1];
		}
		//print_r($release);
		//echo $release_date = $release[3].'-'.$release[2].'-'.$release[1];
	 preg_match('/<ul class="inline sep-comma genresList">(.+?)<\/ul>/ism', $wejscie, $genres_temp);
		$genres = explode('<li>', $genres_temp[1]);
		print_r($genres);*/
	  ?>
</body>
</html>