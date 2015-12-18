

$('select[name=quantity]')[0].onchenge(function(){
    alert($('input[name=size]').prop('checked').val());
});
