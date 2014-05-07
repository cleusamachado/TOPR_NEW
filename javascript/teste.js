$(function () {
  function removeCampo() {
    $(".removerCampos").unbind("click");
    $(".removerCampos").bind("click", function () {
       i=0;
    $(".dados p.campoDados").each(function () {
       i++;
       });
      if (i>1) {
       $(this).parent().remove();
}
});
}
removeCampo();
$(".adicionarCampos").click(function () {
  novoCampo = $(".dados p.campoDados:first").clone();
  novoCampo.find("input").val("");
  novoCampo.insertAfter(".dados p.campoDados:last");
  removeCampo();
  i=0;
    $(".dados p.campoDados").each(function () {
       i++;
       });
      if (i>1) {
       $(this).parent().adicionar();
}
});
});

