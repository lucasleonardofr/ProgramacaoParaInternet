$(document).ready(function() {
  $("#loadbutton").click(function() {
    $.ajax({
      url: "dados.txt",
      success: function(result) {
        $("#results").html(result);
      }
    });
  });

  $("#sendbutton").click(function() {
    $.ajax({
      url: "consulta.php",
      data: { numero: 15 },
      type: "POST",
      success: function(result) {
        $("#results").html(result);
      }
    });
  });
});
