$(document).ready(function(){
    $('body').on('click','.add-group',function(event){
        event.preventDefault()
    //    $('.group').append($('.div-li-add').html())
        $('.li-add').css("transform" , "scale(1)");
    });

//delete
    $('body').on('click','.delete',function(){
        let id = $(this).data('id');
        $.ajax({
            url: "/categories/"+id,
            type: 'DELETE',
            data: {
                "id": id,
            },
            success:function(data){
                // if(data.success == true){ 
                //     setTimeout(function(){
                //          location.reload();
                //     }, 100); 
                //  }
            },
            error:function(){
                alert('1')
            }
        });
        $('.li-'+ id).css('display','none')
    });

//story
    $('body').on('click','.buttonAddWork',function(event) {
        event.preventDefault();
        let name = $('#list').val()
        $.ajax({
            url: "/categories",
            type:"POST",
            data: { name:name },
            success:function(data){
                $('.data-edit-id').addClass('data-edit-'+ (data.id));
                $('.input-edit-id').addClass('input-edit-'+ (data.id));
                $('.btn-edit-id').attr('data-id', (data.id));
                $('.btn-edit-check-id').attr('data-id', (data.id));
                $('.input-data-id').addClass('input-data-'+(data.id));
                $('.btn-edit-check-id').addClass('btn-edit-check-'+ (data.id));
                $('.delete').attr('data-id', (data.id));
                $('.li-id').addClass('li-' + (data.id));
            },
        });
        $('.input-data-id').attr('value', name);
        $('.group').append($('.add-new-list').html());
        $('.name-add').append(name);
        $('.li-add').css('display','none');
    });

    //update
    $('body').on('click','.btn-edit-check',function(){
    let id = $(this).attr('data-id');
    let name = $('.input-data-'+id).val();
    console.log(name);
    $.ajax({
        url: "/categories/"+id,
        type: "POST",
        data: {name:name,_method:'PUT'},
        success:function(data){
            // if(data.success == true){ 
            //     setTimeout(function(){
            //          location.reload();
            //     }, 100); 
            //  }   
        },
        error:function(){
            alert('error')
        }
    });
});
     $('body').on('click','.btn-edit',function(){
        $a = $(this).attr('data-id');
        $('.input-edit-'+ $a).fadeToggle();
        $('.data-edit-'+ $a).fadeToggle();
        $('.btn-edit-check-' +$a).fadeToggle();
        $(this).fadeToggle();
    });
});