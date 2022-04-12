$(document).ready(function(){
    layout_popup_estm();

    $('.btn_estm_pay').on('click', function(){
        $('.bnt_wrap').addClass('hidn');
        $(this).parents('.estimate').find('.step2').show();
    });
       
    //prodswiper 상품 스와이퍼
    $(".prod_swiper").each(function(index, element){
        var $this = $(this);
        $this.addClass('instance-' + index);
        var swiper = new Swiper('.instance-' + index, {
            slidesPerView : 'auto',
            watchOverflow: true
        });
    });

    //review_swpiper 이미지 스와이퍼
    var swiper1 = new Swiper('.review_swpiper', {
        slidesPerView: 'auto',
    });

    //view_swiper 이미지 스와이퍼
    var ww = $(window).width();
    var mySwiper = undefined;
    
    function initSwiper() {
    
        if (ww < 1100 && mySwiper == undefined) {
        mySwiper = new Swiper('.view_swiper', {
            slidesPerView: 'auto',
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              }
          });
        } else if (ww >= 1100 && mySwiper != undefined) {
        mySwiper.destroy();
        mySwiper = undefined;
        }
    }
    
    initSwiper();
    
    $(window).on('resize', function () {
        ww = $(window).width();
        initSwiper();
    });
        

    $('.btn_goods_estimate').on('click', function(){
        $('.step.step1').hide();
        $('.step.step2').show();
    });
    $('.btn_data_save').on('click', function(){
        $('.step.step2').hide();
        $('.step.step3').show();
    });

    $('.roundadd_close').on('click', function(){
        // $('.reset_rudadd').parents('.right_content').hide();
        $(this).closest('.reset_rudadd').hide();
        $(this).closest('.resetting_option').hide();
        // $('body').removeClass('hidden');
        // $('.bnt_wrap.step1mo').removeClass('hidn');
        // $('.bnt_wrap.step1').removeClass('hidn');
        // $('.bnt_wrap.step2').hide();
    });
    
     $('.btn_text[date-type="close"]').on('click', function(){
        $(this).closest('.reset_rudadd').hide();
        $(this).closest('.resetting_option').hide();
        //   $('.reset_rudadd').parents('.right_content').hide();
        //  $(this).parents('.right_content').hide();
        //  $('body').removeClass('hidden');
        //  $('.bnt_wrap.step1mo').removeClass('hidn');
        //  $('.bnt_wrap.step2').hide();
     });
        
    $('.btn_estm_pay').on('click', function(){
        $('.step.step1').hide();
        $('body').removeClass('hidden');
    });
});




//견적팝업 열고 닫기
function layout_popup_estm(){
    $(document).on("click", ".btn_estm_popup", function(e) {
        
        let target = $(this).attr('data-estmpop');
        let modal = $(`.right_content .step[data-estmpop="${target}"]`)
        $(document).find(modal).parents('.right_content').show();
        $(document).find(modal).show();
        $(document).find(modal).addClass('show');
        $('body').addClass('hidden');
        e.preventDefault();
    });

    if($('.step').hasClass('show')){
        $('body').addClass('hidden');
    }else{
        $('body').removeClass('hidden');
    };



    $('.step .btn_back').on('click', function(){
        $(this).parents(".right_content").hide();
        $(this).parents('.step').hide();
        $('body').removeClass('hidden');
        $('.bnt_wrap').removeClass('hidn'); 
        $('.btn_estm_pay').parents('.estimate').find('.step2').hide();
    });
};
