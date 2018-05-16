<?php
require_once 'config.php';
$result = false;

if(!empty($_POST)){
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $password = md5($_POST['txtPassword']);

    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Add User</h1>
        <a href="index.php">Home</a>
        <br/>
        <?php
            if ($result) {
                echo '<div class="alert alert-success">Success!!!</div>';
            }
        ?>
        <form action="add.php" method="post">
            <label for="txtName">Name</label>
            <input id="txtName" type="text" name="txtName" />
            <br/>
            <label for="txtEmail">Email</label>
            <input id="txtEmail" type="text" name="txtEmail" />
            <br/>
            <label for="txtPassword">Password</label>
            <input id="txtPassword" type="password" name="txtPassword" />
            <br/>
            <input type="submit" value="Save" />
        </form>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>