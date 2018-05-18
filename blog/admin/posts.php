<?php
require_once '../config.php';
$query = $pdo->prepare("SELECT * FROM blogposts ORDER BY id DESC");
$query->execute();
$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Title</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2>Posts</h2>
                <p><a class="btn btn-primary" href="insert-post.php">New post</a></p>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach($blogPosts as $blogPost): ?>
                        <tr>
                            <td><?php echo $blogPost['title'] ?></td>
                            <td><a href="">Edit</a></td>
                            <td><a href="">Delete</a></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
            <div class="col-md-4">
                <h2>Sidebar</h2>
                <p>
                    Id dolor iste quaerat quaerat tenetur possimus tenetur.
                </p>
                <p>
                    Error quia quae voluptas.
                </p>
                <p>
                    Itaque maiores ab.
                </p>
            </div>
        </div>
        <div class="row">
            <footer>
                <div class="col-md-12">
                    <h3>Footer</h3><br/>
                    <a href="index.php">Admin panel</a>
                </div>
            </footer>
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>