$(document).ready(function(){
    $('.add-group').click(function(event){
        event.preventDefault()
       $('.li-add').css("transform" , "scale(1)");
    });
    // $('.btn-edit').click(function(event){
    //     event.preventDefault()
    //    $('.data-edit-14').replaceWith('<input type="text" name="" id="" value="{{ $Category->name }}">');
    // });
});