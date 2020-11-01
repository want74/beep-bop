<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="card_insert.php" method="post">
        <input name="cardTitle" type="text" placeholder="cardTitle">
        <input name="tagId" type="number" placeholder="tagId">
        <input name="description" type="text" placeholder="description">
        <?php echo "<input type='text' name='colId' style='' value=".$_POST['colId'].">"; ?>        
        <?php echo "<input type='text' name='countryId' style='' value=".$_POST['countryId'].">"; ?>
        <button class="btn" type="submit">
            ok
        </button>      
    </form>
</body>
</html>