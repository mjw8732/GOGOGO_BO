$(document).ready(function(){

    //prod_wrap fullpage 일때
    // header();
    //검색박스
    serchBox();
    //검색창값 변경시
    changText();
    counting();
    //딤팝업
    layout_popup_dim();
    //작은 팝업
    popup_small();
    //a태그 새로고침 막기
    noReflash();
    //타이머
    timeCount();
    //모바일 맵에 있는검색창
    mapSerchCartShow();

    
    // if($('.prod_wrap').hasClass('fullpage')){
    //     $('.layout_header').addClass('fixup');
    //     $('.serchwrap').addClass('offsup');
    // }else{
    //     $('.layout_header').removeClass('fixup');
    //     $('.serchwrap').removeClass('offsup');
    // };


    $('.btn_scrap').on('click', function(){
        let $this = $(this);
        $this.stop().toggleClass('on');
        if($this.hasClass('on')){
            $.toast('스크랩 되었습니다..', {sticky: false, type: 'info'});
        }else{
            $.toast('스크랩 해제되었습니다.', {sticky: false, type: 'info'});
        };
    });


    //맵클릭시 상품안보이기
    $('.mapcontent').on('click', function(e){
        e.preventDefault();
        $('.prodmap_wrap').addClass('hintshow');       
    });

    $('.btn_move').on('click', function() {
        $("html, body").animate({scrollTop: 0}, 400);
    });


    //시간예약팝업
    $('.btn_rser').on('click', function(){
        $(this).closest('.reservebox').find('.timelist_pop').show();
    });
    $('.timelist_pop li button').on('click', function(){
        let $this = $(this);
        let time = $this.text();
        $this.closest('.timelist_pop').hide();
        $this.closest('.reservebox').find('.btn_rser').text(time);
    });

    //상품상세 라운드 추가버튼
     $('.btn_roundadd ').on('click', function(){
         $(this).closest('.descbox').find('.rudaddbox').show();
     });
    
    //장바구니에서 라운드 옵션 팝업 만큼 .pinner 늘리기
    //  $('.btn_roundchange').on('click', function(){
    //      const height = $(this).closest('li').find('.rudaddbox').outerHeight();
    //      $('reset_rudadd').show();
    //     $(document).find('.pinner').css('padding-bottom', height);
    //      $('.reset_rudadd .addround').addClass('fixed');
    //      $('.estimate').removeClass('show');
    //  });
    
    //장바구니에서 라운드 옵션 팝업 만큼 .pinner 원복
    const popHeigh = function(){
        // $(document).find('.pinner').css('padding-bottom', '200px');
    };
      
    //팝업닫기
    // $('.close').on('click', function(){
    //     popHeigh();
    // });

    // $('button[date-type="close"]').on('click', function(){
    //     $(this).closest('.layer-popup').hide();
    //     $(this).closest('.layout_popup').hide();
    //     $(document).find('.pinner').css('padding-bottom', '200px');
    //     popHeigh();
    // });

    //버튼들형제 on 만 붙이기
    $('[data-type="onlyon"]').on('click', function(){
        $(this).siblings().removeClass('on');
        $(this).toggleClass('on');
    });
    //첨부파일 이미지 삭제
    $('.btn_file_del').on('click', function(){
        $(this).closest('li').remove();
    });

});

//새로고침방지
function noReflash( ){
    $('.reviewlist li a').on('click',function(e) {
        e.preventDefault();
    });
    $('a.event_none').on('click', function(e){
        e.preventDefault();
    });

}

//prod_wrap fullpage 일때
// function header(){
//     if($('.prod_wrap').hasClass('fullpage')){
//         $('.layout_header').addClass('fixup');
//         $('.serchwrap').addClass('offsup');
//     }else{
//         $('.layout_header').removeClass('fixup');
//         $('.serchwrap').removeClass('offsup');
//     };

//     $('.serchwrap .serchinp').on('click', function(){
//             $(this).closest('.layout_header').find('.autocomplete_page_wrap').addClass('show');
//     });
// };


// 외부영역 클릭 시 팝업 닫기
$(document).mouseup(function (e){
    var LayerPopup = $(".layer-popup");
        if(LayerPopup.has(e.target).length === 0){
        LayerPopup.hide();
    };
});

function changText(){
    //input의 값
    $('.serchinp').on('propertychange change paste input', function(){
        const $this = $(this);
        const txt = $this.val();
        const autocomplete = $this.parents('.serchwrap').find('.autocomplete');
        const btn_serch = $this.parent('.serchbox').find('.btn_serch');
        if(txt == ''){
            autocomplete.hide();
            btn_serch.hide();
            
        }else{
            autocomplete.show();
            btn_serch.show();
            $this.parent('.serchwrap').removeClass('show');
        };    
    });
};

//검색부분
function serchBox(){
    const btn_find = $('.bnt_find_pop');
    const btn_date = $('.btn_date');
    const datainp = $('.datainp');
    const golftal = $('.golftal');
    const package = $('.package');
    const hall18 = $('.hall18');
    const serchComplete = $('.serchcomplete');
    const autocomplete = $('.autocomplete');
    const serchwrap = $('.serchwrap');
    const calenderwrap = $('.calenderwrap');
    const maphint = $('.maphint p');
    const prodlist = $('.prodlist li');
    const btn_serch = $('.btn_serch');
    const btn_listview = $('.btn_listview');
    const btn_mapview = $('.btn_mapview');
    const prodmapwrap = $('.prodmap_wrap')

        //검색버튼 클릭시
        btn_find.on('click', function(){
            serchwrap.addClass('show reopen');
            autocomplete.hide();
        });

        $('.btn_date').on('click',function(){
            if(serchwrap.hasClass('show')){
                serchwrap.removeClass('show');
                $(this).closest('p').siblings('p').hide();
                calenderwrap.show();
            }else{
                serchwrap.addClass('show reopen');
                $(this).closest('p').siblings('p').show();
                calenderwrap.hide();
                autocomplete.hide();
            }
        });

        $('button[data-btn="calender"]').on('click',function(){
            calenderwrap.toggle();
        });


        //data input click 
        datainp.on('click', function(){
            serchwrap.removeClass('show');
            $(this).closest('p').siblings('p').hide();
            calenderwrap.show(); 
        });

        //golftal click 
        golftal.on('click',function(){
            const txt = $(this).text();
            const count = prodlist.length;
            maphint.show();
            maphint.text(`${txt} 상품 총 ${count}곳이 있습니다.`);
            prodmapwrap.addClass('hintshow wrap_golftal');        
            prodmapwrap.removeClass('wrap_package wrap_hall18 wrap_serchinp map');        
            serchwrap.removeClass('show');
        });

        //package click
        package.on('click',function(){
            const txt = $(this).text();
            const count = prodlist.length;
            maphint.show();
            maphint.text(`${txt} 상품 총 ${count}곳이 있습니다.`);
            prodmapwrap.addClass('hintshow wrap_package');
            prodmapwrap.removeClass('wrap_hall18 wrap_serchinp map wrap_golftal');  
            serchwrap.removeClass('show');
        });

        //hall18 click
        hall18.on('click',function(){
            const txt = $(this).text();
            const count = prodlist.length;
            maphint.show();
            maphint.text(`18홀 상품 총 ${count}곳이 있습니다.`); 
            prodmapwrap.addClass('hintshow wrap_hall18'); 
            prodmapwrap.removeClass('wrap_package wrap_serchinp map wrap_golftal'); 
            serchwrap.removeClass('show');
        });

        //검색클릭 후
        btn_serch.on('click', function(){
            let text =  changText();
            const count = prodlist.length;
            serchComplete.show();
            $(this).parents('.layout_header').find('.serchcontent').hide();
            autocomplete.hide();
            maphint.show();
            maphint.text(`총 ${count}곳이 있습니다.`); 
            prodmapwrap.addClass('hintshow wrap_serchinp');
            prodmapwrap.removeClass('wrap_package wrap_hall18 map wrap_golftal'); 
            serchwrap.removeClass('show');
        });

        //검색후 뒤로가기 클릭시
        $('.serch_back').on('click', function(){
            $('.serchcomplete').hide();
            $('.serchcontent').show();
            $('.calenderwrap').hide();
        });

        //지도 클릭시
        $('.btn_mapview').on('click', function(e){
            e.stopPropagation();
            $(this).parents('.prodmap_wrap').find('.prod_wrap').removeClass('fullpage');
            prodmapwrap.addClass('hintshow map');
            prodmapwrap.removeClass('wrap_package wrap_hall18 wrap_serchinp wrap_golftal'); 
            $('.layout_header').removeClass('fixup');
            $('.serchwrap').removeClass('offsup');
        });
        //목록보기 클릭시
        $('.btn_listview').on('click', function(e){
            e.stopPropagation();
            prodmapwrap.removeClass('hintshow'); 
            $('.prod_wrap ').addClass('fullpage')
            $('.layout_header').addClass('fixup');
            $('.serchwrap').addClass('offsup');
        });

};

//plus / minus 
function counting(type , ths){
    let $input = $(ths).closest('.countbox').find('input[data-neme="count"]');
    let cnt = parseInt($input.val());

    if(type === 'p'){
        $input.val(cnt+1);
        if(cnt >= 0){
            $(ths).closest('.countbox').find('.btn_minus').attr('disabled', false);
        };
    }else{
        if(cnt <= 0){
            $input.val(0);
            
        }else if(cnt <= 1){
            $input.val(cnt-1);
            $(ths).attr('disabled', true);
        }else{
            $input.val(cnt-1);
            $(ths).attr('disabled', false);
        };
    };
};

//팝업 열고 닫기
function layout_popup_dim(){
    $(document).on("click", ".btn_pop_open", function(e) {
        let target = $(this).attr('data-popup');
        let modal = $(`.layout_popup[data-popup="${target}"]`)
        $(document).find(modal).show();

         $('body').addClass('hidden');
    });
    
    //닫기 버튼시
    $('.btn_dim_close').on('click', function(){
        $(this).parents(".layout_popup").hide();
        $('body').removeClass('hidden');
    });
    //기능이 닫기일때
    $('[date-type="btn_dim_close"]').on('click', function(){
        $(this).parents(".layout_popup").hide();
        $('body').removeClass('hidden');
    });
 
    $(".layout_popup .dim").on('click', function(){
        $(this).parents(".layout_popup").hide();
        $('body').removeClass('hidden');
    });
    $(".btn_imgmore.back").on('click', function(){
        $(this).parents(".layout_popup").hide();
        $('body').removeClass('hidden');
    });

    $(".btn_pop_open").on('click', function(){
        $(this).parents(".layout_popup").hide();
        $('body').removeClass('hidden');
    });

      $(document).mouseup(function(e) {
          var LayerPopup = $(".layout_popup");
          if (LayerPopup.has(e.target).length === 0) {
              LayerPopup.hide();
          };
      });

    //이중팝업시에
    // $(`button[data-joinpop="${targets}"]`).click(function(e) {
    //     e.stopImmediatePropagation();
    //     $(this).parents('.layout_popup').hide();
    //  });
}

//작은모달팝업
function popup_small(){
    $(document).on("click", ".btn_open_smallpopup", function(e) {
        let target = $(this).attr('data-popup');
        let modal = $(`.small_popup[data-popup="${target}"]`)
        $(document).find(modal).show();
        $('body').removeClass('hidden');
    });

    $(document).mouseup(function(e) {
        var LayerPopup = $(".small_popup");
        if (LayerPopup.has(e.target).length === 0) {
            LayerPopup.hide();
        };
    });
    // $('.close').on('click', function(){
    //     $(this).parents(".small_popup").hide();
    //     $('body').removeClass('hidden');
    // });
 

    $('.selectlist li button').on('click', function(){
        let $this = $(this);
        let time = $this.text();
        console.log(time);
        $this.closest('.small_popup').hide();
        $this.closest('.small_popup_wrap').find('.changtxt').text(time);
    });
}

//타이머
function timeCount(){
    let time = 180;
    let min = 0;
    let sec = 0;
    $('.btn_resend').on('click', function(){
        $('.cert_number_box').addClass('show');
        $('.another_box > div').hide();
        let x = setInterval(function(){
            min=parseInt(time/60);
            sec=time % 60;
            if(sec == 0 || sec < 10 ){
                $('.timemer').text(`0${min} : 0${sec}`);
            }else{
                $('.timemer').text(`0${min} : ${sec}`);
            };
            time--;

            if(time < 0){
                clearInterval(x);
                $('.timemer').text(`시간경과`);
            }
        }, 1000);
    });

};

$(window).on('scroll', function(){
    let scrolltop = $(window).scrollTop();
    if(scrolltop >= 500 ){
        $('.btn_top').show();
    }else{
        $('.btn_top').hide();
    }
});


// 모바일
let width = $(window).width();
$(window).resize(function(){
    width = $(window).width();

    mapSerchCartShow();
    
});


function mapSerchCartShow(){
  
    if(width <= 1100){ 
        $('.layout_header').addClass('moheader')
        $('.serchwrap .mapserch_input').on('click', function(){
            $(this).closest('.layout_header').addClass('serchstart');
            $('.autocomplete_page_wrap').addClass('show');
        });
        //오른쪽 검색버튼 클릭시 왼쪽 뒤로가기 변경
        $('.rightbox_header .btn_find').on('click', function(){
            $('.leftbox_header .moserch_start_back').hide();
            $('.leftbox_header .serch_back').show();
            $('.autocomplete_page_wrap').removeClass('show');
        });
        //왼쪽 뒤로가기 클릭시 왼쪽 뒤로가기 변경
        $('.leftbox_header .serch_back').on('click', function(){
            $('.leftbox_header .moserch_start_back').show();
            $('.leftbox_header .serch_back').hide();
        });
        
        $('.moserch_start_back').on('click', function(){
            $(this).closest('.layout_header').removeClass('serchstart');
            $('.autocomplete_page_wrap').removeClass('show');
        });
    

        // $('.addround .btn_text').on('click', function(){
        //     console.log('aa');
        //     $('.estimate').addClass('show');
        // });

        $('.addround .btn_fillblack').on('click', function(){
            $(this).parents('.rudaddbox').hide();
            $('.estimate').addClass('show');
            $('body').removeClass('hidden');
        });

        $('.snswrap').addClass('fixed');
        $('.mypage_wrap .mylnb_tapwrap .mylnb').addClass('on');
        $('.layout_header').removeClass('fixup');
        // $('.prodimgwrap > .prodcontent').addClass('swiper view_swiper');
        // $('.prodimgwrap > .prodcontent > .imglist').addClass('swiper-wrapper');

    }else if(width > 1100){
        $('.layout_header').remove('moheader')
        $('.mapserch_input').closest('.layout_header').removeClass('serchstart');
        $('.autocomplete_page_wrap').removeClass('show');
        $('.leftbox_header .serch_back').hide();
        $('.snswrap').removeClass('fixed');
        if($('.prod_wrap').hasClass('fullpage')){
            $('.layout_header').addClass('fixup');
        }else{
            $('.layout_header').removeClass('fixup');
        }
        $('.prodinfo_wrap .right_content.posiRT ').show();

        // $('.prodimgwrap > .prodcontent').removeClass('swiper view_swiper');
        // $('.prodimgwrap > .prodcontent > .imglist').removeClass('swiper-wrapper');
    }
}