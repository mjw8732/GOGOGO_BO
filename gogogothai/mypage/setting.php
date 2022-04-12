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
        <header class="layout_header shadow">
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
                            <h3 class="title_content">설정</h3>
                            <div class="linecontent">
                                <p class="tit">아이디넣어주세요(canksh77)</p>
                                <p class="desc_12">이메일 넣어주세요(cheerupsh@naver.com)</p>
                            </div>
                            <div class="linecontent type2">
                                <h4 class="title">정보</h4>
                                <ul class="btwlist">
                                    <li class="bggrayarrow con w50"><button type="button" class=" btn_pop_open" data-popup="termsofUse">이용약관</button></li>
                                    <li class="bggrayarrow con w50"><button type="button" class=" btn_pop_open" data-popup="locationterms">위치기반 이용약관</button></li>
                                    <li class="bggrayarrow con w50"><button type="button" class=" btn_pop_open" data-popup="personalinfo">개인정보 처리방침</button></li>
                                    <li class="bggrayarrow con w50"><button type="button" class=" btn_pop_open" data-popup="openlicense">오픈소스 라이센스</button></li>
                                </ul>
                            </div>
                            <p class="txtcenter ma40t">
                                <button type="button" class="login undel blackfont btn_pop_open" data-popup="login_popup">로그인</button>
                                <!-- <button type="button" class="logout undel blackfont">로그아웃</button> -->
                            </p>
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