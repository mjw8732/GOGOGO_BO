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
                      <p>회원정보 수정</p>
                    <a href="/gogogothai" class="link_close my_topright" title="닫기"></a>
                </h3>
              <div class="linecontent pc">
                <p class="tit">아이디넣어주세요(canksh77)</p>
                <p class="desc_12">이메일 넣어주세요(cheerupsh@naver.com)</p>
              </div>
              <div class="linecontent passwordbox">
                <div class="passbox">
                  <p class="font_20">
                    소중한 개인정보 보호를 위해<br />비밀번호를 입력하세요.
                  </p>
                  <div class="ma40t">
                    <p class="pa8b">비밀번호</p>
                    <p><input type="password"></p>
                    <p class="fixed_btn_wrap ma40t"><a href="./mypage_detail.php" class="btn btn_fillblue full">확인</a></p>
                  </div>
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
    <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>

</html>