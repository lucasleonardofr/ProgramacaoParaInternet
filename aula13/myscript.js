//myscripts.js
//outras propriedades de metodos do javascript
function atualiza() {
  var valor = document.getElementById("slider1").value;
  document.getElementById("result").innerHTML = valor;
}

function mudarCor() {
  document.getElementById("container2").style.backgroundColor = "red";
}

function voltaCor() {
  document.getElementById("container2").style.backgroundColor = "green";
}
