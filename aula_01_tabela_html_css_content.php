<?php
/*
 * Função para imprimir na página
 * Funções independentes para cada parte do conteúdo
 */
require_once("listagens/valores_da_tabela.php");


function imprime($text) {
   echo $text;
}

function geraTitulo($text) {
   return '<h1>' . $text . '</h1>';
}

function geraTabela($header, $body, $footer) {
   $html ='';
   $html .= '<table>';
   $html .= $header;
   $html .= $body;
   $html .= $footer;
   $html .= '</table>';
   
   return $html;
}

function geraTabelaCabecalho($columns) {
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

function geraTabelaCorpo($linhas) {
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

function geraTabelaRodape($text) {
   $html = '';
   $html .= '<tfoot>';
   $html .= '<tr>';
   $html .= '<td colspan="3">' . $text . '</td>';
   $html .= '</tr>';
   $html .= '</tfoot>';
   return $html;
}

$html = '';
$html .= geraTitulo('Tabela de Frutas');



$tableHeader = geraTabelaCabecalho($indices);
$tableBody = geraTabelaCorpo($linhas_tabela);
$tableFooter = geraTabelaRodape("Minha lista de frutas");

$html .= geraTabela($tableHeader, $tableBody, $tableFooter);

imprime( '<section>' . $html . '</section>');

      /**
      <section>
         <h1>Tabela de Exemplo</h1>
         <table>
            <thead>
               <tr>
                  <th>Coluna 1</th>
                  <th>Coluna 2</th>
                  <th>Coluna 3</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
               <tr>
                  <td>Coluna 1</td>
                  <td>Coluna 2</td>
                  <td>Coluna 3</td>
               </tr>
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="3">Rodape</td>
               </tr>
            </tfoot>
         </table>
      </section>
      */