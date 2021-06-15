<?php

include __DIR__ . "/vendor/autoload.php";

use App\Author;
use App\Category;
use App\Post;

// Creacioin de categoria

$tecnologyCategory =  new Category();
$tecnologyCategory->setName('Tecnologia');

$sportCategory =  new Category();
$sportCategory->setName('Deporte');

// Creacio de autor
$authorCristopher = new Author();
$authorCristopher->setName("Cristopher", "Valentin");

// Creacion de post
// Primer post
$tecnologyCategoryPost = new Post();
$tecnologyCategoryPost -> addTitle("React Native");
$tecnologyCategoryPost -> addContent("La tecnologia de React esta empezando");
$tecnologyCategoryPost -> addCategory($this->$tecnologyCategory);

// Segundo post

$sportCategoryPost = new Post();
$sportCategoryPost -> addTitle("Baseball");
$sportCategoryPost -> addContent("El mejor de todos CrisVA");
$sportCategoryPost -> addCategory($this->$sportCategory);

// Asignacion de post a los autores

$authorCristopher->create_post($this->$tecnologyCategoryPost);
$authorCristopher->create_post($this->$sportCategoryPost);

// listamos los post

$authorsPost = $authorCristopher->getPostst();

foreach ($authorsPost as $post) {
    echo "El usuario {$authorCristopher->getFullName} tiene el post: <br>";
    echo $post->getPost();
    echo "<br><br><br>";
}
