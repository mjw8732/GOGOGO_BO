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
                        <div class="mypage_content scrap_content">
                            <h3 class="title_content">스크랩 관리</h3>
                            <ul class="prodlist clear ma16t">
                                <li>
                                  <a href="../goods/view.php">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                      <span class="tag">골프텔</span>
                                    </p>
                                    <div class="pinfo">
                                      <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박 기준</span></p>
                                      <h6 class="imgtitle">
                                        <strong>카오야이 파노라마 CC</strong>
                                        <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                      </h6>
                                      <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                      <strong class="price">20,000원 부터~</strong>
                                  </div>
                                  </a>
                                  <button type="button" class="btn_scrap on"></button>
                                </li>
                                <li>
                                  <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                      <span class="tag">패키지</span>
                                    </p>
                                    <div class="pinfo">
                                      <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박 기준</span></p>
                                      <h6 class="imgtitle">
                                        <strong>카오야이 파노라마 CC</strong>
                                        <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                      </h6>
                                      <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                      <strong class="price">20,000원 부터~</strong>
                                  </div>
                                  </a>
                                  <button type="button" class="btn_scrap on"></button>
                                </li>
                                <li>
                                  <a href="">
                                    <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                      <span class="tag">골프텔</span>
                                    </p>
                                    <div class="pinfo">
                                      <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박 기준</span></p>
                                      <h6 class="imgtitle">
                                        <strong>카오야이 파노라마 CC</strong>
                                        <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                      </h6>
                                      <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                      <strong class="price">20,000원 부터~</strong>
                                  </div>
                                  </a>
                                  <button type="button" class="btn_scrap on"></button>
                                </li>
                                <li>
                                    <a href="">
                                      <p class="pimgbox" style="background-image: url(../images/bg/bg_01.jpg);">
                                        <span class="tag">골프텔</span>
                                      </p>
                                      <div class="pinfo">
                                        <p class="btwlist"><span class="con">태국/카오야이</span><span class="con">2인 1실 1박 기준</span></p>
                                        <h6 class="imgtitle">
                                          <strong>카오야이 파노라마 CC</strong>
                                          <strong>골프장 + 호텔 (스탠다드룸)</strong>
                                        </h6>
                                        <span class="desc">왕복항공, 전일정 숙박, 전일정 식사, 골프텔 등</span>
                                        <strong class="price">20,000원 부터~</strong>
                                    </div>
                                    </a>
                                    <button type="button" class="btn_scrap on"></button>
                                  </li>
                              </ul>
                        </div>
                        <?php
                            include '../common/layout_mypage_lnb.php';
                        ?>
                    </ㄴ>
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