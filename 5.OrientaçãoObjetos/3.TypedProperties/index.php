<?php
class post {

    //definir o tipo é igual a C
    public int $likes = 0;
    public array $comments = [];
    public string $author;
}

$post1 = new post();
$post1->likes=10;
echo $post1->likes;
?>