<!DOCTYPE html>
<html lang="ko">

<head id="head">
<?php
      include '../common/head.php';
?>
</head>
<!-- .hid 추가 상품상세페이지에서 -->

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
            <div class="body_wrap">
                <div class="pinner">
                    <h2 class="title_page">마이페이지</h2>
                    <section class="mypage_wrap clear">
                        <div class="mypage_content reservation_content">
                            <h3 class="title_content">예약내역 0개</h3>
                            <!-- 아무것도 없을시에  -->
                            <!-- <ul class="cart_list empty ma16t">
                                <li>
                                    <span class="txt bold">예약내역 없음</span>
                                    <spanc class="txt desc">예약된 내역이 없습니다.</spanc>
                                </li>
                            </ul> -->
                            <!-- [/] -->
                            <div class="btwlist">
                                <div class="linecontent con w50">
                                    <ul class="prodlist type3 mypagecon clear">
                                        <li>
                                            <a href="javascript:;" class="relative btn_pop_open"
                                                data-popup="reserv_comfirm_detail">
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
                                                    <span class="tag3 blackline">예약완료</span>
                                                </div>
                                            </a>
                                            <div class="list_box type2">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>예약날짜</p>
                                                        <p>22년 6월 8일 ~ 6월 12일, 6박</p>
                                                    </li>
                                                    <li>
                                                        <p>예약번호</p>
                                                        <p>6510392857</p>
                                                    </li>
                                                    <li>
                                                        <p>추가정보</p>
                                                        <p><button type="button" class="undul btn_pop_open" data-popup="review_write">후기작성></button></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="linecontent con w50">
                                    <ul class="prodlist type3 mypagecon clear">
                                        <li>
                                            <a href="" class="relative btn_pop_open event_none"
                                                data-popup="reserv_inquiry_detail">
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
                                                    <span class="tag3 blue">예약문의</span>
                                                </div>
                                            </a>
                                            <div class="list_box type2">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>예약번호</p>
                                                        <p>6510392857</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="linecontent con w50">
                                    <ul class="prodlist type3 mypagecon clear">
                                        <li>
                                            <a href="" class="relative btn_pop_open event_none"
                                                data-popup="reserv_detail">
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
                                                    <span class="tag3">예약확정</span>
                                                </div>
                                            </a>
                                            <div class="list_box type2">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>예약날짜</p>
                                                        <p>22년 6월 8일 ~ 6월 12일, 6박</p>
                                                    </li>
                                                    <li>
                                                        <p>예약번호</p>
                                                        <p>6510392857</p>
                                                    </li>
                                                    <li>
                                                        <p>추가정보</p>
                                                        <p><button type="button" class="undul btn_pop_open" data-popup="review_write">후기작성></button></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="linecontent con w50">
                                    <ul class="prodlist type3 mypagecon clear">
                                        <li>
                                            <a href="" class="relative btn_pop_open event_none"
                                                data-popup="reserv_inquiry_detail">
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
                                                    <span class="tag3 blue">예약문의</span>
                                                </div>
                                            </a>
                                            <div class="list_box type2">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>예약번호</p>
                                                        <p>6510392857</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                            include '../common/layout_mypage_lnb.php';
                        ?>
                    </section>
                </div>
            </div>
        </div>

        <!-- 예약&결제 상세 : START -->
        <div class="layout_popup center_modal detailpop" data-popup="reserv_detail">
            <div class="dim"></div>
            <div class="layout_contain wid896">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal"><span class="tag3">예약확정</span> 예약&결제 상세</h3><button type="button" class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <ul class="btwlist">
                            <li class="con">
                                <div class="step step3">
                                    <div class="box">
                                        <ul class="prodlist type3 mypagecon clear">
                                            <li>
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);">
                                                </p>
                                                <div class="pinfo">
                                                    <!-- tag2에 골프텔, 호텔, 18홀, 패키지 해당에 해당하는 문구변경-->
                                                    <p class="btwlist"><span class="con ma0"><em
                                                                class="tag2">호텔</em>태국/카오야이</span>
                                                    </p>
                                                    <h6 class="imgtitle">
                                                        <strong>카오야이 파노라마 CC</strong>
                                                        <strong>호텔 (스탠다드룸)</strong>
                                                    </h6>
                                                    <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- 호텔 , 패키지, 골프텔 만 나옴 -->
                                        <div class="ordercontain payoption">
                                            <dl>
                                                <dt class="titlebox">2인 1실</dt>
                                                <dd class="countbox poRcen btwlist">
                                                    <span class="pricebox con">150,000원</span>
                                                    <div class="pricebox con">
                                                        2개
                                                    </div>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt class="titlebox">2인 1실</dt>
                                                <dd class="countbox poRcen btwlist">
                                                    <span class="pricebox con">100,000원</span>
                                                    <div class="pricebox con">
                                                        1개
                                                    </div>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt class="titlebox">PCR검사 2인 1실</dt>
                                                <dd class="countbox poRcen btwlist">
                                                    <span class="pricebox con">150,000원</span>
                                                    <div class="pricebox con">
                                                        1개
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- 호텔 , 패키지, 골프텔 만 여기까지 나옴 -->
                                        <p class="btwlist pricecon"><span class="con">합계 (4명 / PCR 4명)</span><span
                                                class="con">150,000원</span></p>
                                    </div>


                                    <div class="ordercontain">
                                        <div class="descbox totalcalc">
                                            <strong>총 합계 (몇명)</strong>
                                            <strong>900,000원</strong>
                                        </div>
                                    </div>
                                    <div class="msg_infoico">
                                        <strong class="title">환불정책</strong>
                                        <p class="text">5월 25일 오후 3:00 전에 예약을 취소하면 요금 전액이 환불됩니다. 그 이후 6월 7일 오후 3:00 전에 예약을 취소하면 서비스 수수료 10%를 제외한 요금 전액이 환불됩니다</p>
                                    </div>

                                </div>
                            </li>
                            <li class="con">
                                <div class="pop_body scrollcustom">
                                    <div class="list_box">
                                        <dl>
                                            <dt class="title_sub">예약자 정보</dt>
                                            <dd class="linebox">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>이메일</p>
                                                        <p>rlaskdus123@naver.com</p>
                                                    </li>
                                                    <li>
                                                        <p>휴대폰</p>
                                                        <p>010-1111-1111</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">예약 정보</dt>
                                            <dd class="linebox">
                                                <ul class="tit rowbox">
                                                    <li>
                                                        <p>예약번호</p>
                                                        <p>6510392857</p>
                                                    </li>
                                                </ul>
                                                <ul class="columbox">
                                                    <li class="">
                                                        <p>카오야이 파노라마CC 호텔 (스탠다드룸)</p>
                                                        <p>+ 2022년 6월 8일 ~ 6월 12일, 6박</p>
                                                    </li>
                                                    <li class="">
                                                        <p>마닐라 파노라마CC 18홀</p>
                                                        <p>+ 2022년 6월 8일 ~ 6월 12일, 오후2시 ~ 3시</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">신청사항</dt>
                                            <dd class="linebox">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>여행사 보험 신청여부</p>
                                                        <p>신청</p>
                                                    </li>
                                                    <li>
                                                        <p>공항 &gt; 호텔 픽업 신청여부</p>
                                                        <p>신청</p>
                                                    </li>
                                                    <li>
                                                        <p>호텔 &gt; 공항 샌딩 신청여부</p>
                                                        <p>신청</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">요청사항</dt>
                                            <dd class="linebox">
                                                <input type="text" placeholder="요청사항적어주세요" readonly>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">결제정보</dt>
                                            <dd class="linebox">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>결제수단</p>
                                                        <p>KB신용카드 4852 </p>
                                                    </li>
                                                    <li>
                                                        <p>결제일시</p>
                                                        <p>2021.11.01 21:05:30</p>
                                                    </li>
                                                    <li>
                                                        <p>결제금액</p>
                                                        <p>5,600,000원(6개월 무이자)</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <a href="" class="btn_cancle btn btn_lineblack full ma24">결제 취소하기</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 예약&결제 상세 : END -->
         <!-- 예약&결제 문의: START -->
         <div class="layout_popup center_modal detailpop" data-popup="reserv_inquiry_detail">
            <div class="dim"></div>
            <div class="layout_contain wid896">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal"><span class="tag3 blue">예약문의</span> 예약&결제 상세</h3><button type="button" class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <ul class="btwlist">
                            <li class="con">
                                <div class="step step3">
                                    <div class="box">
                                        <ul class="prodlist type3 mypagecon clear">
                                            <li>
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);">
                                                </p>
                                                <div class="pinfo">
                                                    <!-- tag2에 골프텔, 호텔, 18홀, 패키지 해당에 해당하는 문구변경-->
                                                    <p class="btwlist"><span class="con ma0"><em
                                                                class="tag2">호텔</em>태국/카오야이</span>
                                                    </p>
                                                    <h6 class="imgtitle">
                                                        <strong>카오야이 파노라마 CC</strong>
                                                        <strong>호텔 (스탠다드룸)</strong>
                                                    </h6>
                                                    <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- 호텔 , 패키지, 골프텔 만 나옴 -->
                                        <div class="ordercontain payoption">
                                            <dl>
                                                <dt class="titlebox">2인 1실</dt>
                                                <dd class="countbox poRcen btwlist">
                                                    <span class="pricebox con">150,000원</span>
                                                    <div class="pricebox con">
                                                        2개
                                                    </div>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt class="titlebox">2인 1실</dt>
                                                <dd class="countbox poRcen btwlist">
                                                    <span class="pricebox con">100,000원</span>
                                                    <div class="pricebox con">
                                                        1개
                                                    </div>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt class="titlebox">PCR검사 2인 1실</dt>
                                                <dd class="countbox poRcen btwlist">
                                                    <span class="pricebox con">150,000원</span>
                                                    <div class="pricebox con">
                                                        1개
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- 호텔 , 패키지, 골프텔 만 여기까지 나옴 -->
                                        <p class="btwlist pricecon"><span class="con">합계 (4명 / PCR 4명)</span><span
                                                class="con">150,000원</span></p>
                                    </div>


                                    <div class="ordercontain">
                                        <div class="descbox totalcalc">
                                            <strong>총 합계 (몇명)</strong>
                                            <strong>900,000원</strong>
                                        </div>
                                    </div>
                                    <div class="msg_infoico">
                                        <strong class="title">환불정책</strong>
                                        <p class="text">5월 25일 오후 3:00 전에 예약을 취소하면 요금 전액이 환불됩니다. 그 이후 6월 7일 오후 3:00 전에 예약을 취소하면 서비스 수수료 10%를 제외한 요금 전액이 환불됩니다</p>
                                    </div>

                                </div>
                            </li>
                            <li class="con">
                                <div class="pop_body scrollcustom">
                                    <div class="list_box">
                                        <dl>
                                            <dt class="title_sub">예약자 정보</dt>
                                            <dd class="linebox">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>이메일</p>
                                                        <p>rlaskdus123@naver.com</p>
                                                    </li>
                                                    <li>
                                                        <p>휴대폰</p>
                                                        <p>010-1111-1111</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">예약 정보</dt>
                                            <dd class="linebox">
                                                <ul class="tit rowbox">
                                                    <li>
                                                        <p>예약번호</p>
                                                        <p>6510392857</p>
                                                    </li>
                                                </ul>
                                                <ul class="columbox">
                                                    <li class="">
                                                        <p>카오야이 파노라마CC 호텔 (스탠다드룸)</p>
                                                        <p>+ 2022년 6월 8일 ~ 6월 12일, 6박</p>
                                                    </li>
                                                    <li class="">
                                                        <p>마닐라 파노라마CC 18홀</p>
                                                        <p>+ 2022년 6월 8일 ~ 6월 12일, 오후2시 ~ 3시</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">신청사항</dt>
                                            <dd class="linebox">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>여행사 보험 신청여부</p>
                                                        <p>신청</p>
                                                    </li>
                                                    <li>
                                                        <p>공항 &gt; 호텔 픽업 신청여부</p>
                                                        <p>신청</p>
                                                    </li>
                                                    <li>
                                                        <p>호텔 &gt; 공항 샌딩 신청여부</p>
                                                        <p>신청</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">요청사항</dt>
                                            <dd class="linebox">
                                                <input type="text" placeholder="요청사항적어주세요" readonly>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="title_sub">결제정보</dt>
                                            <dd class="linebox">
                                                <ul class="rowbox">
                                                    <li>
                                                        <p>결제수단</p>
                                                        <p>KB신용카드 4852 </p>
                                                    </li>
                                                    <li>
                                                        <p>결제일시</p>
                                                        <p>2021.11.01 21:05:30</p>
                                                    </li>
                                                    <li>
                                                        <p>결제금액</p>
                                                        <p>5,600,000원(6개월 무이자)</p>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <a href="" class="btn_cancle btn btn_lineblack full ma24">결제 취소하기</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 예약&결제 문의 : END -->
        <!-- 예약&결제 사용완료: START -->
        <div class="layout_popup center_modal detailpop" data-popup="reserv_comfirm_detail">
        <div class="dim"></div>
        <div class="layout_contain wid896">
            <div class="layout_box">
                <div class="pop_header">
                    <h3 class="title_modal"><span class="tag3 blackline">예약완료</span> 예약&결제 상세</h3><button type="button" class="close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <ul class="btwlist">
                        <li class="con">
                            <div class="step step3">
                                <div class="box">
                                    <ul class="prodlist type3 mypagecon clear">
                                        <li>
                                            <p class="pimgbox"
                                                style="background-image: url(../images/bg/bg_01.jpg);">
                                            </p>
                                            <div class="pinfo">
                                                <!-- tag2에 골프텔, 호텔, 18홀, 패키지 해당에 해당하는 문구변경-->
                                                <p class="btwlist"><span class="con ma0"><em
                                                            class="tag2">호텔</em>태국/카오야이</span>
                                                </p>
                                                <h6 class="imgtitle">
                                                    <strong>카오야이 파노라마 CC</strong>
                                                    <strong>호텔 (스탠다드룸)</strong>
                                                </h6>
                                                <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- 호텔 , 패키지, 골프텔 만 나옴 -->
                                    <div class="ordercontain payoption">
                                        <dl>
                                            <dt class="titlebox">2인 1실</dt>
                                            <dd class="countbox poRcen btwlist">
                                                <span class="pricebox con">150,000원</span>
                                                <div class="pricebox con">
                                                    2개
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="titlebox">2인 1실</dt>
                                            <dd class="countbox poRcen btwlist">
                                                <span class="pricebox con">100,000원</span>
                                                <div class="pricebox con">
                                                    1개
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="titlebox">PCR검사 2인 1실</dt>
                                            <dd class="countbox poRcen btwlist">
                                                <span class="pricebox con">150,000원</span>
                                                <div class="pricebox con">
                                                    1개
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                    <!-- 호텔 , 패키지, 골프텔 만 여기까지 나옴 -->
                                    <p class="btwlist pricecon"><span class="con">합계 (4명 / PCR 4명)</span><span
                                            class="con">150,000원</span></p>
                                </div>


                                <div class="ordercontain">
                                    <div class="descbox totalcalc">
                                        <strong>총 합계 (몇명)</strong>
                                        <strong>900,000원</strong>
                                    </div>
                                </div>
                                <div class="msg_infoico">
                                    <strong class="title">예약불가 환불정책</strong>
                                    <p class="text">예약 확인 중 상품으로 예약불가 시 , 사전안내 후 전체 환불처리가 됩니다. </p>
                                </div>

                            </div>
                        </li>
                        <li class="con">
                            <div class="pop_body scrollcustom">
                                <div class="list_box">
                                    <dl>
                                        <dt class="title_sub">예약자 정보</dt>
                                        <dd class="linebox">
                                            <ul class="rowbox">
                                                <li>
                                                    <p>이메일</p>
                                                    <p>rlaskdus123@naver.com</p>
                                                </li>
                                                <li>
                                                    <p>휴대폰</p>
                                                    <p>010-1111-1111</p>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="title_sub">예약 정보</dt>
                                        <dd class="linebox">
                                            <ul class="tit rowbox">
                                                <li>
                                                    <p>예약번호</p>
                                                    <p>6510392857</p>
                                                </li>
                                            </ul>
                                            <ul class="columbox">
                                                <li class="">
                                                    <p>카오야이 파노라마CC 호텔 (스탠다드룸)</p>
                                                    <p>+ 2022년 6월 8일 ~ 6월 12일, 6박</p>
                                                </li>
                                                <li class="">
                                                    <p>마닐라 파노라마CC 18홀</p>
                                                    <p>+ 2022년 6월 8일 ~ 6월 12일, 오후2시 ~ 3시</p>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="title_sub">신청사항</dt>
                                        <dd class="linebox">
                                            <ul class="rowbox">
                                                <li>
                                                    <p>여행사 보험 신청여부</p>
                                                    <p>신청</p>
                                                </li>
                                                <li>
                                                    <p>공항 &gt; 호텔 픽업 신청여부</p>
                                                    <p>신청</p>
                                                </li>
                                                <li>
                                                    <p>호텔 &gt; 공항 샌딩 신청여부</p>
                                                    <p>신청</p>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="title_sub">요청사항</dt>
                                        <dd class="linebox">
                                            <input type="text" placeholder="요청사항적어주세요" readonly>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="title_sub">결제정보</dt>
                                        <dd class="linebox">
                                            <ul class="rowbox">
                                                <li>
                                                    <p>결제수단</p>
                                                    <p>KB신용카드 4852 </p>
                                                </li>
                                                <li>
                                                    <p>결제일시</p>
                                                    <p>2021.11.01 21:05:30</p>
                                                </li>
                                                <li>
                                                    <p>결제금액</p>
                                                    <p>5,600,000원(6개월 무이자)</p>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!-- 예약&결제 사용완료 : END -->

        <!-- 후기작성하기 : START  -->
        <div class="layout_popup center_modal detailpop review" data-popup="review_write">
            <div class="dim"></div>
            <div class="layout_contain">
              <div class="layout_box">
                <div class="pop_header">
                  <h3 class="title_modal">후기작성하기</h3><button type="button" class="close"></button>
                </div>
                <div class="pop_body scrollcustom">
                    <ul class="prodlist type3 mypagecon clear">
                        <li>
                            <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                            </p>
                            <div class="pinfo">
                                <!-- tag2에 골프텔, 호텔, 18홀, 패키지 해당에 해당하는 문구변경-->
                                <p class="btwlist"><span class="con ma0"><em class="tag2">호텔</em>태국/카오야이</span>
                                </p>
                                <h6 class="imgtitle">
                                    <strong>카오야이 파노라마 CC</strong>
                                    <strong>호텔 (스탠다드룸)</strong>
                                </h6>
                                <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                            </div>
                        </li>
                    </ul>
                    <div class="ma24">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <ul class="btnwrapbtw">
                        <li><button type="button" class="btn btn_text" date-type="close">취소</button></li>
                        <li><button type="button" class="btn btn_fillblue sm">등록</button></li>
                      </ul>
                </div>
              </div>
            </div>
        </div>
        
        <!-- 후기작성하기 : END  -->
        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
        
</body>

</html>