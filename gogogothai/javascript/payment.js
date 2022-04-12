$(document).ready(function(){
    
    Checked();
    cartProdDel();
    
        
    $('.btn_roundchange ').on('click', function(){
        const height = $(this).closest('li').find('.rudaddbox').outerHeight();
        $(this).closest('li').find('.rudaddbox').show();
        $(document).find('.pinner').css('padding-bottom', height);
    });
    
    //예약하기 클릭시 옵션나오기
    $('.btn_reserv').on('click', function(){
        $(this).hide();
        $('.reserv_content').show();
    });

});
//장바구니 물건 삭제
function cartProdDel(){
    $('.prodlist .btn_del').on('click', function() {
        $(this).parents('li').remove();
        let count = $('.count_list > li .cartchk input:checked').length;
        $('.cart_wrap label[for="allchk"]').text(`전체 ${count}건`);
    });
}

//전체 몇건 표시
function Checked(){
    const chklist = $('.count_list > li .cartchk input');
    const allchk = $('#allchk');
    let count = 0;
    allchk.on('click', function(){
        if($('#allchk').is(':checked')){
            chklist.prop('checked', true);
        }else{
            chklist.prop('checked', false);
        };
         count = $('.count_list > li .cartchk input:checked').length;
        
        $('.cart_wrap label[for="allchk"]').text(`전체 ${count}건`);
    });
    
    chklist.on('change', function() {
        const list = chklist.length;
        count = $('.count_list > li .cartchk input:checked').length;
        allchk.text(`전체 ${count}건`);
        if(list === count){
            allchk.prop('checked', true);
        }else{
            allchk.prop('checked', false);
        }
        $('.cart_wrap label[for="allchk"]').text(`전체 ${count}건`);
        
    });

};
