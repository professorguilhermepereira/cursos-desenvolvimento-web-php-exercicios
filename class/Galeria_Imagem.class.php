<?php
/**
 * @author Guilherme F. F. Pereira <contato@queroempreendermuito.com.br>
 * @email contato@queroempreendermuito.com.br
 * @link http://queroempreendermuito.com.br
 * @copyright Copyright © Todos os Direitos reservado a Guilherme F. F. Pereira
 * @version 1.0.0
 * Description Galeria_Image: 
 */
class Galeria_Imagem {

   private $source;
   private $alt;
   private $title;
   
   public function __construct($source, $alt, $title) {
      $this->source = $source;
      $this->alt = $alt;
      $this->title = $title;
   }
   
   public function make_image() {
      $html  = '<figure>';
      $html .= '<img src="'. $this->source .'" alt="'. $this->alt .'" title="'. $this->title .'"/>';
      $html .= '</figure>';
      return $html;
   }
   
   public function make_image_show() {
      echo $this->make_image();
   }
}