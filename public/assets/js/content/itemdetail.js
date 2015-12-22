
calcMoney();

$('#quantity').change(function(){
    calcMoney();
});

$('input[name=size]').change(function(){
    calcMoney();
});

function calcMoney(){
    var size = $('input[name=size]:checked').val();
    if(size == undefined){
        size = "";
    }
    var unit_price = $('#price' + size).text();
    $('#money').text(unit_price * $('#quantity').val());
    $('#form-money').val(unit_price * $('#quantity').val());
}
