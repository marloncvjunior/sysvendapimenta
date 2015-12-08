$(document).ready(function () {

    $(".addprod").click(function () {
        
        var codigo = $(this).parents('p').find('.addprod').val();
        var quantidade = $(this).parents('p').find('.quant').val();
        //alert("cod: "+codigo+" quant: "+quantidade);
       
        $.get( "main.php", { codproducar: codigo, quant: quantidade },function(data){
            alert("Item adicionado no carrinho !!!");
            
        });
        $(this).parents('p').find('.quant').val('');
            return false;    
        });
        
        
       
    });

