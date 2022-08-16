<?php
// código HTML estático nós incluimos diretamente.
include 'views/cabecalho.php';
include 'component/PostHorizontal.php';

$title = 'Dia dos Pais';
$content = 'O Dia dos Pais bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla';
$post1 = new PostHorizontal($title, $content);
$post1->setImage(46); 
include 'views/posts.php';

include 'views/rodape.php';


