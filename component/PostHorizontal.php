<?php

class PostHorizontal {
    // atributos (Principio do Privilégio Mínimo)
    private $image;
    private $subtitle;
    private $subtitleColor;
    private $title;
    private $content;
    private $author;
    private $date;
    private $btnLabel;

    // parâmetros do construtor
    function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    // métodos acessores (setters or getters)
    public function setImage($num){
        $this->image = $num;
    }
    
    public function setSubtitle($subtitle){
        $this->subtitle = $subtitle;
    }

    // métodos auxiliares
    public function getHTML(){
        $html = '
        <div class="row">'.$this->imageColumn().'      
          
          <div class="col-lg-7 mb-4">            
            <a href="" class="teal-text">
              <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Lifestyle </strong></h6>
            </a>
            <h4 class="mb-4"><strong>This is title of the news</strong></h4>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus, omnis voluptas assumenda est, omnis dolor.</p>
            <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
            <a class="btn btn-primary">Read more</a>
          </div>
          
        </div>
        
        <hr class="mb-5">';

        return $html;
    }

     private function imageColumn(){
        $html = '<div class="col-lg-4 mb-4">            
        <div class="view overlay z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg" class="img-fluid" alt="First sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>';
        return $html;
    }

}