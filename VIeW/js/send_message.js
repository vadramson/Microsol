/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//alert("shgjj");
$(function(){
    $('#addEmployee').click(function(){
        var emcode = $('#emplcode').val();
        var embranch = $('#emplbranch').val();
        var emdpt = $('#empldpt').val();
//        var username = $('#loggedInUser').text();
        
        if (message != ''){
            $.ajax({
              data: {ecode: emcode, ebranch: embranch, edpt: emdpt, },
              type: "GET",
              url: "send_message.php",
              success: function(){
                $('#NewmsgContent').val('');
              }
            });
        }
    })
});
