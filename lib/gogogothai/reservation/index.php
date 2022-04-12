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
                    <h2 class="title_page">예약스케쥴</h2>
                    <section class="mypage_wrap clear">
                        <div class="mypage_content">
                            <h3 class="title_content relative">전체<button
                                    class="bgbtn btn_inqwrite btn_pop_open poRcen"
                                    data-popup="inquiry_write"></button></h3>
                            <ul>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="reserv_schedule">
                                        <span class="bggrayarrow">
                                            <span class="tit"><em class="brackets">2022년 6월 8일 ~ 6월 12일, 6박</span>
                                            <span class="desc_12"><span class="tag3 static">진행중</span>예약 스케줄 번호 : 6510392857</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="reserv_schedule">
                                        <span class="bggrayarrow">
                                        <span class="tit"><em class="brackets">2022년 6월 8일 ~ 6월 12일, 6박</span>
                                            <span class="desc_12"><span class="tag3 blackline static">왼료</span>예약 스케줄 번호 : 6510392857</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent" data-popup="reserv_schedule">
                                    <span class="bggrayarrow">
                                        <span class="tit"><em class="brackets">2022년 6월 8일 ~ 6월 12일, 6박</span>
                                            <span class="desc_12"><span class="tag3 blackline static">왼료</span>예약 스케줄 번호 : 6510392857</span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <?php
                            include '../common/layout_reservation_lnb.php';
                        ?>
                    </section>
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