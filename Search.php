<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
    header('Content-Type: text/html; charset=UTF-8');
    ?>
    <title>
        ルート検索
    </title>
</head>
<body>
<?php
$dep = filter_input(INPUT_POST, "Departure");
$arr = filter_input(INPUT_POST, "Arrival");
$user = 'mircarries';
$pass = 'tartarus02';
$dbnm = 'mircarries';
$host = 'localhost';

$connect = "mysql:host={$host};dbname={$dbnm}";

try {
    $pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>connect_sucsess</p>";

    $sql = "UPDATE search SET Root_Check = 0 WHERE Root_Check = 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE search SET Root_Check = 1 WHERE Departure = (:dep) AND Arrival = (:arr)";
    $stmt = $pdo->prepare($sql);
    $params = array(':dep' => $dep, ':arr' => $arr);
    $stmt->execute($params);

    $sql = "SELECT id FROM search WHERE Departure = (:dep) AND Arrival = (:arr)";
    $stmt = $pdo->prepare($sql);
    $params = array(':dep' => $dep, ':arr' => $arr);
    $stmt->execute($params);
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
            location.href = "http://localhost/MapSTOP_area1.html";
        }

            setTimeout("autoLink1()", 100);
            break;

        case 2:

        function autoLink2() {
            location.href = "http://localhost/Search.html";
        }

            setTimeout("autoLink2()", 100);
            break;

        case 3:

        function autoLink3() {
            location.href = "http://localhost/Search.html";
        }

            setTimeout("autoLink3()", 100);
            break;

        case 4:

        function autoLink4() {
            location.href = "http://localhost/Search.html";
        }

            setTimeout("autoLink4()", 100);
            break;

        default:

        function autoLinkD() {
            location.href = "http://localhost/Search.html";
        }

            setTimeout("autoLinkD()", 100);
            break;

    }
</script>
</body>
</html>
