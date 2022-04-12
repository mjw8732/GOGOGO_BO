$(document).ready(function(){
    
    Checked();
    Checked_join();
    cartProdDel();
    
        
    // $('.btn_roundchange ').on('click', function(){
    //     const height = $(this).closest('li').find('.rudaddbox').outerHeight();
    //     $(this).closest('li').find('.rudaddbox').show();
    //     $(document).find('.pinner').css('padding-bottom', height);
    // });

    //장바구니에서 라운드 옵션 팝업 만큼 .pinner 늘리기
    $('.btn_roundchange').on('click', function(){
        const height = $(this).closest('li').find('.rudaddbox').outerHeight();
        $(this).closest('li').find('.right_content').show();
        $(this).closest('li').find('.reset_rudadd').show();
        $('.estimate').removeClass('show');
    });

    
    // $('.btnwrapbtw .btn_text').on('click', function(){
    //     $(this).parents('.right_content').hide();
    // });
    
    

    //예약하기 클릭시 옵션나오고 타이틀변경
    // $('.btn_reserv').on('click', function(){
    //     $(this).hide();
    //     $('.reserv_content').show();
    //     $(this).parents('.pinner').find('.title_page').html('확인 및 결제');
    //     $(this).parents('.right_content').addClass('payment');
        
    // });

});
//장바구니 물건 삭제
function cartProdDel(){
    $('.prodlist .btn_del').on('click', function() {
        $(this).parents('li').remove();
        let count = $('.count_list > li .cartchk input:checked').length;
        $('.cart_wrap label[for="allchk"]').text(`전체 ${count}건`);
        $('.btn_reserv .detail_price').text(`총 ${count}개 가격입력해야함`);
    });
}

//전체 몇건 표시
function Checked(){
    const chklist = $('.cart_list > li .cartchk input');
    const allchk = $('#allchk');
    let count = 0;
    allchk.on('click', function(){
        if($('#allchk').is(':checked')){
            chklist.prop('checked', true);
        }else{
            chklist.prop('checked', false);
        };
         count = $('.cart_list > li .cartchk input:checked').length;
        
        $('.cart_wrap label[for="allchk"]').text(`전체 ${count}건`);
        $('.btn_reserv .detail_price').text(`총 ${count}개 가격입력해야함`);
    });
    
    chklist.on('change', function() {
        const list = chklist.length;
        count = $('.cart_list > li .cartchk input:checked').length;
        allchk.text(`전체 ${count}건`);
        if(list === count){
            allchk.prop('checked', true);
        }else{
            allchk.prop('checked', false);
        }
        $('.cart_wrap label[for="allchk"]').text(`전체 ${count}건`);
        $('.btn_reserv .detail_price').text(`총 ${count}개 가격입력해야함`);
        
    });

};

//회원가입 
function Checked_join(){
    const chklist = $('.agreement_list > li .cartchk input');
    const allchk = $('#join_allchk');
    let count = 0;
    allchk.on('click', function(){
        if($('#join_allchk').is(':checked')){
            chklist.prop('checked', true);
        }else{
            chklist.prop('checked', false);
        };
         count = $('.agreement_list > li .cartchk input:checked').length;
    });
    
    chklist.on('change', function() {
        const list = chklist.length;
        count = $('.agreement_list > li .cartchk input:checked').length;
        if(list === count){
            allchk.prop('checked', true);
        }else{
            allchk.prop('checked', false);
        }
        
    });

};
