<!DOCTYPE html>
<html lang="ko">

<head id="head">
<?php
      include '../common/head.php';
?>
<style>
@media (max-width: 1100px) { 
  .mypage_wrap .mylnb_tapwrap{display:none;}
}
</style>
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
                    <h2 class="title_page pc">마이페이지</h2>
                    <section class="mypage_wrap clear">
                        <div class="mypage_content reservation_content">
                            <h3 class="title_content mopage_title">
                            <a href="/gogogothai/mypage/index.php" class="btn_back my_topleft" title="뒤로가기"></a>    
                            <p>예약내역 0개</p>
                            <a href="/gogogothai" class="link_close my_topright" title="닫기"></a>
                        </h3>
                            <!-- 아무것도 없을시에  -->
                            <!-- <ul class="cart_list empty ma16t">
                                <li>
                                    <span class="txt bold">예약내역 없음</span>
                                    <span class="txt desc">예약된 내역이 없습니다.</span>
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
        
    </div>
        
        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
        
</body>

</html>