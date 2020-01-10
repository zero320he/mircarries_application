<!DOCTYPE html>
<html>
	<head>	
		<?php
		header('Content-Type: text/html; charset=UTF-8');
		?>
		<title>
			現在地更新
		</title>
	</head>
	<body>
		<?php
			echo "hello";
			echo $_POST["GO"];

				$user = 'root';
				$pass = 'tartarus02';
				$dbnm = 'mircarriesdb';
				$host = 'localhost';
				$GO1 = filter_input(INPUT_POST,"GO");
				$GO2 = filter_input(INPUT_POST,"GO");

				
				$connect = "mysql:host={$host};dbname={$dbnm}";
				
				try {
					$pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					echo "<p>connect_sucsess</p>";
										
					$sql = "UPDATE map SET Stop_Check = (:GO1) WHERE Stop_Check != (:GO2)";
					$stmt = $pdo->prepare($sql);
					$params = array(':GO1' => $GO1,':GO2' => $GO2);
					$stmt ->execute($params);
					
					} catch (Exception $e) {
					echo "<p>connect_error</p>";
					echo $e->getMessage();
					exit();
					}
		?>		
		<script type="text/javascript">
				var GO = <?php echo($_POST["GO"]); ?> ;
				var area =<?php echo($_POST["area"]); ?> ;
				switch(GO){
				    case 0:	
							function autoLink1()
							{
								location.href="http://172.21.3.132/MapGO_area" + area + ".html";
							}
							setTimeout("autoLink1()",100);
							break;
				    
				    case 1:
							function autoLink2()
							{
								location.href="http://172.21.3.132/MapSTOP_area" + area + ".html";
							}
							setTimeout("autoLink2()",100);
							break;
							
					default:

						function autoLinkD()
						{
							location.href="http://172.21.3.132/MapGO_area" + area + ".html";
						}
						setTimeout("autoLinkD()",100);
						break;

			    }			
			</script>
	</body>
</html>
