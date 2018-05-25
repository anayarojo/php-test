<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
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
                <?php foreach($blogPosts as $blogPost): ?>
                    <div class="blog-post">
                        <h2>
                            <?php echo $blogPost['title']?>
                        </h2>
                        <p>Jueves 17 de mayo de 2018 por <a href="#"><?php echo $blogPost['author']?></a></p>
                        <div class="blog-post-image">
                            <img src="<?php echo $blogPost['image']?>" style="width: 100%;"alt="post-1">
                        </div>
                        <div class="blog-post-content">
                            <?php echo $blogPost['content']?>
                        </div>
                    </div>
                <?php endforeach ?>
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
                    <h5>Footer</h5><br/>
                    <a href="<?php echo BASE_URL;?>admin">Admin panel</a>
                </div>
            </footer>
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>