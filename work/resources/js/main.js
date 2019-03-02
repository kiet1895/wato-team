$(document).ready(function(){
    $('.add-group').click(function(event){
        event.preventDefault()
       $('.li-add').css("transform" , "scale(1)");
    });

    $('.btn-edit-check').click(function(){
        let id = $(this).attr('data-id');
        var name = $('#input-data-'+ id).val();
        $.ajax({
            url: "/categories/"+id,
            type: "POST",
            data: {name:name,_method:'PUT'},
            success:function(data){
                console.log(data);
            },
            error:function(){
                alert('1')
            }
        });
    });

    // $('.buttonAddWork').click(function(){
    //     $x = $('dataAdd').val();
    //     console.log($x);
    // });


    $('.buttonAddWork').click(function(event) {
        event.preventDefault();
        var name = $('#list').val()
        $.ajax({
            url: "/categories",
            type:"POST",
            data: { name:name },
            success:function(response){
                // console.log(response.Category[1]);
            },
        });
    });

    $('.btn-edit').click(function(event){
        event.preventDefault()
        $a = $(this).attr('data-id');
        $('.input-edit-'+ $a).fadeToggle();
        $('.data-edit-'+ $a).fadeToggle();
        $('.btn-edit-check-' +$a).fadeToggle();
        $(this).fadeToggle();
    });
});