$(document).ready(function(){
    layout_popup_estm();

       
    //prodswiper 상품 스와이퍼
    $(".prod_swiper").each(function(index, element){
        var $this = $(this);
        console.log('index',index);
        $this.addClass('instance-' + index);
        var swiper = new Swiper('.instance-' + index, {
            slidesPerView : 'auto',
            // navigation: {
            //     nextEl: $('.instance-' + index).siblings('.swiper-button-next'),
            //     prevEl: $('.instance-' + index).siblings('.swiper-button-prev'),
            // },
            // scrollbar: {
            //     el: $('.instance-' + index).siblings('.swiper-scrollbar'),
            //     hide: false,
            // },
            watchOverflow: true
        });
    });


    //review_swpiper 이미지 스와이퍼
    const swiper1 = new Swiper('.review_swpiper', {
        slidesPerView: 'auto',
    });


    //view_swiper 이미지 스와이퍼
     const swiper = new Swiper('.view_swiper', {
         slidesPerView: 1,
         loop:true,
         pagination: {
             el: ".swiper-pagination",
             type: "fraction",
           }
       });
       swiper.update();
});

//견적팝업 열고 닫기
function layout_popup_estm(){
    $(document).on("click", ".btn_estm_popup", function(e) {
        console.log('aa');
        let target = $(this).attr('data-estmpop');
        let modal = $(`.right_content .step[data-estmpop="${target}"]`)
        $(document).find(modal).parents('.right_content').show();
        $(document).find(modal).show();
        $('body').addClass('hidden');
    });
    $('.close').on('click', function(){
        $(this).parents(".right_content").hide();
        $(this).parents('.step').hide();
        $('body').removeClass('hidden');
    });
    $('.step .btn_back').on('click', function(){
        $(this).parents(".right_content").hide();
        $(this).parents('.step').hide();
        $('body').removeClass('hidden');
    });
};
