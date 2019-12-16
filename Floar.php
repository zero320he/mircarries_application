<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>
			HTMLì¸ñÂ-ÉtÉHÅ[ÉÄÇÃçÏê¨
		</title>
	</head>
	<body>
		<?php
		$text = "Access";
		echo "<p> $text </p>";
		?>
		<script type="text/javascript">
				var Dep = <?php echo($_POST["Departure"]); ?> ;
				document.write(Dep);
				document.write(" ");
				document.write(typeof(Dep));
				switch(Dep){
				    case 1:
						function autoLink1()
						{
							location.href="http://localhost/index.html";
						}
						setTimeout("autoLink1()",100);
						break;
				    
				    case 2:
						function autoLink2()
						{
							location.href="http://localhost/stop.html";
						}
						setTimeout("autoLink2()",100);
						break;
					
				    case 3:
						function autoLink3()
						{
							location.href="http://localhost/Map.html";
						}
						setTimeout("autoLink3()",100);
						break;
				    
			        case 4:
						function autoLink4()
						{
							location.href="http://localhost/Departure.html";
						}
						setTimeout("autoLink4()",100);
						break;
					
					default:
						function autoLinkD()
						{
							location.href="http://localhost/Departure.html";
						}
						setTimeout("autoLinkD()",100);
						break;

			    }			
			</script>
	</body>
</html>
