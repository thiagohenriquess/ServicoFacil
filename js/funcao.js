//JavaScript Dcument
$(function(){
  $("#tipo_servico").change(function(){
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: "php/exibe_servicos.php?id="+id,
      dataType: "text",
      success: function(res){
          $("#servico").children(".servico").remove();
          $("#servico").append(res);
      }
    });
  });
});
