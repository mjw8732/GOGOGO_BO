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
    <div class="serchwrap cartshow">
    
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
            <a href="/gogogothai/mypage/scrap.php" class="scrap menu ico">스크랩</a>
            <a href="/gogogothai/order/payment.php" class="cart menu ico">장바구니 <span class="alarm">1</span></a>
            <a href="/gogogothai/mypage/mypage.php" class="mypage menu ico">마이페이지</a>
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
<!-- 바디 탑버튼 -->
<button class="btn_top"></button>
<!-- =============================    modal 영역  =========================================== -->
    <!-- 로그인 팝업 : START -->
    <div class="layout_popup center_modal detailpop" data-popup="login_popup">
            <div class="dim"></div>
            <div class="layout_contain min440 heightauto">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">로그인 또는 회원가입
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <form action="">
                        <div class="list_box wid100">
                            <dl>
                                <dt class="title_sub">회원정보</dt>
                                <dd class="linebox">
                                    <input type="text" placeholder="아이디를 입력해주세요">
                                </dd>
                                <!-- error_msg 에 show 클레스 추가시 보임 -->
                                <dd class="error_msg show">ㄴ 입력하신 아이디가 없습니다.</dd>
                            </dl>
                            <dl>
                                <dd class="linebox">
                                    <input type="text" placeholder="비밀번호를 입력해 주세요">
                                </dd>
                                <!-- error_msg 에 show 클레스 추가시 보임 -->
                                <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                            </dl>
                            <ul class="rowbox type2">
                                <li>
                                    <p class="cartchk">
                                        <input type="checkbox" id="id_save">
                                        <label for="id_save">아이디저장</label>
                                    </p>
                                    <p>
                                        <button type="button" class="btn_idfind btn_pop_open"
                                            data-popup="user_id_find">아이디/비밀번호
                                            찾기</button>
                                    </p>
                                </li>
                            </ul>
                            <button type="button" class="btn_login btn btn_fillblue wid100 ma16t">로그인하기</button>
                            <ul class="login_list">
                                <li><a href="" class="btn_sns_login kakao">카카오 아이디로 로그인</a></li>
                                <li><a href="" class="btn_sns_login naver">네이버 아이디로 로그인</a></li>
                                <li><a href="" class="btn_sns_login google">구글 아이디로 로그인</a></li>
                                <li><a href="" class="btn_sns_login apple">애플 아이디로 로그인</a></li>
                                <li class="gogojoin_box">
                                    <p class="">아직 고고고 회원이 아니신가요?</p>
                                    <button type="button" class="gogojoin undel btn_pop_open"
                                        data-popup="join_step1">회원가입 하기</button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 로그인 팝업 : END  -->



    <!-- 고고회원가입join_step1 팝업 : START -->
    <div class="layout_popup center_modal detailpop gogojoin_wrap" data-popup="join_step1">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">회원가입
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <form action="">
                        <section class="join_pop">
                            <h3 class="tit_20">고고고 타이골프의<br />
                                서비스 이용약관에 동의해주세요.</h3>
                            <div class="cart_chkcontent">
                                <p><input type="checkbox" id="allchk"><label for="allchk">모두 동의</label></p>
                            </div>
                            <ul class="agreement_list count_list">
                                <li>
                                    <p class="cartchk">
                                        <input type="checkbox" id="agreement_01">
                                        <label for="agreement_01">[필수] 이용약관 동의 <button type="button"
                                                class="btn_pop_open undel" data-popup="terms_pop1">보기</button></label>
                                    </p>
                                </li>
                                <li>
                                    <p class="cartchk">
                                        <input type="checkbox" id="agreement_02">
                                        <label for="agreement_02">[필수] 개인정보 처리방침 동의 <button type="button"
                                                class="btn_pop_open undel" data-popup="terms_pop2">보기</button></label>
                                    </p>
                                </li>
                                <li>
                                    <p class="cartchk">
                                        <input type="checkbox" id="agreement_03">
                                        <label for="agreement_03">[필수] 위치정보 이용 동의 <button type="button"
                                                class="btn_pop_open undel" data-popup="terms_pop3">보기</button></label>
                                    </p>
                                </li>
                                <li>
                                    <p class="cartchk">
                                        <input type="checkbox" id="agreement_04">
                                        <label for="agreement_04">[선택] 정보/이벤트 메일, SMS수신에 동의합니다.</label>
                                    </p>
                                </li>
                            </ul>
                            <button type="button" class="btn btn_fillblue wid100 ma16t btn_pop_open posi"
                                data-popup="join_step2">동의하고 가입하기</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 고고회원가입 팝업 : END  -->
    <!-- 고고회원가입 join_step2 팝업 : START -->
    <div class="layout_popup center_modal detailpop gogojoin_wrap" data-popup="join_step2">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">회원가입
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <form action="">
                        <section class="join_pop">
                            <h3 class="tit_20">회원가입을 위해 이름과<br />
                                휴대폰 번호를 입력하세요.</h3>
                            <div class="list_box wid100">
                                <dl>
                                    <dt class="title_sub">이름</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="이름을 입력하세요.">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="title_sub">아이디</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="아이디를 입력해주세요.">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 아이디가 없습니다.</dd>
                                </dl>
                                <dl>
                                    <dt class="title_sub">비밀번호</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="공백 없는 영문/숫자 포함 6~20자">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl>
                                    <dt class="title_sub">비밀번호 확인</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="공백 없는 영문/숫자 포함 6~20자">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl class="phone_box">
                                    <dt class="title_sub">휴대폰 번호</dt>
                                    <dd class="linebox">
                                        <!-- .agency 통신사 넣어주세요 -->
                                        <span class="agency">kt</span>
                                        <input type="text" placeholder="">
                                        <button type="button" class="btn_resend">인증하기</button>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl class="cert_number_box">
                                    <dt class="title_sub">인증번호</dt>
                                    <dd class="linebox relative">
                                        <input type="text" placeholder="인증번호를 입력해주세요">
                                        <span class="timemer">03 : 00</span>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 인증번호가 문자메세지로 발송되었습니다.</dd>
                                </dl>
                            </div>
                            <button type="button" class="btn btn_fillblue wid100 ma16t btn_pop_open"
                                data-popup="step3_pop">회원가입</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 고고회원가입 팝업 : END  -->
    <!-- 고고회원가입 가입후 확인 팝업 : START -->
    <div class="layout_popup center_modal detailpop review" data-popup="step3_pop">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">회원가입
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <section class="join_pop">
                        <div>
                            <p class="font_20 ma8b">회원가입 되었습니다.</p>
                            <!-- <span class="font_16g">안전한 정보 보호를 위해 주기적으로 비밀번호를
                    변경해주세요.</span> -->
                        </div>
                        <button type="button" class="btn_login btn btn_fillblue wid100 ma40t btn_pop_open"
                            data-popup="login_popup">로그인하기</button>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- 고고회원가입 가입후 확인 팝업 : END  -->



    <!-- 아이디찾기 팝업 : START -->
    <div class="layout_popup center_modal detailpop user_idpass" data-popup="user_id_find">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">아이디찾기
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <form action="">
                        <section class="join_pop">
                            <h3 class="tit_20">회원가입 시 등록한 정보로<br />
                                아이디를 찾을 수 있습니다.</h3>
                            <div class="list_box wid100">
                                <dl>
                                    <dt class="title_sub">이름</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="이름을 입력하세요.">
                                    </dd>
                                </dl>
                                <!--  값 입력시에 .show 추가시 -->
                                <dl class="phone_box">
                                    <dt class="title_sub">휴대폰 번호</dt>
                                    <dd class="linebox ">
                                        <!-- .agency 통신사 넣어주세요 -->
                                        <span class="agency">kt</span>
                                        <input class="phonnumber" type="text" placeholder="휴대폰 번호를 입력하세요">
                                        <button type="button" class="btn_resend">인증하기</button>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl class="cert_number_box">
                                    <dt class="title_sub">인증번호</dt>
                                    <dd class="linebox relative">
                                        <input type="text" placeholder="인증번호를 입력해주세요">
                                        <span class="timemer">03 : 00</span>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 인증번호가 문자메세지로 발송되었습니다.</dd>
                                </dl>
                                <!-- .disnone 추가시 안보임 -->
                                <div class="another_box">
                                    <div>
                                        <p>비밀번호를 찾고 싶으세요?</p>
                                        <button type="button" class="btn_findpass undel btn_pop_open"
                                            data-popup="user_password_find">비밀번호
                                            찾기</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="find_id btn btn_fillblue wid100 ma16t btn_pop_open">확인</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 아이디찾기 팝업 : END  -->
    <!-- 아이디찾은 후에 팝업 : START -->
    <div class="layout_popup center_modal detailpop user_findinfo" data-popup="user_id_find_ok">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">아이디찾기
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <!-- 아이디 찾은 후 : START-->
                    <!-- <section class="join_pop">
                <div>
                  <p class="font_20 ma8b">김나연님의 아이디는<br/>'nayeonkimmamm' 입니다.</p>
                  <span class="font_16g">(2020년 8월 1일 네이버로 가입)</span>
                </div>
                <button type="button" class="btn_login btn btn_fillblue wid100 ma40t btn_posi" data-popup="step2_pop">로그인하기</button>
                <div class="another_box">
                  <div>
                    <p>비밀번호를 찾고 싶으세요?</p>
                    <button type="button" class="btn_findpass undel btn_pop_open" data-popup="user_password_find">비밀번호
                      찾기</button>
                  </div>
                </div>
              </section> -->
                    <!-- 아이디 찾은 후 : START-->
                    <!-- 아이디 못 찾은 후 : START-->
                    <section class="join_pop">
                        <div>
                            <p class="font_20 ma8b">해당 아이디를 찾을 수 없습니다.</p>
                            <span class="font_16g ">회원가입 시 사용하신 이름과 이메일로<br />
                                아이디를 찾아주세요.</span>
                        </div>
                        <button type="button" class="btn_refind btn btn_lineblue wid100 ma40t btn_posi"
                            data-popup="step2_pop">다시
                            찾아보기</button>
                        <ul class="login_list borderno">
                            <li class="gogojoin_box ma0">
                                <p class="">아직 고고고 회원이 아니신가요?</p>
                                <button type="button" class="gogojoin undel btn_pop_open" data-popup="join_step1">회원가입
                                    하기</button>
                            </li>
                        </ul>
                    </section>
                    <!-- 아이디 못 찾은 후: START-->
                </div>
            </div>
        </div>
    </div>
    <!-- 아이디찾은 후에 팝업 : END  -->



    <!-- 비밀번호 팝업 : START -->
    <div class="layout_popup center_modal detailpop user_idpass" data-popup="user_password_find">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">비밀번호 찾기
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <form action="">
                        <section class="join_pop">
                            <h3 class="tit_20">회원가입 시 등록한 정보로<br />
                                비밀번호를 찾을 수 있습니다.</h3>
                            <div class="list_box wid100">
                                <dl>
                                    <dt class="title_sub">아이디</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="아이디를 입력하세요.">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 아이디가 일치하지 않습니다.</dd>
                                </dl>
                                <!--  값 입력시에 .show 추가시 -->
                                <dl class="phone_box">
                                    <dt class="title_sub">휴대폰 번호</dt>
                                    <dd class="linebox ">
                                        <!-- .agency 통신사 넣어주세요 -->
                                        <span class="agency">kt</span>
                                        <input class="phonnumber" type="text" placeholder="휴대폰 번호를 입력하세요">
                                        <button type="button" class="btn_resend">인증하기</button>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl class="cert_number_box">
                                    <dt class="title_sub">인증번호</dt>
                                    <dd class="linebox relative">
                                        <input type="text" placeholder="인증번호를 입력해주세요">
                                        <span class="timemer">03 : 00</span>
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 인증번호가 문자메세지로 발송되었습니다.</dd>
                                </dl>
                                <!-- .disnone 추가시 안보임 -->
                                <div class="another_box">
                                    <div>
                                        <p>아이디를 찾고 싶으세요?</p>
                                        <button type="button" class="btn_findpass undel btn_pop_open"
                                            data-popup="user_id_find">아이디
                                            찾기</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="find_id btn btn_fillblue wid100 ma16t btn_pop_open"
                                data-popup="user_new_password">확인</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 비밀번호  팝업 : END  -->
    <!-- 비밀번호 새 비밀번호 팝업 : START -->
    <div class="layout_popup center_modal detailpop user_idpass" data-popup="user_new_password">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">비밀번호 찾기
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <form action="">
                        <section class="join_pop">
                            <div class="list_box wid100">
                                <dl>
                                    <dt class="title_sub">새 비밀번호</dt>
                                    <dd class="linebox">
                                        <input type="text" placeholder="공백 없는 영문/숫자 포함 6~20자">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <dl>
                                    <dt class="title_sub">새 비밀번호</dt>
                                    <dd class="linebox">
                                        <input type="password" placeholder="공백 없는 영문/숫자 포함 6~20자">
                                    </dd>
                                    <!-- error_msg 에 show 클레스 추가시 보임 -->
                                    <dd class="error_msg">ㄴ 입력하신 정보가 일치하지 않습니다.</dd>
                                </dl>
                                <div class="msg_infoico">
                                    <strong class="title">주의사항</strong>
                                    <p class="text">비밀번호를 변경하신 후에는 고고고 타이골프를 재 로그인 하셔야 합니다.</p>
                                    <p class="text ma8t">SNS 로그인의 연결이 해제되오니 재연결 하시기 바랍니다.</p>
                                </div>
                            </div>
                            <button type="button" class="btn_password_change btn btn_fillblue wid100 ma16t btn_pop_open"
                                data-popup="user_new_password_ok">변경하기</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 비밀번호 새 비밀번호 팝업 : END  -->
    <!-- 비밀번호 찾은 후에 팝업 : START -->
    <div class="layout_popup center_modal detailpop user_findinfo" data-popup="user_new_password_ok">
        <div class="dim"></div>
        <div class="layout_contain min440">
            <div class="layout_box">
                <div class="pop_header">
                    <h2 class="title_modal">아이디찾기
                        <button type="button" class="close"></button></h2>
                </div>
                <div class="pop_body scrollcustom">
                    <section class="join_pop">
                        <div>
                            <p class="font_20 ma8b">비밀번호가 새롭게 변경되었습니다.</p>
                            <span class="font_16g">안전한 정보 보호를 위해 주기적으로 비밀번호를
                                변경해주세요.</span>
                        </div>
                        <button type="button" class="btn_login btn btn_fillblue wid100 ma40t btn_posi"
                            data-popup="step2_pop">로그인하기</button>
                        <div class="another_box">
                            <div>
                                <p>아이디를 찾고 싶으세요?</p>
                                <button type="button" class="btn_findpass undel btn_pop_open"
                                    data-popup="join_step1">아이디
                                    찾기</button>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- 비밀번호 찾은 후에 팝업 : END  -->




