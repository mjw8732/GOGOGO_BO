<!DOCTYPE html>
<html lang="ko">

<head id="head">
<?php
      include '../common/head.php';
?>
<style>
    .mobtm_wrap{display:none}
    @media (max-width: 1100px) {
        .estimate , .estimate .show{display: none !important;}
    }
</style>

</head>
<!-- .hid 추가 상품상세페이지에서 -->

<body class="hid">
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
                    <h2 class="title_page"><a href=" javascript:history.back();" class="btn_back mo"></a>장바구니</h2>
                    <section class="cart_wrap clear">
                       
                        <div class="cart_list_content">
                            <div class="cart_chkcontent btwlist">
                                <p class="con"><input type="checkbox" id="allchk"><label for="allchk">전체 0건</label></p>
                                <p class="con"><button class="btn_alldel btn_more undel">선택삭제</button></p>
                            </div>
                            <!-- 상품이 없을시에  -->
                            <!-- <ul class="cart_list empty">
                                <li>
                                    <span class="txt bold">장바구니 내역 없음</span>
                                    <span class="txt desc">장바구니에 담긴 제품이 없습니다.</span>
                                </li>
                            </ul> -->
                            <!-- [/] -->

                            <!-- 상품이 있을때 -->
                            <ul class="cart_list count_list">
                                <li>
                                    <ul class="prodlist posi clear">
                                        <li>
                                            <p class="cartchk">
                                                <input type="checkbox" id="list_01">
                                                <label for="list_01">[호텔] 태국/카오야이</label>
                                                <button class="btn_del"></button>
                                            </p>
                                            <a href="../goods/view.php" class="relative">
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);"></p>
                                                <div class="pinfo">
                                                    <h6 class="imgtitle">
                                                        <strong>카오야이 파노라마 CC</strong>
                                                        <strong>호텔 (스탠다드룸)</strong>
                                                    </h6>
                                                    <span class="desc undel">4월 21일 ~ 4월 27일, 6박</span>
                                                </div>
                                            </a>
                                            <div class="ordercontain">
                                                <dl>
                                                    <dt class="titlebox">2인 1실</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">900,000원</span>
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count" readonly>
                                                            <button class="btn_minus"
                                                                onclick="counting('m',this);"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt class="titlebox">PCR검사 2인 1실</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">900,000원</span>
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count" readonly>
                                                            <button class="btn_minus"
                                                                onclick="counting('m',this);"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt class="titlebox">PCR검사 2인 1실</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">0원</span>
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="0" data-neme="count" readonly>
                                                            <button class="btn_minus" onclick="counting('m',this);"
                                                                disabled="disabled"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                            <div class="descbox totalcalc">
                                                <strong>합계 (7명 / PCR 7명)</strong>
                                                <strong>900,000원</strong>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="prodlist posi clear">
                                        <li>
                                            <p class="cartchk">
                                                <input type="checkbox" id="list_02">
                                                <label for="list_02">[18홀] 태국/카오야이</label>
                                                <button class="btn_del"></button>
                                            </p>
                                            <a href="../goods/view.php" class="relative">
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);"></p>
                                                <div class="pinfo">
                                                    <h6 class="imgtitle">
                                                        <strong>카오야이 파노라마 CC</strong>
                                                        <strong>18홀 골프장</strong>
                                                    </h6>
                                                    <span class="desc undel">4월 21일 ~ 4월 27일, 6박</span>
                                                </div>
                                            </a>
                                            <div class="ordercontain">
                                                <dl>
                                                    <dt class="titlebox">인원수</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count"
                                                                readonly="">
                                                            <button class="btn_minus"
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
                                                        <button class="btn_rser con">선택없음</button>
                                                    </div>
                                                    <div class="timelist_pop layer-popup">
                                                        <ul class="timelist scrollcustom">
                                                            <li><button type="button">06:00</button></li>
                                                            <li><button type="button">07:00</button></li>
                                                            <li><button type="button">08:00</button></li>
                                                            <li><button type="button">09:00</button></li>
                                                            <li><button type="button">10:00</button></li>
                                                            <li><button type="button">11:00</button></li>
                                                            <li><button type="button">12:00</button></li>
                                                            <li><button type="button">13:00</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="descbox totalcalc">
                                                <strong>합계 (몇명)</strong>
                                                <strong>900,000원</strong>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="prodlist posi clear">
                                        <li>
                                            <p class="cartchk">
                                                <input type="checkbox" id="list_03">
                                                <label for="list_03">[패키지] 태국/카오야이</label>
                                                <button class="btn_del"></button>
                                            </p>
                                            <a href="../goods/view.php" class="relative">
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);"></p>
                                                <div class="pinfo">
                                                    <h6 class="imgtitle">
                                                        <strong>카오야이 파노라마 CC</strong>
                                                        <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                                    </h6>
                                                    <span class="desc undel">4월 21일 ~ 4월 27일, 6박</span>
                                                </div>
                                            </a>
                                            <!-- 상품 옵션 : START -->
                                            <div class="ordercontain">
                                                <dl>
                                                    <dt class="titlebox">2인 1실</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">900,000원</span>
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count" readonly>
                                                            <button class="btn_minus"
                                                                onclick="counting('m',this);"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt class="titlebox">PCR검사 2인 1실</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">900,000원</span>
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="1" data-neme="count" readonly>
                                                            <button class="btn_minus"
                                                                onclick="counting('m',this);"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt class="titlebox">PCR검사 2인 1실</dt>
                                                    <dd class="countbox poRcen btwlist">
                                                        <span class="pricebox con">0원</span>
                                                        <div class="countbox con">
                                                            <button class="btn_plus"
                                                                onclick="counting('p',this);"></button>
                                                            <input type="number" value="0" data-neme="count" readonly>
                                                            <button class="btn_minus" onclick="counting('m',this);"
                                                                disabled="disabled"></button>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                 <!-- 옵션 : START -->
                                                <div class="descbox">
                                                    <h4 class="title_con">옵션 선택</h4> 
                                                    <!-- 추가되었을시 보이는 옵션 : START -->
                                                    <ul class="rudaddendbox">
                                                        <li>
                                                            <dl>
                                                                <dt class="titlebox"><span>라운드, 마닐라 파노라마
                                                                        CC</span><em>320,000원</em></dt>
                                                                <dd class="countbox poRcen btwlist">
                                                                    <div class="countbox con">
                                                                        <button class="btn_plus"
                                                                            onclick="counting('p',this);"></button>
                                                                        <input type="number" value="1" data-neme="count"
                                                                            readonly>
                                                                        <button class="btn_minus"
                                                                            onclick="counting('m',this);"></button>
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                            <div class="reservebox">
                                                                <div class="rserbox btwlist">
                                                                    <p class="con">
                                                                        <span>+ 이용날짜 및 시간</span>
                                                                        <em>1시간 단위로 설정가능합니다</em>
                                                                    </p>
                                                                    <!-- 라운드 옵션 변경 띄우기  -->
                                                                    <button class="btn_roundchange con">선택없음</button>
                                                                </div>
                                                            </div>
                                                            <!-- 라운드 옵션 변경3 : START -->
                                                            <div class="right_content resetting_option">
                                                                    <div class="rudaddbox step step3 reset_rudadd">
                                                                        <h3 class="title_pop">라운드 옵션 변경</h3>
                                                                        <div class="roundlist">
                                                                            <ul class="prodlist type3 clear">
                                                                                <li>
                                                                                    <p class="pimgbox"
                                                                                        style="background-image: url(../images/bg/bg_01.jpg);">
                                                                                    </p>
                                                                                    <div class="pinfo">
                                                                                        <p class="btwlist"><span
                                                                                                class="con"><em
                                                                                                    class="tag2">골프텔</em>태국/카오야이</span>
                                                                                        </p>
                                                                                        <h6 class="imgtitle">
                                                                                            <strong>카오야이 파노라마 CC</strong>
                                                                                            <strong>골프장 + 호텔
                                                                                                (스탠다드룸)</strong>
                                                                                        </h6>
                                                                                        <span class="desc">4월 21일 ~ 4월 27일,
                                                                                            6박</span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="ordercontain">
                                                                                <dl>
                                                                                    <dt class="titlebox">인원 수</dt>
                                                                                    <dd class="countbox poRcen btwlist">
                                                                                        <span
                                                                                            class="pricebox con">900,000원</span>
                                                                                        <div class="countbox con">
                                                                                            <button class="btn_plus"
                                                                                                onclick="counting('p',this);"></button>
                                                                                            <input type="number" value="1"
                                                                                                data-neme="count" readonly>
                                                                                            <button class="btn_minus"
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
                                                                                        <button
                                                                                            class="btn_rser con">선택없음</button>
                                                                                    </div>
                                                                                    <div class="timelist_pop layer-popup">
                                                                                        <ul class="timelist scrollcustom">
                                                                                            <li><button
                                                                                                    type="button">06:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">07:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">08:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">09:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">10:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">11:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">12:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">13:00</button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                    <div class="navibox">
                                                                                        <strong class="title">위치정보</strong>
                                                                                        <p class="text">카오야이 파노라마CC에서 1km 거리
                                                                                            <button class="btn_more btn_pop_open" data-popup="mapbigview">더보기</button>
                                                                                        </p>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ordercontain">
                                                                            <div class="descbox totalcalc">
                                                                                <strong>합계 (몇명)</strong>
                                                                                <strong>900,000원</strong>
                                                                            </div>
                                                                            <ul class="btnwrapbtw addround fixed_btn_wrap ">
                                                                                <li><button class="btn btn_text"
                                                                                        date-type="close">건너뛰기</button></li>
                                                                                <li><button
                                                                                        class="btn btn_fillblack sm">추가하기</button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <button class="close roundadd_close"></button>

                                                                    </div>
                                                             
                                                            </div>
                                                            <!-- 라운드 옵션 변경 : END -->
                                                        </li>
                                                        <li>
                                                            <dl>
                                                                <dt class="titlebox"><span>라운드, 마닐라 파노라마
                                                                        CC</span><em>320,000원</em></dt>
                                                                <dd class="countbox poRcen btwlist">
                                                                    <div class="countbox con">
                                                                        <button class="btn_plus"
                                                                            onclick="counting('p',this);"></button>
                                                                        <input type="number" value="1" data-neme="count"
                                                                            readonly>
                                                                        <button class="btn_minus"
                                                                            onclick="counting('m',this);"></button>
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                            <div class="reservebox">
                                                                <div class="rserbox btwlist">
                                                                    <p class="con">
                                                                        <span>+ 이용날짜 및 시간</span>
                                                                        <em>1시간 단위로 설정가능합니다</em>
                                                                    </p>
                                                                    <!-- 라운드 옵션 변경 띄우기  -->
                                                                    <button class="btn_roundchange con">선택없음</button>
                                                                </div>
                                                            </div>
                                                            <!-- 라운드 옵션 변경2 : START -->
                                                            <div class="right_content resetting_option">
                                                                    <div class="rudaddbox step step3 reset_rudadd">
                                                                        <h3 class="title_pop">라운드 옵션 변경</h3>
                                                                        <div class="roundlist">
                                                                            <ul class="prodlist type3 clear">
                                                                                <li>
                                                                                    <p class="pimgbox"
                                                                                        style="background-image: url(../images/bg/bg_01.jpg);">
                                                                                    </p>
                                                                                    <div class="pinfo">
                                                                                        <p class="btwlist"><span
                                                                                                class="con"><em
                                                                                                    class="tag2">골프텔</em>태국/카오야이</span>
                                                                                        </p>
                                                                                        <h6 class="imgtitle">
                                                                                            <strong>카오야이 파노라마 CC</strong>
                                                                                            <strong>골프장 + 호텔
                                                                                                (스탠다드룸)</strong>
                                                                                        </h6>
                                                                                        <span class="desc">4월 21일 ~ 4월 27일,
                                                                                            6박</span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="ordercontain">
                                                                                <dl>
                                                                                    <dt class="titlebox">인원 수</dt>
                                                                                    <dd class="countbox poRcen btwlist">
                                                                                        <span
                                                                                            class="pricebox con">900,000원</span>
                                                                                        <div class="countbox con">
                                                                                            <button class="btn_plus"
                                                                                                onclick="counting('p',this);"></button>
                                                                                            <input type="number" value="1"
                                                                                                data-neme="count" readonly>
                                                                                            <button class="btn_minus"
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
                                                                                        <button
                                                                                            class="btn_rser con">선택없음</button>
                                                                                    </div>
                                                                                    <div class="timelist_pop layer-popup">
                                                                                        <ul class="timelist scrollcustom">
                                                                                            <li><button
                                                                                                    type="button">06:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">07:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">08:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">09:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">10:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">11:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">12:00</button>
                                                                                            </li>
                                                                                            <li><button
                                                                                                    type="button">13:00</button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                    <div class="navibox">
                                                                                        <strong class="title">위치정보</strong>
                                                                                        <p class="text">카오야이 파노라마CC에서 1km 거리
                                                                                            <button class="btn_more btn_pop_open" data-popup="mapbigview">더보기</button>
                                                                                        </p>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ordercontain">
                                                                            <div class="descbox totalcalc">
                                                                                <strong>합계 (몇명)</strong>
                                                                                <strong>900,000원</strong>
                                                                            </div>
                                                                            <ul class="btnwrapbtw addround fixed_btn_wrap">
                                                                                <li><button class="btn btn_text"
                                                                                        date-type="close">건너뛰기</button></li>
                                                                                <li><button
                                                                                        class="btn btn_fillblack sm">추가하기</button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <button class="close roundadd_close"></button>

                                                                    </div>
                                                             
                                                            </div>
                                                            <!-- 라운드 옵션 변경 : END -->
                                                        </li>
                                                    </ul>
                                                    <!-- 추가되었을시 보이는 옵션 : end -->
                                                </div>
                                                  <!-- 옵션 : END -->
                                            </div>
                                            <!-- 상품 옵션 : END -->
                                            <div class="descbox totalcalc">
                                                <strong>합계 (몇명)</strong>
                                                <strong>900,000원</strong>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- [/] -->
                        </div>
                        <div class="right_content cartcontent cartstep_monone">
                            <!-- 상품이 없을시에 :  -->
                            <!-- <div class="step step3 empty">
                                <span class="title">장바구니에 상품을 담아보세요</span>
                                <button class="btn_reserv btn btn_fillblue full">예약하기</button>
                            </div> -->
                            <!-- [/] -->

                            <!-- 상품이 있을때 -->
                            <div class="step step3">
                                <!-- 제품 반복 : START -->
                                <div class="box">
                                    <ul class="prodlist type3 clear">
                                        <li>
                                            <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                            </p>
                                            <div class="pinfo">
                                                <!-- tag2에 골프텔, 호텔, 18홀, 패키지 해당에 해당하는 문구변경-->
                                                <p class="btwlist"><span class="con"><em
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
                                <div class="box">
                                    <ul class="prodlist type3 clear">
                                        <li>
                                            <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                            </p>
                                            <div class="pinfo">
                                                <p class="btwlist"><span class="con"><em
                                                            class="tag2">골프텔</em>태국/카오야이</span>
                                                </p>
                                                <h6 class="imgtitle">
                                                    <strong>카오야이 파노라마 CC</strong>
                                                    <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                                </h6>
                                                <span class="desc">4월 21일 ~ 4월 27일, 6박</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="btwlist pricecon"><span class="con">합계 (4명 / PCR 4명)</span><span
                                            class="con">150,000원</span></p>
                                </div>
                                <!-- 제품 반복 : END -->
                                <div class="ordercontain">
                                    <div class="descbox totalcalc">
                                        <strong>총 합계 (몇명)</strong>
                                        <strong>900,000원</strong>
                                    </div>
                                </div>
                                <div class="msg_infoico">
                                    <strong class="title">주의사항</strong>
                                    <p class="text">주문결제 시 환율에 따라 결제 금액이 변경될 수 있으니 결제금액을 꼭 확인하시기 바랍니다. </p>
                                </div>
                                <div class="mo_fixed"><a href="/gogogothai/order/payment.php" class="btn_reserv btn btn_fillblue full"><span class="detail_price">총 2개 150,000원</span>예약하기</a></div>
                            </div>
                            <!-- [/] -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
<script src="../javascript/cart.js"></script>
</body>

</html>