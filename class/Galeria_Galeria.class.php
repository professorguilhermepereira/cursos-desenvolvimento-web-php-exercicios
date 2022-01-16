<?php
/**
 * @author Guilherme F. F. Pereira <contato@queroempreendermuito.com.br>
 * @email contato@queroempreendermuito.com.br
 * @link http://queroempreendermuito.com.br
 * @copyright Copyright © Todos os Direitos reservado a Guilherme F. F. Pereira
 * @version 1.0.0
 * Description Galeria_Galeria: 
 */
require_once("class/Galeria_Imagem_Escondido.class.php");
require_once("class/Galeria_Imagem.class.php");
class Galeria_Galeria {

   /**
    * @var string
    */
   private $class_image_hidden;
   private $js_file;
   private $css_file;
   private $image_hidden_list;
   private $image_list;
   private $id;

   public function __construct(string $id, array $image_list, array $image_hidden_list = array(), string $class_image_hidden,  string $css_file = '', string $js_file = '') {
      
      $this->id = $id;
      $this->image_list = $image_list;
      $this->image_hidden_list = $image_hidden_list;
      $this->css_file = $css_file;
      $this->js_file = $js_file;
      $this->class_image_hidden = $class_image_hidden;
   }
   
   public function head() {
      $html = '';
      if($this->css_file != '') {
         $html .= '<link rel="stylesheet" href="'. $this->css_file .'"/>';
      }
      if($this->js_file != '') {
         $html .= '<script src="'. $this->js_file .'" defer></script>';
      }
      return $html;
   }
   
   public function make_galeria() {
      $html  = '<section id="'. $this->id .'">';
      
      $html .= $this->make_list_image();
      $html .= $this->make_list_image_hidden();
      $html .= '</section>';
      
      return $html;
   }
   
   public function make_list_image() {
      $html = '';
      for($j = 0; $j < count($this->image_list); $j++) {
         $image = new Galeria_Imagem(
                 $this->image_list[$j]['source'],
                 $this->image_list[$j]['alt'],
                 $this->image_list[$j]['title']
                 );
         $html .= $image->make_image();
      }
      return $html;
   }
   
   public function make_list_image_hidden() {
      $html = '';
      for($j = 0; $j < count($this->image_hidden_list); $j++ ) {
         $image = new Galeria_Imagem_Escondido(
                 $this->class_image_hidden,
                 $this->image_hidden_list[$j]['source'],
                 $this->image_hidden_list[$j]['alt'],
                 $this->image_hidden_list[$j]['title']
                 );
         $html .= $image->make_image();
      }
      return $html;
   }
}