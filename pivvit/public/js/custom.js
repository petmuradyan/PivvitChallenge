$(document).ready(function() {
  var basePath = window.location.origin;

  $('#getPurchases').click(function(){
    $.get( basePath + "/api/v1/purchases")
        .done(function( data, status ) {
          if(status!='success'){
            alert('Error please try again');
          }else{
            $.each( data, function( key, obj ) {
              $('#showPurchases').append('<tr>'+
                  '<td>'+obj.id+'</td>'+
                  '<td>'+obj.title+'</td>'+
                  '<td>'+obj.quantity+'</td>'+
                  '<td>'+obj.price+'</td>'+
                  '<td>'+obj.price*obj.quantity+'</td>'+
                  '</tr>');
            });
          }
        });
  });

  $('#offeringID, #quantity').change(function () {
    var price = $('select[name="offeringID"] option:selected').data('price');
    var quantity = $('#quantity').val();
    $('#total').val(price*quantity);
  });


  $('#makePurchaseForm').submit(function(e){
    e.preventDefault();
    var customerName = $('#customerName').val();
    var offeringID = $('#offeringID').val();
    var quantity = $('#quantity').val();
    $.post( basePath + "/api/v1/purchases", {customerName:customerName, offeringID:offeringID, quantity:quantity})
        .done(function( data, status ) {
          if(status!='success'){
            alert('Error please try again');
          }else{
            $('#makePurchaseForm').reset();
            alert('Success');
          }
        });
  });

});