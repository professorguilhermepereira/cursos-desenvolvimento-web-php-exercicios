<?php
/**
 * @author Guilherme F. F. Pereira <contato@queroempreendermuito.com.br>
 * @email contato@queroempreendermuito.com.br
 * @link http://queroempreendermuito.com.br
 * @copyright Copyright © Todos os Direitos reservado a Guilherme F. F. Pereira
 * @version 1.0.0
 * Description Galeria_Imagem_Escondido: 
 */
class Galeria_Imagem_Escondido {

   private $text_content;
   private $alt;
   private $source;
   private $class_css;

   /*
   
    */
   public function __construct($class_css, $source, $alt, $text_content) {
      $this->class_css = $class_css;
      $this->source = $source;
      $this->alt = $alt;
      $this->text_content = $text_content;
   }
   
   public function make_image() {
      $html = '<p class="'. $this->class_css .'" img-alt="'. $this->alt .'" img-src="'. $this->source .'">'. $this->text_content .'</p>';
      return $html;
   }
   
   public function make_image_show() {
      echo $this->make_image();
   }
}