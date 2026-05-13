<?php
require_once('class.php');

class Post{
public $Titolo;
public $Categoria;
public $Tag;

public function __construct($_titolo, Category $_categoria, $_tag){
$this -> Titolo = $_titolo;
$this -> Categoria = $_categoria;
$this -> Tag = $_tag;
}
public function getTitle(){
return $this -> Titolo;
}

public function getCategoria(){
return $this -> Categoria -> getMyCategory();
}

public function getTag(){
return $this -> Tag;
}
}
$post = new Post ("Napoleone \n", new Storia(), "Tag History \n");
echo $post-> getCategoria();
echo $post-> getTag();
echo $post-> getTitle();
?>