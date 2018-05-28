<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function getIndex(){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM blogposts ORDER BY id DESC");
        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
        return render('../views/index.php', ['blogPosts' => $blogPosts]);
        include '../views/index.php';
    }
}
