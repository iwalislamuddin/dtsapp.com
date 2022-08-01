$('.tbody').hide();
var tbody = $('#table-astm.tbody').show();

$("#inputMaterialStandard").on("change", function(){
    var curCode = $(this).val();

    $('.tbody').hide();
    var tbody = $(curCode + '.tbody').show();

})