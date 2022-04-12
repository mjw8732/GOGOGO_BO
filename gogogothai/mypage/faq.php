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
                        <div class="mypage_content faq_content">
                            <h3 class="title_content">자주 묻는 질문</h3>
                            <div class="selectbox ma16t">
                                <div class="small_popup_wrap">
                                    <button class="btn_bunlyu btn_spop changtxt" data-popup="service_pp">- 분류선택 -</button>
                                    <div class="small_popup select_pop bunlyu" data-popup="service_pp">
                                        <ul class="selectlist scrollcustom">
                                            <li><button type="button">faq유형넣어주세요</button></li>
                                            <li><button type="button">서비스/불만</button></li>
                                            <li><button type="button">예약</button></li>
                                            <li><button type="button">결제</button></li>
                                            <li><button type="button">환불</button></li>
                                            <li><button type="button">로그인</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="serchbox"><button class="btn_find"></button><input class="serchinp" type="search" autocomplete="on" placeholder="검색어를 입력해주세요"><button class="bunlyu_serch btn_serch" style="display: none;">검색</button></p>
                            </div>
                            <ul>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="faq_01">
                                        <span class="bggrayarrow">
                                            <span class="tit"><em class="brackets">[문의주제넣어주세요]</em>문의제목 넣어주세요.</span>
                                            <span class="desc_12">날짜 넣어주세요</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent">
                                        <span class="bggrayarrow">
                                            <span class="tit">검색기능 오류 관련 공지</span>
                                            <span class="desc_12">2021년 10월 11일</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent">
                                        <span class="bggrayarrow">
                                            <span class="tit">검색기능 오류 관련 공지</span>
                                            <span class="desc_12">2021년 10월 11일</span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <?php
                            include '../common/layout_mypage_lnb.php';
                        ?>
                    </section>
                </div>
            </div>
        </div>

        <!-- faq팝업 : START -->
        <div class="layout_popup center_modal detailpop notice" data-popup="faq_01">
            <div class="dim"></div>
            <div class="layout_contain">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal">[서비스/불만] 로그인이 안됩니다.</h3><button class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <p>제목제목</p>
                        <br />
                        <p> 검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스 이용에
                            불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여
                            서비스 이용에 불편을 드려 죄송합니다. 검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다.
                            검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스 이용에
                            불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다.</p>
                        <br />
                        <br />
                        <p> 검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스 이용에
                            불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여
                            서비스 이용에 불편을 드려 죄송합니다. </p>
                        <br />
                        <br />
                        <p> 고고고 타이골프 드림 </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq팝업 : END  -->
        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>

</html>