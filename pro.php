<?PHP


  
  
    
  
$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
$myfil = fopen("newfile.txt", "r") or die("Unable to open file!");
		$dis=fread($myfil,filesize("newfile.txt"));
		echo"No.of views=".$dis;
if($pageRefreshed == 1){
	
	
    //echo "Yes page Refreshed";
	$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
		$ss=fread($myfile,filesize("newfile.txt"));
		//echo"variable is".$ss;
		
		$sss=(int)$ss;
		fclose($myfile);
		
		$appe=fopen("newfile.txt", "w")or die("Unable to open file!");
		$sss++;
		$ss=fwrite($appe,$sss);
		//fwrite($myfile,$sss);
}
	?>
