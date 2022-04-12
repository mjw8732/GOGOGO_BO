<!DOCTYPE html>
<html lang="ko">

<head id="head">
<?php
      include '../common/head.php';
?>
<style>
  .btn_top{ bottom: 120px;}
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
                    <h2 class="title_page">장바구니</h2>
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
                                    <spanc class="txt desc">장바구니에 담긴 제품이 없습니다.</spanc>
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
                                                <strong>총 합계 (몇명)</strong>
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
                                                <strong>총 합계 (몇명)</strong>
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
                                                                    <button class="btn_roundchange  con">선택없음</button>
                                                                </div>
                                                            </div>
                                                            <!-- 라운드 옵션 변경 : START -->
                                                            <div class="right_content ">
                                                                <div class="rudaddbox step step3 layer-popup">
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
                                                                            <strong>총 합계 (몇명)</strong>
                                                                            <strong>900,000원</strong>
                                                                        </div>
                                                                        <ul class="btnwrapbtw">
                                                                            <li><button class="btn btn_text"
                                                                                    date-type="close">건너뛰기</button></li>
                                                                            <li><button
                                                                                    class="btn btn_fillblack sm">추가하기</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <button class="close"></button>

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
                                                            <!-- 라운드 옵션 변경 : START -->
                                                            <div class="right_content ">
                                                                <div class="rudaddbox step step3 layer-popup">
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
                                                                                    <button class="btn_more btn_pop_open" data-popup="mapbigview">더보기</button> </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ordercontain">
                                                                        <div class="descbox totalcalc">
                                                                            <strong>총 합계 (몇명)</strong>
                                                                            <strong>900,000원</strong>
                                                                        </div>
                                                                        <ul class="btnwrapbtw">
                                                                            <li><button class="btn btn_text"
                                                                                    date-type="close">건너뛰기</button></li>
                                                                            <li><button
                                                                                    class="btn btn_fillblack sm">추가하기</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <button class="close"></button>

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
                                                <strong>총 합계 (몇명)</strong>
                                                <strong>900,000원</strong>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- [/] -->
                        </div>
                        <div class="right_content cartcontent">
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
                                <button class="btn_reserv btn btn_fillblue full">예약하기</button>
                            </div>
                            <div class="reserv_content shadow_content">
                                <div class="reserv_box">
                                    <dl>
                                        <dt class="title_sub">대행 예약 신청</dt>
                                        <dd class="btnwrap btwlist">
                                            <button type="button" class="btn btn_lineblack con w50 on"
                                                data-type="onlyon">항공권</button>
                                            <button type="button" class="btn btn_lineblack con w50"
                                                data-type="onlyon">여행자 보험</button>
                                            <button type="button" class="btn btn_lineblack con w50"
                                                data-type="onlyon">가이드</button>
                                            <!-- 골프텔에서만 보여지는 버튼  -->
                                            <button type="button" class="btn btn_lineblack con w50"
                                                data-type="onlyon">공항픽업</button>
                                            <button type="button" class="btn btn_lineblack con w50"
                                                data-type="onlyon">공항샌딩</button>
                                            <!-- 여기까지  -->
                                            <button type="button" class="btn btn_lineblack con w50"
                                                data-type="onlyon">신청하지 않습니다.</button>
                                        </dd>
                                        <dd class="msg_infotxt">
                                            <div class="text">대행 예약 신청 시, 예약 전 개인 자료를 요청하기 위해 유선 통화연결이 필요합니다.</div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="title_sub">요청사항</dt>
                                        <dd>
                                            <textarea name="" id="" cols="30" rows="10"
                                                placeholder="고고고 골프에 요청하실 내용이 있으시면 작성해주시기 바랍니다."></textarea>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="title_sub">결제수단 선택</dt>
                                        <dd class="btnwrap btwlist">
                                            <button type="button" class="btn btn_lineblack con w50 on"
                                                data-type="onlyon">신용카드</button>
                                            <button type="button" class="btn btn_lineblack con w50"
                                                data-type="onlyon">가상계좌 입금</button>
                                        </dd>
                                        <dd class="msg_infotxt">
                                            <div class="text">신용카드 결제금액이 30만원 이상일 경우(단, 삼성카드는 50만원 이상) ARS, 공인인증서 등 추가
                                                인증이 필요합니다.<br /><br />카드사별 포인트 혜택은 각 카드사를 통해 확인해 주시기 바랍니다.</div>
                                        </dd>
                                    </dl>
                                    <p class="cartchk">
                                        <input type="checkbox" id="pay_chk">
                                        <label for="pay_chk">[필수] 최종 확인하였으며, 결제에 동의합니다.</label>
                                    </p>
                                    <div class="msg_infoico">
                                        <strong class="title">환불정책</strong>
                                        <p class="text">5월 25일 오후 3:00 전에 예약을 취소하면 요금 전액이 환불됩니다. 그 이후 6월 7일 오후 3:00 전에
                                            예약을 취소하면 서비스 수수료 10%를 제외한 요금이 환불됩니다. </p>
                                    </div>
                                    <button class="btn_reserv btn btn_fillblue full btn_pop_open" data-popup="payreconfirm">결제하기</button>
                                </div>
                            </div>
                            <!-- [/] -->
                        </div>
                    </section>
                </div>
                <article class="estimate">
                    <p><strong>300,000원 ~<i> / 인</i></strong><span class="redate">6월8일,당일</span></p>
                    <div class="poRcen">
                        <button class=" btn btn_fillblue btn_pop_open" data-popup="payreconfirm">결제하기</button>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- 결제확인 팝업 -->
    <div class="layout_popup center_modal" data-popup="payreconfirm">
        <div class="dim"></div>
        <div class="layout_contain min440">
          <div class="layout_box">
            <div class="pop_header">
              <h3 class="title_modal">예약완료</h3><button class="close"></button>
            </div>
            <div class="pop_body scrollcustom">              
              <div class="list_box">
                <dl>
                    <dt class="title_sub">예약자 정보</dt>
                    <dd class="linebox">
                        <ul class="rowbox">
                            <li>
                                <p>이메일</p>
                                <p>이메일 넣어주세요</p>
                            </li>
                            <li>
                                <p>휴대폰</p>
                                <p>전화번호 넣어주세요</p>
                            </li>
                        </ul> 
                    </dd>
                </dl>
                <dl>
                    <dt class="title_sub">예약 정보</dt>
                    <dd class="linebox">
                        <ul class="tit rowbox">
                            <li><p >예약번호</p><p >6510392857</p></li>
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
                                <p>공항 > 호텔 픽업 신청여부</p>
                                <p>신청</p> 
                            </li>
                            <li>
                                <p>호텔 > 공항 샌딩 신청여부</p>
                                <p>신청</p>
                            </li>
                        </ul> 
                    </dd>
                </dl>
                <dl>
                    <dt class="title_sub">요청사항</dt>
                    <dd class="linebox">
                           <input type="text" placeholder="요청사항적어주세요">
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
                <div class="msg_infoico">
                    <strong class="title">예약불가 환불정책</strong>
                    <p class="text">예약 확인 중인 상품으로 예약불가 시, 사전안내 후 전체 환불처리가 됩니다. </p>
                </div>
                <a href="" class="btn_reserv btn btn_fillblue wid100 ma24" >확인</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>

</html>
<script>
    scroll();;
function scroll(){
    let viewHeight = $(document).height();
   setTimeout(function(){ 
    if(viewHeight >= 1000 ){
        $('.estimate').addClass('show');
    }else{
        $('.estimate').removeClass('show');
    }
    },1000) 
};

</script>