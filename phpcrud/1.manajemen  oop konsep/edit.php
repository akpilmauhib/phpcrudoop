<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <?php
        include('db.php');
       include('fungsi.php');
       $util=new fungsi;
    ?>
</head>
<body>
    <?=$util->update($_GET)?>
    <form action="" method="post">
        <input type="text" name="update" value="<?=$util->getData($_GET)?>">
        <button name="updated">update</button>
    </form>
</body>
</html>