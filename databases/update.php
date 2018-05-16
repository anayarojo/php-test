<?php
require_once 'config.php';
$result = false;

if (!empty($_POST)) {
    $id = $_POST['id'];
    $newName = $_POST['txtName'];
    $newEmail = $_POST['txtEmail'];

    $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'id' => $id,
        'name' => $newName,
        'email' => $newEmail
    ]);

    $nameValue = $newName;
    $emailValue = $newEmail;
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=:id";
    $query = $pdo->prepare($sql);

    $query->execute([
        'id' => $id
    ]);

    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $emailValue = $row['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Update User</h1>
        <a href="list.php">Back</a>
        <br/>
        <?php
            if ($result) {
                echo '<div class="alert alert-success">Success!!!</div>';
            }
        ?>
        <form action="update.php" method="post">
            <label for="txtName">Name</label>
            <input id="txtName" type="text" name="txtName" value="<?php echo $nameValue; ?>" />
            <br/>
            <label for="txtEmail">Email</label>
            <input id="txtEmail" type="text" name="txtEmail" value="<?php echo $emailValue; ?>" />
            <br/>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Update" />
        </form>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>