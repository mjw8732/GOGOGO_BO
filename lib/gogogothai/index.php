<!DOCTYPE html>
<html lang="ko">

<head id="head">
    <?php
      include 'common/head.php';
?>
<style>
    .finner{display:none;}
</style>
</head>
<!-- .hid 추가 상품상세페이지에서 -->

<body class="hid">
    <div class="wrap">
        <!-- header : START -->
        <header class="layout_header shadow">

<div class="hinner">
    <form action="" onsubmit="return false;">
    <div class="leftbox_header">
        <h1 class="logowrap"><a href="/gogogothai" class="logo"></a></h1>
        <button type="buttom" class="btn_back moserch_start_back"></button>
        <button type="buttom" class="btn_back serch_back"></button>
    </div>

    <!-- 모바일에서 
        로그인 했을때 serchwrap에 .cartshow 추가
        비로그인은 .cartshow 뺴기   -->
    <div class="serchwrap cartshow main_serch_wrap">
    
        <div class="relative">
            <!-- 검색창부분 -->
            <div class="serchcontent">
                <p class="serchbox"><button type="button" class="bnt_find_pop btn_find"></button><input class="serchinp mapserch_input"
                        type="search" autocomplete="on" placeholder="태국과 베트남 골프 여행지를 검색하세요"><button
                        class="btn_serch" type="summit">검색</button></p>
                <p class="serchbox"><button type="button" class="btn_date"></button><input class="datainp"
                        type="text" autocomplete="on" placeholder="날짜를 선택하세요" readonly></p>
                <p class="btnlist clear"><button type="button" class="golftal">골프텔</button><button
                        type="button" class="package">패키지</button><button type="button"
                        class="hall18">18홀,호텔</button></p>
            </div>
            <div class="serchcomplete">
                <p class="serchbox text"><button type="button" class="btn_back serch_back"></button><span
                        class="searchwrod">검색한단어넣어주세요</spanc> &middot; <button type="button"
                            data-btn="calender">날짜
                            입력</button></p>
            </div>
            <!-- autocomplete -->
            <div class="autocomplete pop">
                <ul>
                    <li><a href="#">태국 카오야이</a></li>
                    <li><a href="#">태국 카오야이</a></li>
                    <li><a href="#">태국 카오야이</a></li>
                </ul>
            </div>
            <!-- 달력 -->
            <div class="calenderwrap" style="display: none;">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="calenderbox">
                                <strong>2022년 4월</strong>
                            
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <!-- 모바일 검색쪽에서 -->
            <p class="mocart"><a href="./order/payment.php" class="cart menu ico"> <span
                        class="alarm">1</span></a></p>
        </div>
    </div>
    <div class="rightbox_header">
        <nav class="lnb">
            <a href="/gogogothai/reservation/index.php" class="reservation menu ico">예약스케쥴</a>
            <a href="/gogogothai/mypage/scrap.php" class="scrap menu ico">스크랩</a>
            <a href="/gogogothai/order/cart.php" class="cart menu ico">장바구니 <span class="alarm">1</span></a>
            <a href="/gogogothai/mypage/index.php" class="mypage menu ico">마이페이지</a>
            <!-- <button type="button" class="logout menu">로그아웃</button> -->
            <button type="button" class="login menu btn_pop_open" data-popup="login_popup">로그인</button>
        </nav>
        <button type="summit" class="btn_find btn_serch"></button>
    </div>
</form>
</div>

<!-- 
    1.autocomplete_page_wrap에 .show 클래스 추가시 풀 화이트 화면 나옴 
    2.autocomplete_page_wrap에 .nofind 추가시 검색결과 없다는 문구 나옴
-->
</header>
<article class="autocomplete_page_wrap">
    <div class="pinner relative">
        <div class="empty">
            <strong class="title">검색 결과 없음</strong>
            <p class="desc">검색된 여행 상품이 없습니다.</p>
        </div>
    </div>
</article>
    <!-- header : END -->
    <!-- body : START -->
    <div class="layout_body">
        <div class="prodmap_wrap overhide">
            <!-- 지도안 에서 : START -->
            <section class="map_wrap section">
                <!-- .mapcontent 안에서 지도가 스크롤시 확대 축소 되야함 -->
                <div class="mapcontent">
                    <!-- 지도 -->
                </div>
                <!-- 지도아이콘 : START -->
                <div class="mapbtnwrap">
                    <!-- 날짜 선택전에 보이는 검색결과 -->
                    <button type="button" class="maphall"></button>
                    <button type="button" class="maphotel"></button>
                    <!-- 모바일에서 날짜선택후 보이는 지도맵 가격보시 -->
                    <button type="button" class="maphall_price mo">￦100,000원</button>
                    <button type="button" class="maphotel_price mo">￦1,090,000원</button>
                    
                    <div class="mapprice">
                        <button type="button" class="price">￦20,000원</button>
                        <ul class="prodlist type2 clear">
                            <li>
                                <a href="/gogogothai/goods/view.php">
                                    <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    </p>
                                    <div class="pinfo">
                                        <p class="btwlist"><span class="con"><em
                                                    class="tag2">골프텔</em>태국/카오야이</span><span class="con">2인
                                                1실 1박 기준</span></p>
                                        <h6 class="imgtitle">
                                            <strong>카오야이 파노라마 CC</strong>
                                            <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                        <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프장 이용까지 꽉꽉!</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                </a>
                                <button type="button" class="btn_scrap"></button>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="btn_listview">목록보기</button>
                    <button type="button" class="btn_mapview">지도</button>
                </div>
                <!-- 지도아이콘 : END -->
  
            </section>
            <!-- 지도안에서 : END -->
            <!-- 상품 리스트 : START -->
            <!-- .prod_wrap 안에서 스크롤시 상품부분이 full로 보이거나 반만, 아니면 타이틀만 보여야함
           .fullpage 추가시 상품이 fullpage로 보임 -->
            <section class="prod_wrap section">
                <div class="maphint inner">
                    <p class="mapviewtext">지도를 움직이며 골프장과 호텔을 클릭하세요</p>
                    <!-- <p class="serchtext disnone">총 20곳이 있습니다.</p>
              <p class="emptytext disnone">검색 내역이 없습니다.</p>
              <p class="btnserchtext disnone">상품 총 20곳이 있습니다.</p> -->
                </div>
                <div class="prodcontent  inner">
                    <ul class="prodlist clear">
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
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
                        <li>
                            <a href="">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
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
                        <li>
                            <a href="/gogogothai/goods/view.php">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
                        <li>
                            <a href="">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">18홀</span>
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
                        <li>
                            <a href="">
                                <p class="pimgbox" style="background-image: url(./images/bg/bg_01.jpg);">
                                    <span class="tag">패키지</span>
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
            <!-- 상품리스트 : END -->
        </div>
    </div>
    <!-- header : END -->

    </div>
    <footer class="layout_footer">
        <div class="mobtm_wrap">
            <ul class="distable btm_gnb">
                <li class="con"><button type="button" class="btn btn_golfter on">골프텔</button></li>
                <li class="con"><button type="button" class="btn btn_pakag">패키지</button></li> 
                <li class="con"><button type="button" class="btn btn_hotelngolf">호텔&골프</button></li> 
                <li class="con"><button type="button" class="btn btn_reserv_btm">예약스케쥴</button></li>
                <li class="con"><a href="/gogogothai/mypage/index.php" class="btn btn_my">마이</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>