//Aplica estilo do bootstrap à páginação
$(function(){
    $("ul.page-numbers").addClass("pagination justify-content-center");
    $("ul.page-numbers li").addClass("page-item");
    $("ul.page-numbers li .current").parent("li").addClass("active");
    $(".page-numbers a, .page-numbers span").addClass("page-link");
    $(".lista-paginacao").removeClass("d-none");
})
