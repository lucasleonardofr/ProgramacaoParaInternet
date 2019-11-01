//myscript.js
/*seletor.evento(function(){
    sletor.efeitos
})
*/
$(document).ready(function() {
  $("p#hideid").click(function() {
    $("p.exemplos").hide();
    $("h1").css("color", "red");
    //css({"color": "rgb(0,255,0)", "font-size": "50px"})
  });

  $("p#showid").dblclick(function() {
    $("p.exemplos").show();
  });

  $("p#fadeinid").click(function() {
    $("p.exemplos").fadeIn("slow");
  });

  $("p#fadeoutid").click(function() {
    $("p.exemplos").fadeOut(5000);
  });

  $("#slidedownid").click(function() {
    $("#painel").slideDown();
  });
  $("#slideupid").click(function() {
    $("#painel").slideUp("slow");
  });
  $("p#textid").click(function() {
    var texto = $("p.exemplos").text(); //get
    $("p#resposta").text(texto); //set
  });
  $("p#htmlid").click(function() {
    var texto = $("div#container").html(); //get
    alert(texto); //set
  });

  $("p#valid").click(function() {
    var conteudo = "Ituiutaba";
    $("input#inputid").val(conteudo); //set
  });
  $("h1").click(function() {
    var conteudo = $("input#inputid").val(); //get
    $(this).text(conteudo); //set
  });
});
