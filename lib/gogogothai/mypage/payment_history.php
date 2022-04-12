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
                        <div class="mypage_content">
                            <h3 class="title_content mopage_title">
                                <a href="/gogogothai/mypage/index.php" class="btn_back my_topleft" title="뒤로가기"></a>    
                                <p>결제내역</p>
                            </h3>
                            <!-- 아무것도 없을시에  -->
                            <!-- <ul class="cart_list empty ma16t">
                                <li>
                                    <span class="txt bold">결제내역 내역 없음</span>
                                    <span class="txt desc">결제한 내역이 없습니다.</span>
                                </li>
                            </ul> -->
                            <!-- [/] -->
                            <ul class="btwlist">
                                <li class=" con w50 ">
                                <a href="javascript:;" class="linecontent btn_pop_open"
                                                data-popup="reserv_comfirm_detail">
                                    <ul class="prodlist type3 payment mypagecon clear">
                                        <li class="bggrayarrow">
                                            <div class="relative">
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);">
                                                </p>
                                                <div class="pinfo">
                                                    <p class="btwlist"><span class="con"><em class="tag2">결제완료</em>7월
                                                            15일 오전 08:53</span></p>
                                                    <span class="desc">BC카드 (**** **** **** 1234)</span>
                                                    <h6 class="imgtitle">
                                                        <strong class="price">2,300,000원</strong>
                                                    </h6>                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </a>
                                </li>
                                <li class=" con w50 ">
                                <a href="javascript:;" class="linecontent btn_pop_open"
                                                data-popup="reserv_comfirm_detail">
                                    <ul class="prodlist type3 payment mypagecon clear">
                                        <li class="bggrayarrow">
                                            <div class="relative">
                                                <p class="pimgbox"
                                                    style="background-image: url(../images/bg/bg_01.jpg);">
                                                </p>
                                                <div class="pinfo">
                                                    <p class="btwlist"><span class="con"><em class="tag2">결제취소</em>7월
                                                            15일 오전 08:53</span></p>
                                                    <span class="desc">BC카드 (**** **** **** 1234)</span>
                                                    <h6 class="imgtitle">
                                                        <strong class="price">2,300,000원</strong>
                                                    </h6>                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </a>
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
    


        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>

</html>
