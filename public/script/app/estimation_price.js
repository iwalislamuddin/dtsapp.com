var type = $("#selectType").val();
var var1, var2, var3, var4;
var qty;
var elements = [];

const removeItem = (i) => {
    elements.splice(i,1);
    displayElements(elements);
}

$("#btnAdd").on("click", () => {
    let data = new EstimationElement(type);

    data.name = $("#inputDescription").val();
    data.var1 = $("#inputVar1").val();
    data.var2 = $("#inputVar2").val();
    data.var3 = $("#inputVar3").val();
    data.qty = $("#inputQty").val();

    elements.push(data);
    displayElements(elements);

    $("#selectType").focus();
});

const displayElements = (el) => {
    let rowString = '';

    $.each(el, (index, item) => { 
        rowString += `
        <tr>
            <td>${item.name}</td>
            <td>${item.var1} x ${item.var2} x ${item.var3}</td>
            <td>${item.qty}</td>
            <td>
                <i class="bi-x-circle" style="font-size: 1.1rem; color: #ed2f2f" onclick="removeItem(${index})"></i>
            </td>
        </tr>
        `;
    });

    $("#tableElements tbody").html(rowString);
}

$("#selectType").change(function () {
    switch ($(this).val()) {
        case ("beamfooting") :
            $("#rowInputVar4").show();



        break;

        case ("footing") :
            $("#rowInputVar4").show();
        break;
            
        default:
            $("#rowInputVar4").hide();
        break;
    }

    console.log($(this).val());
})


$(".nav-tabs a").click(function(){
    $(this).tab('show');
});

(trans('distance'));
console.log((trans('width')));