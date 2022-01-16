<?php
/**
 * @author Guilherme F. F. Pereira <contato@queroempreendermuito.com.br>
 * @email contato@queroempreendermuito.com.br
 * @link http://queroempreendermuito.com.br
 * @copyright Copyright © Todos os Direitos reservado a Guilherme F. F. Pereira
 * @version 1.0.0
 * Description Tabela_De_Frutas: 
 */
class Tabela_De_Frutas {
   
   public function __construct() {
      
   }
   
   private function geraTitulo($text) {
      return '<h1>' . $text . '</h1>';
   }
   
   public function geraTabela($table_title, $table_index, $table_rows, $footer_text) {
      $html ='';
      $html .= $this->geraTitulo($table_title);
      $html .= '<table>';
      $html .= $this->geraTabelaCabecalho($table_index);
      $html .= $this->geraTabelaCorpo($table_rows);
      $html .= $this->geraTabelaRodape($footer_text);
      $html .= '</table>';

      return $html;
   }
   
   private function geraTabelaCabecalho($columns) {
      $html = '';
      $html .= '<thead>';
      $html .= '<tr>';
      for($j = 0; $j < count($columns); $j++) {
         $html .= '<th>' . $columns[$j] . '</th>';
      }
      $html .= '</tr>';
      $html .= '</thead>';
      return $html;
   }

   private function geraTabelaCorpo($linhas) {
      $html = '';
      $html .= '<tbody>';
      for($j = 0; $j < count($linhas); $j++) {
         $classe = ($j % 2 == 0) ? '' : ' class="linha-par"';
         $html .= '<tr' . $classe . '>';
         $html .= '<td>' . ($j + 1) . '</td>';
         $html .= '<td>' . $linhas[$j]['fruta'] . '</td>';
         $html .= '<td> R$' . $linhas[$j]['preco'] . '</td>';
         $html .= '</tr>';
      }
      $html .= '</tbody>';

      return $html;
   }

   private function geraTabelaRodape($text) {
      $html = '';
      $html .= '<tfoot>';
      $html .= '<tr>';
      $html .= '<td colspan="3">' . $text . '</td>';
      $html .= '</tr>';
      $html .= '</tfoot>';
      return $html;
   }
   
   public function imprime($title, $indices, $linhas_tabela, $text_footer) {
      echo '<section>' . $this->geraTabela($title, $indices, $linhas_tabela, $text_footer) . '</section>';
   }
}