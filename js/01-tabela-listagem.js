/*
 * Função para imprimir na página
 * Funções independentes para cada parte do conteúdo
 */
function imprime( text ) {
   document.write(text);
}

function geraTitulo(text) {
   return "<h1>" + text + "</h1>";
}

function geraTabela(cabecalho, corpo, rodape) {
   let html = '';
   html += "<table>";
   html += cabecalho;
   html += corpo;
   html += rodape;
   html += "<table>";
   return html
}

function geraTabelaCabecalho(columns) {
   let html = '';
   html += "<thead>";
   html += "<tr>";
   for(let j = 0; j < columns.length; j++ ) {
      html += "<th>" + columns[j] + "</th>";
   }
   html += "</tr>";
   html += "</thead>";
   return html;
}

function geraTabelaCorpo(linhas) {
   let html = '';
   html += "<tbody>";
   for(let j = 0; j < linhas.length; j++) {
      html += "<tr>";
      let classe = (j % 2 == 0) ? '' : "class='linha-par'";
      html += "<td "+ classe +">" + (j+1) + "</td>";
      html += "<td "+ classe +">" + linhas[j][0] + "</td>";
      html += "<td "+ classe +"> R$" + linhas[j][1] + "</td>";
      html += "</tr>";
   }
   html += "</tbody>";
   
   return html;
}

function geraTabelaRodape(text) {
   let html = '';
   html += "<tfoot>";
   html += "<tr>";
   html += "<td colspan='3'>" + text + "</td>";
   html += "</tr>";
   html += "</tfoot>";
   return html;
}

let indicesTabela = ['Indice', 'Frutas', 'Pais', 'Preços'];
let tabelaCabecalho = geraTabelaCabecalho(indicesTabela);

let linhasTabela = [
   ['Abacate',5.25],
   ['Abacaxi',4.08],
   ['Ameixa',3.76],
   ['Carambola',8.1],
   ['Coco Verde',9.73],
   ['Figo',7.04],
   ['Framboesa',2.73],
   ['Fruta Do Conde',2.24],
   ['Goiaba',2.53],
   ['Jaca',5.32],
   ['Laranja-Pera',1.3],
   ['Maçã',5.14],
   ['Mamão',4.52],
   ['Maracujá',0.96],
   ['Melancia',4.82],
   ['Nectarina',7.74],
   ['Pera',8.35],
   ['Pêssego',3.51],
   ['Seriguela',5.62],
   ['Uva',1.6]
];
let tabelaCorpo = geraTabelaCorpo(linhasTabela);

let tabelaRodape = geraTabelaRodape("Lista de frutas da quitanda");

let html = '';
html += geraTitulo("Tabela de Frutas");
html += geraTabela(tabelaCabecalho, tabelaCorpo, tabelaRodape);

imprime(html);