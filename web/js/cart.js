$(function(){
    $('a.add-to-cart').on('click', function(){
        var rel = $(this).attr('rel');
        $.ajax({
            url:'/shop/product/addCart',
            type:'POST',
            data:{
                'product':{
                    'id': rel,
                    'quantity':1
                }
            },
            dataType:'json',
            success:function(response){
                alert(response.message);
            }
        })
    });
});
