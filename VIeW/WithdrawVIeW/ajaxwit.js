 $(document).ready(function(){
//               alert("GOD IS GREAT") ;
               
               $('#ammt').keyup(function(){
//             
             var ammt = $('#ammt').val();
                 ammt = $.trim(ammt);
             
              if(ammt !="")
              { 
                  $('#loader').show();
                  $.post('WithdrawVIeW/ajaxwit.php',{ammt:ammt},function(data){
                      $('.feedback').int(data);                     
                      $('#loader').hide();
                  });
              }else {
                  $('.feedback').text('Enter Amount');
              }
             
             
            });
               
               
           });
       
 
