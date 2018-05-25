<?php
require_once '../config.php';
$result = false;

if(!empty($_POST)){
    $sql = "INSERT INTO blogposts (title, content) VALUES (:title, :content)";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title'=> $_POST['title'],
        'content'=> $_POST['content']
    ]);
}
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
                <h2>New post</h2>
                <p><a class="btn btn-default" href="posts.php">Back</a></p>
                <?php
                    if($result) {
                        echo'<div class="alert alert-success">Post Saved</div>';
                    }
                ?>
                <form action="insert-post.php" method="post">
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input id="inputTitle" class="form-control" type="text" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Content</label>
                        <textarea id="inputContent" class="form-control" name="content"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save"/>
                </form>
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