<!DOCTYPE html>
<html>
	<head>	
		<?php
		header('Content-Type: text/html; charset=UTF-8');
		?>
		<title>
			Test
		</title>
	</head>
	<body>
		<?php
										$Test = filter_input(INPUT_POST,"Test");
										$user = 'root';
										$pass = 'zeroH13320';
										$dbnm = 'mircarries';
										$host = 'localhost';
						 
										$connect = "mysql:host={$host};dbname={$dbnm}";
						 
										try {
												$pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
												$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
												$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
												echo "<p>connect_sucsess</p>";
												
												$sql = "UPDATE test SET value = 0";
												$stmt = $pdo->prepare($sql);
												$stmt ->execute();
																								
												$sql = "UPDATE test SET value = 1 WHERE id = (:Test)";
												$stmt = $pdo->prepare($sql);
												$params = array(':Test' => $Test);
												$stmt ->execute($params);
												
										} catch (Exception $e) {
												echo "<p>connect_error</p>";
												echo $e->getMessage();
												exit();
										}
						?>
		<script type="text/javascript">
				var Dep = <?php echo($_POST["Test"]); ?> ;
				switch(Dep){
				    case 1:
						function autoLink1()
						{
							location.href="http://localhost/Test_1.html";
						}
						setTimeout("autoLink1()",100);
						break;
				    
				    case 2:
						function autoLink2()
						{
							location.href="http://localhost/Test_2.html";
						}
						setTimeout("autoLink2()",100);
						break;
					
				    case 3:
						function autoLink3()
						{
							location.href="http://localhost/Test_3.html";
						}
						setTimeout("autoLink3()",100);
						break;
				    
			        case 4:
						function autoLink4()
						{
							location.href="http://localhost/Test_4.html";
						}
						setTimeout("autoLink4()",100);
						break;
					
					default:
						function autoLinkD()
						{
							location.href="http://localhost/Test.html";
						}
						setTimeout("autoLinkD()",100);
						break;

			    }			
				</script>
	</body>
</html>
