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
                            <h3 class="title_content">내정보</h3>
                            <div class="linecontent">
                                <p class="tit">아이디넣어주세요</p>
                                <p class="desc_12">이메일 넣어주세요</p>
                            </div>
                            <form action="">
                                <div class="linecontent">
                                    <div class="boxinner">
                                        <ul class="btwlist">
                                            <li class="con w50">
                                                <span>아이디</span>
                                                <p><input type="text" value="아이디넣어주세요"><button type="button"
                                                        class="btn_pop_open"
                                                        data-popup="password_change">비밀번호변경</button></p>
                                            </li>
                                            <li class="con w50">
                                                <span>이름</span>
                                                <p><input type="text" value="이름넣어주세요" placeholder="이름을 입력해주세요."></p>
                                            </li>
                                            <li class="con w50 phone_box">
                                                <span>휴대폰 번호</span>
                                                <p class="linebox">
                                                    <!-- .agency 통신사 넣어주세요 -->
                                                    <em class="agency">kt</em>
                                                    <input type="text" value="전화번호 넣어주세요" placeholder="전화번호를 입력해주세요.">
                                                    <button type="button" class="btn_pop_open"
                                                        data-popup="phone_change">번호변경</button>
                                                </p>
                                            </li>
                                            <li class="con w50">
                                                <span>이메일</span>
                                                <p><input type="text" placeholder="이메일을 입력해주세요."></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="boxinner pa24t">
                                        <p class="pa24b">SNS 연결 설정</p>
                                        <ul class="btwlist">
                                            <li class="con w50"><a href="#" class="btn_sns kakako">카카오 아이디 연결하기</a></li>
                                            <li class="con w50"><a href="#" class="btn_sns naver">네이버 아이디 연결하기</a></li>
                                        </ul>
                                    </div>
                                    <div class="boxinner pa24">
                                        <p class="graybox txtcenter">회원탈퇴 시, 해당 아이디는 영구 사용 중지되어 더이상 이용할 수 없습니다. 재가입시 새로운
                                            아이디로 가입해주세요.</p>
                                    </div>
                                    <div class="txtcenter">
                                        <button type="button" class="btn_resign undel btn_pop_open"
                                            data-popup="user_resign">회원탈퇴하기</button> <br />
                                        <button type="summit" class="btn_save btn btn_fillblue full">내용 저장하기</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            include '../common/layout_mypage_lnb.php';
                        ?>
                    </section>
                </div>
            </div>
        </div>

        <!-- password바꾸는 팝업 : START -->
        <div class="layout_popup center_modal detailpop mydetali" data-popup="password_change">
            <div class="dim"></div>
            <div class="layout_contain min440 heightauto">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal"><button type="button" class="btn_back" date-type="close"></button>비밀번호
                            변경</h3><button class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <form action="">
                            <div class="list_box wid100">
                                <dl>
                                    <dt class="title_sub">현재 비밀번호</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="현재 비밀번호를 입력해주세요">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="title_sub">새 비밀번호</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="새 비밀번호를 입력해주세요">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="title_sub">새 비밀번호 확인</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="새 비밀번호를 확인 해주세요">
                                    </dd>
                                </dl>
                                <button class="btn_password_change btn btn_fillblack wid100 ma16t">변경하기</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- password바꾸는 팝업 : END  -->

        <!-- 휴대폰 번호 바꾸는 팝업 : START -->
        <div class="layout_popup center_modal detailpop mydetali" data-popup="phone_change">
            <div class="dim"></div>
            <div class="layout_contain min440 heightauto">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal"><button type="button" class="btn_back" date-type="close"></button>휴대폰번호
                            변경</h3><button class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <form action="">
                            <div class="list_box wid100">
                                <dl class="phone_box">
                                    <dt class="title_sub">휴대폰 번호</dt>
                                    <dd class="linebox">
                                        <!-- .agency 통신사 넣어주세요 -->
                                        <span class="agency">kt</span>
                                        <input type="text" placeholder="">
                                        <button type="button" class="btn_resend">다시요청</button>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl class="cert_number_box">
                                    <dt class="title_sub">인증번호</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="인증번호를 입력해주세요">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 인증번호가 문자메세지로 발송되었습니다.</dd>
                                </dl>
                                <button type="submit" class="btn_phone_change btn btn_fillblack wid100 ma16t">변경하기</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 휴대폰 번호 팝업 : END  -->

        <!-- 탈퇴하기팝업 step1 : START -->
        <div class="layout_popup center_modal detailpop mydetali" data-popup="user_resign">
            <div class="dim"></div>
            <div class="layout_contain min440 heightauto">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal"><button type="button" class="btn_back" date-type="close"></button>탈퇴하기
                        </h3><button type="button" class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <form action="">
                            <h4 class="font_20 ma8b">탈퇴할 아이디를 입력해 주세요.</h4>
                            <p class="font_16g ma16b">고객님의 탈퇴 사유를 통해 <br />
                                더 좋은 서비스를 제공하도록 노력하겠습니다.</p>
                            <div class="list_box wid100">
                                <dl>
                                    <dt class="title_sub">아이디</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="아이디를 입력해주세요.">
                                    </dd>
                                </dl>
                                <button type="submit" class="btn_resign btn btn_fillblack wid100 ma16t btn_pop_open"
                                    data-popup="step2_pop">변경하기</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  탈퇴하기팝업 step1 : END  -->
        <!-- 탈퇴하기팝업 step2 : START -->
        <div class="layout_popup center_modal detailpop mydetali" data-popup="step2_pop">
            <div class="dim"></div>
            <div class="layout_contain min440 heightauto">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal">탈퇴하기
                        </h3><button type="button" class="close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                            <h4 class="font_20 ma8b">회원 탈퇴가 완료되었습니다.</h4>
                            <p class="font_16g ma40b">그 동안 고고고 타이골프를 이용해주셔서 감사합니다. 보다 나은 서비스 제공을 위해 노력하겠습니다.</p>
                            <a href="/index.html" class=" btn btn_lineblack full">처음으로 돌아가기</a>
                    </div>
                </div>
            </div>
        </div>
        <!--  탈퇴하기팝업 step2 : END  -->
        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>

</html>