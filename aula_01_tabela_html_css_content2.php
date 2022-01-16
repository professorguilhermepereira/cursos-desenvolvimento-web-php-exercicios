<?php
/*
 * Função para imprimir na página
 * Funções independentes para cada parte do conteúdo
 */
require_once("listagens/valores_da_tabela.php");
require_once("class/Tabela_De_Frutas.class.php");

$tabela_frutas = new Tabela_De_Frutas();
$tabela_frutas->imprime('Tabela de Frutas', $indices, $linhas_tabela, "Minha lista de frutas");