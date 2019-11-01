//myscript js
//Quando dar o click chamara a função
function changeText() {
  document.getElementById("conteudo1").innerHTML = "Mudar conteúdo HTML";
}

function changeAtribute() {
  document.getElementById("imagem1").src = "sol.jpg";
  var arquivo = document.getElementById("imagem1").src;
  document.getElementById("resposta").innerHTML = arquivo;
  console.log(arquivo);
  window.alert();
  /*
  var x = document.getElementsByName(arquivo);
  document.getElementsByName("resposta1").innerHTML = x;
*/
}

function changeColor() {
  document.getElementById("titulo1").style.color = "red";
}

function viewImage() {
  document.getElementById("imagem1").style.display = "block";
}
function blockImage() {
  document.getElementById("imagem1").style.display = "none";
}

function change() {
  var texto = document.getElementById("cx1").value;
  document.getElementById("titulo1").innerHTML = texto;
}
