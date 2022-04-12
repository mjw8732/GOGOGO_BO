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
                        <div class="mypage_content">
                            <h3 class="title_content">공지사항</h3>
                            <ul>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="notice_01">
                                        <span class="bggrayarrow">
                                            <span class="tit">공지사항 제목 넣어주세요</span>
                                            <span class="desc_12">공지사항 날짜 넣어주세요</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="notice_02">
                                        <span class="bggrayarrow">
                                            <span class="tit">검색기능 오류 관련 공지</span>
                                            <span class="desc_12">2021년 10월 11일</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="notice_03">
                                        <span class="bggrayarrow">
                                            <span class="tit">검색기능 오류 관련 공지</span>
                                            <em class="desc_12">2021년 10월 11일</em>
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
        <!-- 공지사항팝업 : START  -->
        <div class="layout_popup center_modal detailpop notice" data-popup="notice_01">
            <div class="dim"></div>
            <div class="layout_contain">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal">후기작성하기</h3><button class="close btn_dim_close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <p>data-popup="notice_01" 첫번째</p>
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

        <div class="layout_popup center_modal detailpop notice" data-popup="notice_02">
            <div class="dim"></div>
            <div class="layout_contain">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal">후기작성하기</h3><button class="close btn_dim_close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <p>data-popup="notice_02" 두번째</p>
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

        <!-- 공지사항팝업 : END  -->
        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>

</body>

</html>