
    $('input[name="select-address"]').change( function(){
        if($('input[name="select-address"]:checked').val() == "other"){
          $(".other-form").slideDown('normal',function(){
                $('body').animate({scrollTop:$('.select-address').position()['top']});
          });
        } else {
          $(".other-form").slideUp('slow');
        }
    });

    jQuery("#other-form").validationEngine();

    $('#address-search').click(function(){
      AjaxZip3.zip2addr('postalcode','', 'address1', 'address1');
    });
