/*
 * inserir classe css na esquerda e na direta para compensar o posicionamento da imagem
 * pega o valor do atributos img-src, img-title, e img-alt da tag p para criar uma imagem
 * remover a class="hidden"
 */
function logg(text) {console.log(text);}
let figureList = document.querySelectorAll("#galeria > figure");
logg(figureList);
figureAddClass(figureList);
function figureAddClass(figureList) {
   
   let lastLine = false;
   for(let j = 0, fig = ''; j<figureList.length; j++) {
      fig = figureList[j];
      fig.removeAttribute("class");
      if(j<=3) {
         switch(j) {
            case 0: fig.classList.add("figure","figure-top-left"); break;
            case 1:
            case 2: fig.classList.add("figure","figure-top"); break;
            case 3: fig.classList.add("figure","figure-top-right"); break;
         }
      } else if(j >= (figureList.length-4)) {
         switch(j % 4) {
            case 0: 
               lastLine = true;
               fig.classList.add("figure","figure-bottom-left");
               break;
            case 1:
            case 2: 
               if(lastLine) {
                  fig.classList.add("figure","figure-bottom");
               } else {
                  fig.classList.add("figure","figure-center");
               }
               break;
            case 3: 
               if(lastLine) {
                  fig.classList.add("figure","figure-bottom-right");
               } else {
                  fig.classList.add("figure","figure-right");
               }
               break;
         }
      } else if(j % 4 == 0) {
         fig.classList.add("figure","figure-left");
      } else if(j % 4 == 3) {
         fig.classList.add("figure","figure-right");
      } else {
         fig.classList.add("figure","figure-center");
      }

   }
}

function criaTagFigure(child, parent, sourceElement) {
   child = document.createElement(child);
   child.setAttribute("src", sourceElement.getAttribute("img-src"));
   child.setAttribute("alt", sourceElement.getAttribute("img-alt"));
   child.setAttribute("title", sourceElement.textContent);
   
   parent = document.createElement(parent);
   parent.appendChild(child);
   return parent;
}

let criaTagTimer = setTimeout(function() {
   let galeria = document.querySelector("#galeria");
   let imagens = document.querySelectorAll("#galeria > .jsimg");
   for(let j = 0; j < imagens.length; j++) {
      let imagem = criaTagFigure("img", "figure", imagens[j]);
      galeria.appendChild(imagem);
   }
   let figures = document.querySelectorAll("#galeria > figure");
   figureAddClass(figures);
   logg(figures);
}, 5 * 1000);