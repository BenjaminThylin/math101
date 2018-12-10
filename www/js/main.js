$(document).ready(function() {

    $(".mathsubject").click(function(){
      var mathsubjectID = $(this).attr('id');

       $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "single_mathsubject.php", 
            data: {
                mathsubject_id: mathsubjectID
            },            
            dataType: "html",   //expect html to be returned                
            success: function(response){  
                // var foo = document.getElementbyid('mathsubject_info')                  
                $("#mathsubject_info").html(response); 
            }

        });
    });
});