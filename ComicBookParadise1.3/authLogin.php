<html>
<head>
<script type="text/javascript">
	function LoginRedir(){
		setTimeout("window.location='Index.php' ", 2000);
	}
        function FailRed(){
            setTimeout("window.location='login.php'", 2000)
        }
</script>
</head>
<body>
<?php 
/* PHP #1 - Conectando ao BD*/
//	$host = "localhost";
//	$userDB = "root";
//	$senhaDB = "";
//	$db = "dbHQSTORE";
//	$conn = mysql_connect($host, $userDB, $senhaDB);
//	mysql_select_db($db, $conn);
//	if(!$conn){
//		echo "Deu ruim, time.";
//	}
require'conn.php';
?>

<?php 
/* PHP #2 - Autenticando e usando sha1*/
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		echo "O email está ok" . "<br />" . $email;
	}
	if(isset($_POST['senha'])){
		$senha = $_POST['senha'];
		echo "A senha está ok";
		echo "<br />" . $senha . "<br />";
	}
	$cript = sha1($senha);
	$sessaoIniciada=null;
	$search = mysql_query("SELECT * FROM tbCliente WHERE email = '$email' AND senha = '$cript' ") or die(mysql_error());
	$ver = mysql_num_rows($search);
	if($ver > 0){
            
            session_start();
           
                $_SESSION['email'] = $_POST['email'];
		$_SESSION['senha'] = $_POST['senha'];
		echo "Iniciado com sucesso!";
		$sessaoIniciada=TRUE;
                echo "<script>LoginRedir();</script>";
                
                 
	}
	else{
		echo "ERROR";
                echo"<script>FailRed();</script>";
	}

?>
</body>
</html>