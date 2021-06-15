<?php

namespace App;

class Post extends User
{
    protected $title;
    protected $content;
    protected $category;

    public function add_category(Category $category){
        $this->category = $category;
    }

    public function addTitle(string $title){
        $this->title = $title;
    }

    public function addContent(string $content){
        $this->content = $content;
    }

    public function addCategory(string $category){
        $this->category = $category;
    }

    public function getPost() : string {
        return "<strong>Titulo:</strong> $this->title <br>
                <strong>Contenido:</strong> $this->content <br>
                <strong>Categoria:</strong> $this->category->getName <br>
        ";
    }
}