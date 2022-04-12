<!DOCTYPE html>
<html lang="ko">

<head id="head">
    <?php
      include '../common/head.php';
?>
</head>
<!-- .hid 추가 상품상세페이지에서 -->
<style>
    .btn_top {bottom: 120px;}
    @media (max-width: 1100px) {
        
        .btn_imgmore,
        .layout_header,
        .layout_footer {
            display: none;
        }

    }
</style>

<body>
    <div class="wrap">
        <!-- header : START -->

        <?php
      include '../common/layout_header.php';
?>
        </header>
        <!-- header : END -->
        <!-- body : START -->
        <div class="layout_body">
            <div class="goods_conteiner pinner">
                <section class="prodimgwrap">
                    <div class="prodcontent clear swiper view_swiper">
                        <ul class="imglist swiper-wrapper">
                            <li class="bigimg swiper-slide"><div style="background-image:url(../images/bg/bg_02.jpg)"></div></li>
                            <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_01.jpg)"></div></li>
                            <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_03.jpg)"></div></li>
                            <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_02.jpg)"></div></li>
                            <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_01.jpg)"></div></li>
                        </ul>
                        <button type="button" class="btn_imgmore btn_lineblack btn_pop_open" data-popup="imgmore">사진 모두보기</button>
                        <div class="swiper-pagination"></div>
                    </div>
                    <a href="/gogogothai" class="btn_back_link"></a>
                    <!-- 모바일에서만 보임 SNS공유 :START -->
                    <div class="poRcen">
                        <button type="button" class="btn_share btn_open_smallpopup" data-popup="snslist"></button>
                        <button type="button" class="btn_scrap type2"></button>
                        <div class="pcpopup">
                            <?php
                                include '../common/layout_snsmodal.php';
                            ?>
                        </div>
                    </div>
                    <!-- 모바일에서만 보임 SNS공유 :END -->
                </section>
                <!-- 상품정보 : END -->
                <section class="prodinfo_wrap">
                    <div class="leftcontent">
                        <div class="box">
                            <ul class="prodlist goods clear">
                                <li>
                                    </p>
                                    <div class="pinfo">
                                        <p class="btwlist"><span class="con"><em
                                                    class="tag2">골프텔</em>태국/카오야이</span><span class="con">2인 1실
                                                1박 기준</span></p>
                                        <h6 class="imgtitle">
                                            <strong>카오야이 파노라마 CC</strong>
                                            <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                    </div>
                                    <!-- PC에서만 보임 SNS공유 :START -->
                                    <div class="poRcen">
                                        <button type="button" class="btn_share btn_open_smallpopup "
                                            data-popup="snslist"></button>
                                        <button type="button" class="btn_scrap type2"></button>
                                        <div class="pcpopup">
                                            <?php
                                                include '../common/layout_snsmodal.php';
                                            ?>
                                        </div>
                                    </div>
                                    <!-- PC에서만 보임 SNS공유 :END -->
                                </li>
                            </ul>
                        </div>
                        <div class="box clear">
                            <ul class="list_type1">
                                <li>
                                    <strong>포함 사항</strong>
                                    <span>왕복 항공 (유류 + TAX 포함)</span>
                                </li>
                                <li>
                                    <strong>불포함 사항</strong>
                                    <span>카트비 (2인 1카트 500바트 18홀 1인 기준)</span>
                                </li>
                                <li>
                                    <strong>골프장 설명</strong>
                                    <span>이번에 소개해드릴 골프장은 푸탈루앙CC 입니다. 파타야 남쪽으로 30분거리에 있습니다. <button type="button"
                                            class="btn_more btn_pop_open" data-popup="golfinfo">더보기</button></span>
                                </li>
                                <li>
                                    <strong>포함 사항</strong>
                                    <span>왕복 항공 (유류 + TAX 포함)</span>
                                </li>
                                <li>
                                    <strong>숙소 설명</strong>
                                    <span>이번에 소개해드릴 골프장은 푸탈루앙CC 입니다. 파타야 남쪽으로 30분거리에 있습니다. <button type="button"
                                            class="btn_more btn_pop_open" data-popup="hotelinfo">더보기</button></span>
                                </li>

                            </ul>
                            <ul class="list_type1">
                                <li>
                                    <strong>부대비용</strong>
                                    <span>마사지요금, 카트요금, 싱글룸 비용, 새탁비용, 픽업&샌딩 비용<button type="button" class="btn_more btn_pop_open"
                                            data-popup="budeainfo">더보기</button></span>
                                </li>
                                <li>
                                    <strong>편의시설</strong>
                                    <span>이번에 소개해드릴 골프장은 푸탈루앙CC 입니다. 파타야 남쪽으로 30분거리에 있는 36홀 골프장...</span>
                                </li>
                                <li>
                                    <button type="button" class="btn_lineblack btn_pop_open"
                                        data-popup="facilities">편의시설 23개 모두
                                        보기</button>
                                </li>
                            </ul>
                        </div>
                        <div class="box clear">
                            <h3 class="title_sec">위치보기</h3>
                            <div class="minimap">
                                <div class="maparea">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.1830731112207!2d127.04680020722505!3d37.52286533746391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4750b35278b%3A0xfec0a7d2dcecee42!2z7LyA7J207Iqk656pIEtBQ0VMQUI!5e0!3m2!1sko!2skr!4v1647328938878!5m2!1sko!2skr"
                                        width="100%" height="220" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                                <p>영문주소 영문주소 영문주소 영문주소 영문주소 영문주소 <button type="button" class="btn_more btn_pop_open"
                                        data-popup="mapbigviews">위치보기</button></p>
                            </div>
                            <ul class="list_type1">
                                <li>
                                    <strong>여행 일과</strong>
                                    <span>이번에 소개해드릴 골프장 푸탈루앙 입니다. <button type="button" class="btn_more btn_pop_open"
                                            data-popup="planinfo">더보기</button></span>
                                </li>
                                <li>
                                    <strong>이용 규칙</strong>
                                    <span>이번에 소개해드릴 골프장 푸탈루앙 입니다. <button type="button" class="btn_more btn_pop_open"
                                            data-popup="ruleinfo">더보기</button></span>
                                </li>
                                <li>
                                    <strong>환불정책</strong>
                                    <span>이번에 소개해드릴 골프장 푸탈루앙 입니다. <button type="button" class="btn_more btn_pop_open"
                                            data-popup="paymentinfo">더보기</button></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right_content posiRT ">
                        <form action="">
                            <!-- .step1 모바일에서 안보임 -->
                            <div class="step step1">
                                <span>요금을 확인하려면 일정을 선택하세요.</span>
                                <p class="serchbox"><button type="button" class="btn_date"></button><input class="datainp" type="text"
                                        autocomplete="on" placeholder="날짜를 선택하세요" readonly></p>
                                    <!-- 골프텔, 패키지, 18홀 해당에 맞는 달력(.step2) 후 (.step3) 보여야함 -->
                                <button type="button" class="btn_goods_estimate btn full btn_fillblue">견적내기</button>
                            </div>
                            <div class="step step2">
                                <!-- 여기는 달력 -->
                                <div>
                                    
                                </div>
                                <ul class="btnwrapbtw addround fixed_btn_wrap ">
                                    <li><button type="button" class="btn_data_reset btn btn_text" date-type="close">선택초기화</button></li>
                                    <li><button type="button" class="btn_data_save btn btn_fillblue sm">저장</button></li>
                                </ul>
                            </div>
                            <!-- 골프텔 / 호텔골프 예약 : START-->
                            <div class="step step3" data-estmpop="golf_estimate">
                                <div class="pop_header">
                                    <h3 class="title_modal"><button type="button" class="btn_back"></button>예약하기</h3>
                                </div>
                                <ul class="prodlist type3 clear">
                                    <li>
                                        <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        </p>
                                        <div class="pinfo">
                                            <p class="btwlist"><span class="con"><em class="tag2">골프텔</em>태국/카오야이</span></p>
                                            <h6 class="imgtitle">
                                                <strong>카오야이 파노라마 CC</strong>
                                                <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                            </h6>
                                            <span class="desc">4월 21일 ~ 4월 27일, 6박</span>

                                        </div>
                                    </li>
                                </ul>
                                <div class="ordercontain">
                                    <dl>
                                        <dt class="titlebox">2인 1실</dt>
                                        <dd class="countbox poRcen btwlist">
                                            <span class="pricebox con">900,000원</span>
                                            <div class="countbox con">
                                                <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                <input type="number" value="1" data-neme="count" readonly>
                                                <button type="button" class="btn_minus" onclick="counting('m',this);"></button>
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="titlebox">PCR검사 2인 1실</dt>
                                        <dd class="countbox poRcen btwlist">
                                            <span class="pricebox con">900,000원</span>
                                            <div class="countbox con">
                                                <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                <input type="number" value="1" data-neme="count" readonly>
                                                <button type="button" class="btn_minus" onclick="counting('m',this);"></button>
                                            </div>
                                        </dd>
                                    </dl>
                                    <div class="descbox totalcalc">
                                        <strong>총 합계 (몇명)</strong>
                                        <strong>900,000원</strong>
                                    </div>
                                    <div class="btnwrap">
                                        <a href="../order/cart.php" type="button" class="btn btn_lineblue">장바구니</ㅁ>
                                        <a href="../order/payment.php" class="btn btn_fillblue">결제하기</a>
                                    </div>
                                </div>
                            </div>
                            <!-- 골프텔 / 호텔골프 예약 : END-->
                            <!-- 18홀 : START-->
                            <div class="step step3" data-estmpop="hole18_estimate">
                                <div class="pop_header">
                                    <h3 class="title_modal"><button type="button" class="btn_back"></button>예약하기</h3>
                                </div>
                                <ul class="prodlist type3 clear">
                                    <li>
                                        <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        </p>
                                        <div class="pinfo">
                                            <p class="btwlist"><span class="con"><em class="tag2">18홀</em>태국/카오야이</span></p>
                                            <h6 class="imgtitle">
                                                <strong>카오야이 파노라마 CC</strong>
                                                <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                            </h6>
                                            <span class="desc">4월 21일 ~ 4월 27일, 6박</span>

                                        </div>
                                    </li>
                                </ul>
                                <div class="ordercontain">
                                    <dl>
                                        <dt class="titlebox">인원 수</dt>
                                        <dd class="countbox poRcen btwlist">
                                            <span class="pricebox con">900,000원</span>
                                            <div class="countbox con">
                                                <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                <input type="number" value="1" data-neme="count" readonly>
                                                <button type="button" class="btn_minus" onclick="counting('m',this);"></button>
                                            </div>
                                        </dd>
                                    </dl>
                                    <!-- 시간 예약 박스 : START -->
                                    <div class="reservebox">
                                        <div class="rserbox btwlist">
                                            <p class="con">
                                                <span>+ 티업 희망 시간대</span>
                                                <em>1시간 단위로 설정가능합니다</em>
                                            </p>
                                            <button type="button" class="btn_rser con">선택없음</button>
                                        </div>
                                        <div class="timelist_pop layer-popup">
                                            <ul class="timelist scrollcustom">
                                                <li><button type="button" >06:00</button></li>
                                                <li><button type="button" >07:00</button></li>
                                                <li><button type="button" >08:00</button></li>
                                                <li><button type="button" >09:00</button></li>
                                                <li><button type="button" >10:00</button></li>
                                                <li><button type="button" >11:00</button></li>
                                                <li><button type="button" >12:00</button></li>
                                                <li><button type="button" >13:00</button></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- 시간 예약 박스 : END -->
                                    <div class="descbox totalcalc">
                                        <strong>총 합계 (몇명)</strong>
                                        <strong>900,000원</strong>
                                    </div>
                                    <div class="btnwrap">
                                        <a href="../order/cart.php" class="btn btn_lineblue">장바구니</a>
                                        <a href="../order/payment.php" class="btn btn_fillblue">결제하기</a>
                                    </div>
                                </div>
                            </div>
                            <!-- 18홀 : END-->
                            <!-- 패키지 상세: END-->
                            <div class="step step3" data-estmpop="pakage_estimate">
                                <div class="pop_header">
                                    <h3 class="title_modal"><button type="button" class="btn_back"></button>예약하기</h3>
                                </div>
                                <ul class="prodlist type3 clear">
                                    <li>
                                        <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        </p>
                                        <div class="pinfo">
                                            <p class="btwlist"><span class="con"><em class="tag2">골프텔</em>태국/카오야이</span></p>
                                            <h6 class="imgtitle">
                                                <strong>카오야이 파노라마 CC</strong>
                                                <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                            </h6>
                                            <span class="desc">4월 21일 ~ 4월 27일, 6박</span>

                                        </div>
                                    </li>
                                </ul>
                                <div class="ordercontain">
                                    <dl>
                                        <dt class="titlebox">2인 1실</dt>
                                        <dd class="countbox poRcen btwlist">
                                            <span class="pricebox con">900,000원</span>
                                            <div class="countbox con">
                                                <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                <input type="number" value="1" data-neme="count" readonly>
                                                <button type="button" class="btn_minus" onclick="counting('m',this);"></button>
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="titlebox">PCR검사 2인 1실</dt>
                                        <dd class="countbox poRcen btwlist">
                                            <span class="pricebox con">900,000원</span>
                                            <div class="countbox con">
                                                <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                <input type="number" value="1" data-neme="count" readonly>
                                                <button type="button" class="btn_minus" onclick="counting('m',this);"></button>
                                            </div>
                                        </dd>
                                    </dl>
                                    <div class="descbox">
                                        <h4 class="title_con">옵션 선택</h4>
                                        <!-- 추가되었을시 보이는 옵션 : START -->
                                        <ul class="rudaddendbox">
                                            <li>
                                                <dl>
                                                    <dt class="titlebox"><span>2인 1실</span><em>320,000원</em></dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">900,000원</span>
                                                        <div class="countbox con">
                                                            <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count" readonly>
                                                            <button type="button" class="btn_minus"
                                                                onclick="counting('m',this);"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <!-- 시간 예약 박스 : START -->
                                                <div class="reservebox">
                                                    <div class="rserbox btwlist">
                                                        <p class="con">
                                                            <span>+ 티업 희망 시간대</span>
                                                            <em>1시간 단위로 설정가능합니다</em>
                                                        </p>
                                                        <button type="button" class="btn_rser con">선택없음</button>
                                                    </div>
                                                    <div class="timelist_pop layer-popup">
                                                        <ul class="timelist scrollcustom">
                                                            <li><button type="button" >06:00</button></li>
                                                            <li><button type="button" >07:00</button></li>
                                                            <li><button type="button" >08:00</button></li>
                                                            <li><button type="button" >09:00</button></li>
                                                            <li><button type="button" >10:00</button></li>
                                                            <li><button type="button" >11:00</button></li>
                                                            <li><button type="button" >12:00</button></li>
                                                            <li><button type="button" >13:00</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- 시간 예약 박스 : END -->
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="titlebox"><span>2인 1실</span><em>320,000원</em></dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">900,000원</span>
                                                        <div class="countbox con">
                                                            <button type="button" class="btn_plus" onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count" readonly>
                                                            <button type="button" class="btn_minus"
                                                                onclick="counting('m',this);"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <!-- 시간 예약 박스 : START -->
                                                <div class="reservebox">
                                                    <div class="rserbox btwlist">
                                                        <p class="con">
                                                            <span>+ 티업 희망 시간대</span>
                                                            <em>1시간 단위로 설정가능합니다</em>
                                                        </p>
                                                        <button type="button" class="btn_rser con">선택없음</button>
                                                    </div>
                                                    <div class="timelist_pop layer-popup">
                                                        <ul class="timelist scrollcustom">
                                                            <li><button type="button" >06:00</button></li>
                                                            <li><button type="button" >07:00</button></li>
                                                            <li><button type="button" >08:00</button></li>
                                                            <li><button type="button" >09:00</button></li>
                                                            <li><button type="button" >10:00</button></li>
                                                            <li><button type="button" >11:00</button></li>
                                                            <li><button type="button" >12:00</button></li>
                                                            <li><button type="button" >13:00</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- 시간 예약 박스 : END -->
                                            </li>
                                        </ul>
                                        <!-- 추가되었을시 보이는 옵션 : end -->
                                        <button type="button" class="btn_roundadd full btn_lineblack">라운드추가</button>
                                        <!-- 라운드추가팝업 : START -->
                                        <div class="rudaddbox step reset_rudadd">
                                            <h3 class="title_pop">라운드 추가</h3>
                                            <!-- 추가리스트 : START -->
                                            <div class="roundlist">
                                                <ul class="prodlist type3 clear">
                                                    <li>
                                                        <p class="pimgbox"
                                                            style="background-image: url(../images/bg/bg_01.jpg);">
                                                        </p>
                                                        <div class="pinfo">
                                                            <p class="btwlist"><span class="con"><em
                                                                        class="tag2">골프텔</em>태국/카오야이</span></p>
                                                            <h6 class="imgtitle">
                                                                <strong>카오야이 파노라마 CC</strong>
                                                                <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                                            </h6>
                                                            <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="ordercontain">
                                                    <dl>
                                                        <dt class="titlebox">인원 수</dt>
                                                        <dd class="countbox poRcen btwlist">
                                                            <span class="pricebox con">900,000원</span>
                                                            <div class="countbox con">
                                                                <button type="button" class="btn_plus"
                                                                    onclick="counting('p',this);"></button>
                                                                <input type="number" value="1" data-neme="count" readonly>
                                                                <button type="button" class="btn_minus"
                                                                    onclick="counting('m',this);"></button>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                    <div class="reservebox">
                                                        <div class="rserbox btwlist">
                                                            <p class="con">
                                                                <span>+ 티업 희망 시간대</span>
                                                                <em>1시간 단위로 설정가능합니다</em>
                                                            </p>
                                                            <button type="button" class="btn_rser con">선택없음</button>
                                                        </div>
                                                        <div class="timelist_pop layer-popup">
                                                            <ul class="timelist scrollcustom">
                                                                <li><button type="button" >06:00</button></li>
                                                                <li><button type="button" >07:00</button></li>
                                                                <li><button type="button" >08:00</button></li>
                                                                <li><button type="button" >09:00</button></li>
                                                                <li><button type="button" >10:00</button></li>
                                                                <li><button type="button" >11:00</button></li>
                                                                <li><button type="button" >12:00</button></li>
                                                                <li><button type="button" >13:00</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="msg_infoico">
                                                        <strong class="title">위치정보</strong>
                                                        <p class="text">카오야이 파노라마CC에서 1km 거리 <button type="button" class="btn_pop_open"
                                                                data-popup="mapbigview">
                                                                더보기</button></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="roundlist">
                                                <ul class="prodlist type3 clear">
                                                    <li>
                                                        <p class="pimgbox"
                                                            style="background-image: url(../images/bg/bg_01.jpg);">
                                                        </p>
                                                        <div class="pinfo">
                                                            <p class="btwlist"><span class="con"><em
                                                                        class="tag2">골프텔</em>태국/카오야이</span></p>
                                                            <h6 class="imgtitle">
                                                                <strong>카오야이 파노라마 CC</strong>
                                                                <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                                            </h6>
                                                            <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="ordercontain">
                                                    <dl>
                                                        <dt class="titlebox">인원 수</dt>
                                                        <dd class="countbox poRcen btwlist">
                                                            <span class="pricebox con">900,000원</span>
                                                            <div class="countbox con">
                                                                <button type="button" class="btn_plus"
                                                                    onclick="counting('p',this);"></button>
                                                                <input type="number" value="1" data-neme="count" readonly>
                                                                <button type="button" class="btn_minus"
                                                                    onclick="counting('m',this);"></button>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                    <div class="reservebox">
                                                        <div class="rserbox btwlist">
                                                            <p class="con">
                                                                <span>+ 티업 희망 시간대</span>
                                                                <em>1시간 단위로 설정가능합니다</em>
                                                            </p>
                                                            <button type="button" class="btn_rser con">선택없음</button>
                                                        </div>
                                                        <div class="timelist_pop layer-popup">
                                                            <ul class="timelist scrollcustom">
                                                                <li><button type="button" >06:00</button></li>
                                                                <li><button type="button" >07:00</button></li>
                                                                <li><button type="button" >08:00</button></li>
                                                                <li><button type="button" >09:00</button></li>
                                                                <li><button type="button" >10:00</button></li>
                                                                <li><button type="button" >11:00</button></li>
                                                                <li><button type="button" >12:00</button></li>
                                                                <li><button type="button" >13:00</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="msg_infoico">
                                                        <strong class="title">위치정보</strong>
                                                        <p class="text">카오야이 파노라마CC에서 1km 거리 <button type="button" class="btn_pop_open"
                                                                data-popup="mapbigview">
                                                                더보기</button></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 추가리스트 : ENd -->
                                            <div class="ordercontain ma24t">
                                                <div class="descbox totalcalc">
                                                    <strong>총 합계 (몇명)</strong>
                                                    <strong>900,000원</strong>
                                                </div>
                                                <ul class="btnwrapbtw addround fixed_btn_wrap ">
                                                    <li><button type="button" class="btn btn_text" date-type="close">건너뛰기</button></li>
                                                    <li><button type="button" class="btn btn_fillblack sm">추가하기</button></li>
                                                </ul>
                                            </div>
                                            <button type="button" button="button" class="close roundadd_close"></button>
                                        </div>
                                        <!-- 라운드추가팝업 : END -->

                                    </div> 
                                    <div class="descbox totalcalc">
                                        <strong>총 합계 (몇명)</strong>
                                        <strong>900,000원</strong>
                                    </div>
                                    <div class="btnwrap">
                                        <a href="../order/cart.php" class="btn btn_lineblue">장바구니</a>
                                        <a href="../order/payment.php" class="btn btn_fillblue">결제하기</a>
                                    </div>
                                </div>
                            </div>
                            <!-- 패키지 상세 : START-->
                        </form>
                    </div>
                </section>
                <!-- 상품정보 : END -->

                <!-- 함께보면 좋은 백렌트, 픽업&샌딩 : START -->
                <section class="recommend_wrap linetop">
                    <h3 class="title_sec">백렌트, 픽업&샌딩</h3>
                    <div class="prodcontent swiper prod_swiper">
                        <ul class="prodlist swiper-wrapper clear">
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/car.png);">
                                        <span class="tag">백렌트</span>
                                    </p>
                                    <div class="pinfo">
                                        <h6 class="imgtitle">
                                            <strong>백렌트(18홀 왕복)</strong>
                                        </h6>
                                        <span class="desc">선택한 18홀 왕복하는 렌트차량</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/car.png);">
                                        <span class="tag">백렌트</span>
                                    </p>
                                    <div class="pinfo">
                                        <h6 class="imgtitle">
                                            <strong>백렌트(18홀 왕복)</strong>
                                        </h6>
                                        <span class="desc">선택한 18홀 왕복하는 렌트차량</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/car.png);">
                                        <span class="tag">백렌트</span>
                                    </p>
                                    <div class="pinfo">
                                        <h6 class="imgtitle">
                                            <strong>백렌트(18홀 왕복)</strong>
                                        </h6>
                                        <span class="desc">선택한 18홀 왕복하는 렌트차량</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/car.png);">
                                        <span class="tag">백렌트</span>
                                    </p>
                                    <div class="pinfo">
                                        <h6 class="imgtitle">
                                            <strong>백렌트(18홀 왕복)</strong>
                                        </h6>
                                        <span class="desc">선택한 18홀 왕복하는 렌트차량</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/car.png);">
                                        <span class="tag">백렌트</span>
                                    </p>
                                    <div class="pinfo">
                                        <h6 class="imgtitle">
                                            <strong>백렌트(18홀 왕복)</strong>
                                        </h6>
                                        <span class="desc">선택한 18홀 왕복하는 렌트차량</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/car.png);">
                                        <span class="tag">픽업&샌딩</span>
                                    </p>
                                    <div class="pinfo">
                                        <h6 class="imgtitle">
                                            <strong>픽업&샌딩 6인승 벤</strong>
                                        </h6>
                                        <span class="desc">원하는 위치로 픽업샌딩 가능한 상품</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- 함께보면 좋은 백렌트, 픽업&샌딩 : END -->

                <!-- 함께보면 좋은 골프장 & 숙소 : START -->
                <section class="recommend_wrap linetop">
                    <h3 class="title_sec">함께 보면 좋은 골프장 & 숙소</h3>
                    <div class="prodcontent swiper prod_swiper">
                        <ul class="prodlist clear swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        <span class="tag">골프텔</span>
                                    </p>
                                    <div class="pinfo">
                                        <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박
                                                기준</span></p>
                                        <h6 class="imgtitle">
                                            <strong>카오야이 파노라마 CC</strong>
                                            <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                        <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        <span class="tag">골프텔</span>
                                    </p>
                                    <div class="pinfo">
                                        <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박
                                                기준</span></p>
                                        <h6 class="imgtitle">
                                            <strong>카오야이 파노라마 CC</strong>
                                            <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                        <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        <span class="tag">골프텔</span>
                                    </p>
                                    <div class="pinfo">
                                        <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박
                                                기준</span></p>
                                        <h6 class="imgtitle">
                                            <strong>카오야이 파노라마 CC</strong>
                                            <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                        <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        <span class="tag">골프텔</span>
                                    </p>
                                    <div class="pinfo">
                                        <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박
                                                기준</span></p>
                                        <h6 class="imgtitle">
                                            <strong>카오야이 파노라마 CC</strong>
                                            <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                        <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- 함께보면 좋은 골프장 & 숙소 : END -->

                <!-- 팝업들... -->
                <!-- 후기 : START -->
                <section class="review_wrap linetop">
                    <span class="title_sec">후기 7건</span>
                    <div class="reviewcontent swiper review_swpiper">
                        <!-- 4개만 나오게 해주세요! 팝업 리뷰에서 다 보여줄꺼에요 -->
                        <ul class="reviewlist swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="">
                                    <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                            class="date con">2021.12.30
                                            23:53</em></span>
                                    <p class="text txthide4">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                        다녀왔습니다.</p>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                            class="date con">2021.12.30
                                            23:53</em></span>
                                    <p class="text txthide4">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                        다녀왔습니다.</p>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                            class="date con">2021.12.30
                                            23:53</em></span>
                                    <p class="text txthide4">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                        다녀왔습니다.</p>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="">
                                    <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                            class="date con">2021.12.30
                                            23:53</em></span>
                                    <p class="text txthide4">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                        다녀왔습니다.</p>
                                </a>
                            </li>
                        </ul>
                        <button type="button" class="btn_reviwmore btn_lineblack btn_pop_open" data-popup="reviewmore">후기 23개 모두
                            보기</button>
                    </div>
                </section>
                <!-- 후기 : END -->
            </div>
        </div>
        <article class="estimate">
            <p><strong>300,000원 ~<i> / 인</i></strong><span class="redate">희망날짜선택</span></p>
            <div class="poRcen">
                <!-- pc 사용 / 선택안햇을때 -->
                <div class="bnt_wrap step1  pc">
                    <button type="button" class="btn_move btn btn_fillblue">견적내기</button>
                </div>

                <div class="bnt_wrap step1mo mo">
                    <!-- 모바일 버튼 : START -->
                    <button type="button" class="btn_estm_pay btn btn_fillblue btn_estm_popup" data-estmpop="hole18_estimate">견적내기</button>
                    <!-- 18홀 견적 버튼 -->
                    <button type="button" class="btn_estm_pay btn btn_fillblue btn_estm_popup" data-estmpop="golf_estimate">견적내기</button>
                    <!-- 골프 버튼 -->
                    <button type="button" class="btn_estm_pay btn btn_fillblue btn_estm_popup" data-estmpop="pakage_estimate">견적내기</button>
                    <!-- 모바일 버튼 : END-->
                </div>

                <!-- pc:모든것을 다 선택 했을때 
                     mo: 견적내기 클릭시 바로 바뀌어야함-->
                <div class="bnt_wrap step2">
                    <a href="../order/cart.php" class="btn btn_lineblue">장바구니</a>
                    <a href="../order/payment.php" class="btn btn_fillblue">결제하기</a>
                </div> 
            </div>
        </article>
        <button type="button" class="btn_top btn_move"></button>
    </div>

    <!-- 리뷰팝업 -->
    <div class="layout_popup center_modal" data-popup="reviewmore">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">후기 10개</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <ul class="reviewlist">
                        <li>
                            <a href="">
                                <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                        class="date con">2021.12.30
                                        23:53</em></span>
                                <p class="text">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                    다녀왔습니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                        class="date con">2021.12.30
                                        23:53</em></span>
                                <p class="text">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                    다녀왔습니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                        class="date con">2021.12.30
                                        23:53</em></span>
                                <p class="text">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                    다녀왔습니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                        class="date con">2021.12.30
                                        23:53</em></span>
                                <p class="text">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                    다녀왔습니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="btwlist"><strong class="name con">FDSS12님 후기</strong><em
                                        class="date con">2021.12.30
                                        23:53</em></span>
                                <p class="text">숙소깨끗하고 이불도 푹신해요 골프장도 좋은데 골린이한테 어려웠어요. 골프 예약도 순조롭고 깔끔하게 이루어져서 정말 알차게
                                    다녀왔습니다.</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pop_foot">

                </div>
            </div>
        </div>
    </div>

    <!-- 골프장 -->
    <div class="layout_popup center_modal" data-popup="golfinfo">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">골프장 설명</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <h4 class="tit_info">설명1</h4>
                    <p class="txt">골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장
                        설명입니다. 골프장
                        설명입니다. 골프장 설명입니다.
                        골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장
                        설명입니다. 골프장
                        설명입니다.골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다.

                        골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. </p>
                    <h4 class="tit_info">설명2</h4>
                    <p class="txt">골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장
                        설명입니다. 골프장
                        설명입니다. 골프장 설명입니다.
                        골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장
                        설명입니다. 골프장
                        설명입니다.골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다.

                        골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. 골프장 설명입니다. </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 숙소  -->
    <div class="layout_popup center_modal" data-popup="hotelinfo">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">숙소이용규칙</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <h4 class="tit_info">설명1</h4>
                    <p class="txt">숙소 설명 </p>

                </div>
            </div>
        </div>
    </div>

    <!-- 여행일과  -->
    <div class="layout_popup center_modal" data-popup="planinfo">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">여행일정</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <h4 class="tit_info">설명1</h4>
                    <p class="txt">여행 일과 </p>

                </div>
            </div>
        </div>
    </div>

    <!-- 이용 규칙  -->
    <div class="layout_popup center_modal" data-popup="ruleinfo">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">이용 규칙</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <h4 class="tit_info">설명1</h4>
                    <p class="txt">이용 규칙 </p>

                </div>
            </div>
        </div>
    </div>

    <!-- 환불정책  -->
    <div class="layout_popup center_modal" data-popup="paymentinfo">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">환불정책</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    cv
                    <p class="txt">환불정책 </p>

                </div>
            </div>
        </div>
    </div>

    <!-- 부대비용  -->
    <div class="layout_popup center_modal" data-popup="budeainfo">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">부대비용</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    cv
                    <p class="txt">부대비용 </p>

                </div>
            </div>
        </div>
    </div>

    <!-- 편의시설  -->
    <div class="layout_popup center_modal" data-popup="facilities">
        <div class="dim"></div>
        <div class="layout_contain">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal">편의시설</h3><button type="button" class="close btn_dim_close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <h4 class="tit_info">설명1</h4>
                    <ul class="btwlist">
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다.설명입니다.
                            설명입니다. 설명입니다.
                            설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다.</li>
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다.
                            설명입니다 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.</li>
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다.
                            설명입니다 설명입니다. 설명입니다. 설명입니다. 설명입니다.</li>
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다.</li>
                    </ul>

                    <h4 class="tit_info">설명1</h4>
                    <ul class="btwlist">
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다.설명입니다.
                            설명입니다. 설명입니다.
                            설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다.</li>
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다.
                            설명입니다 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.</li>
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다. 설명입니다.
                            설명입니다.설명입니다. 설명입니다.
                            설명입니다 설명입니다. 설명입니다. 설명입니다. 설명입니다.</li>
                        <li class="con">설명입니다. 설명입니다. 설명입니다.설명입니다. 설명입니다. 설명입니다.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- 지도 더보기 -->
    <div class="layout_popup center_modal mappop" data-popup="mapbigview">
        <div class="dim"></div>
        <div class="layout_contain scrollcustom" style="padding:20px">
                <div class="pop_header">
                   <button type="button" class="close btn_dim_close"></button>
                </div>
            <div class="layout_box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.1830731112207!2d127.04680020722505!3d37.52286533746391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4750b35278b%3A0xfec0a7d2dcecee42!2z7LyA7J207Iqk656pIEtBQ0VMQUI!5e0!3m2!1sko!2skr!4v1647328938878!5m2!1sko!2skr"
                    width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- 사진 모아보기 -->
    <div class="layout_popup center_modal imgmorepop" data-popup="imgmore">
        <div class="dim"></div>
        <div class="layout_contain scrollcustom">
            <div class="layout_box">
                <div class="prodcontent clear">
                    <ul class="imglist">
                        <li class="bigimg swiper-slide"><div style="background-image:url(../images/bg/bg_02.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_01.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_03.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_02.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_01.jpg)"></div></li>
                        <li class="bigimg swiper-slide"><div style="background-image:url(../images/bg/bg_02.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_01.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_03.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_02.jpg)"></div></li>
                        <li class="swiper-slide"><div style="background-image:url(../images/bg/bg_01.jpg)"></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <button type="button" class="btn_imgmore btn_lineblack back">이전으로</button>
    </div>
    <footer class="layout_footer">
        <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>
<div class="mopopup">
    <?php
        include '../common/layout_snsmodal.php';
    ?>
</div>
</html>
<script>
    $(window).on('scroll', function () {
        let scrolltop = $(window).scrollTop(); 
        let recommendwrap = $('.recommend_wrap').offset().top;
        if (scrolltop >= recommendwrap) {
            $('.estimate').addClass('show');
        } else {
            $('.estimate').removeClass('show');
        }
    });
    // 모바일
let width2 = $(window).width();
$(window).resize(function(){
    width2 = $(window).width();

    mapSerchCartShow();
    
});


function mapSerchCartShow(){
  
    if(width2 <= 1100){ 
        $('.estimate').addClass('impot');
    if($('.step').hasClass('show')){
        $('.estimate').addClass('show');
        $('body').addClass('hidden');
    }else{
        $('.estimate').removeClass('show');
        $('body').removeClass('hidden');
    };
            //라운드 추가시 클릭시
        $('.btn_roundadd').on('click', function(){
            $('.estimate').hide();
        });
       //라운드 추가시 닫기 눌렀을때
    $('.roundadd_close').on('click', function(){
        $(this).parents(".reset_rudadd").hide();
        $('.estimate').show();
        $('body').removeClass('hidden');
    });
    $('.btnwrapbtw .btn_text').on('click', function(){
        $(this).parents(".reset_rudadd").hide();
        $('.estimate').show();
        $('body').removeClass('hidden');
    });

    // $('.btnwrapbtw .btn_text').on('click', function(){
    //     $('.reset_rudadd').parents('.right_content').hide();
    //     $(this).parents(".reset_rudadd").hide();
    //     $('body').removeClass('hidden');
    //     $('.bnt_wrap.step1mo').removeClass('hidn');
    //     $('.bnt_wrap.step1').removeClass('hidn');
    //     $('.bnt_wrap.step2').hide();
    // });

    }else if(width2 > 1100){
        $('.estimate').removeClass('impot');
        $('body').removeClass('hidden');
    }
}
</script>