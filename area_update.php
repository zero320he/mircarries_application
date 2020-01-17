<!DOCTYPE html>
<html lang="ja">
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
$user = 'root';
$pass = 'tartarus02';
$dbnm = 'mircarries';
$host = 'localhost';

$connect = "mysql:host={$host};dbname={$dbnm}";

try {
    $pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>connect_sucsess</p>";

    $sql = "SELECT root FROM map WHERE id = 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($res as $val) {
        foreach ($val as $value) {
            echo $value;
        }
    }


} catch (Exception $e) {
    echo "<p>connect_error</p>";
    echo $e->getMessage();
    exit();
}
?>
<script type="text/javascript">
    var Dep = <?php echo $value; ?> ;
    switch (Dep) {
        case 1:

        function autoLink1() {
            location.href = "http://172.21.3.132/MapSTOP_area1.html";
        }

            setTimeout("autoLink1()", 100);
            break;

        case 2:

        function autoLink2() {
            location.href = "http://172.21.3.132/MapSTOP_area2.html";
        }

            setTimeout("autoLink2()", 100);
            break;

        case 3:

        function autoLink3() {
            location.href = "http://172.21.3.132/MapSTOP_area3.html";
        }

            setTimeout("autoLink3()", 100);
            break;

        case 4:

        function autoLink4() {
            location.href = "http://172.21.3.132/MapSTOP_area4.html";
        }

            setTimeout("autoLink4()", 100);
            break;
        case 5:

        function autoLink5() {
            location.href = "http://172.21.3.132/MapSTOP_area5.html";
        }
            setTimeout("autoLink5()", 100);
            break;
        case 6:

        function autoLink6() {
            location.href = "http://172.21.3.132/finish.html";
        }
            setTimeout("autoLink6()", 100);
            break;
        default:

        function autoLinkD() {
            location.href = "http://172.21.3.132/MapSTOP_area1.html";
        }
            setTimeout("autoLinkD()", 100);
            break;

    }
</script>
</body>
</html>
