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
                            <h3 class="title_content relative">문의내역 <button
                                    class="bgbtn btn_inqwrite btn_pop_open poRcen"
                                    data-popup="inquiry_write">문의하기</button></h3>
                            <ul>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="inquiry_01">
                                        <span class="bggrayarrow">
                                            <span class="tit"><em class="brackets">[문의주제넣어주세요]</em>문의제목 넣어주세요.</span>
                                            <span class="desc_12"><strong class="state leftling ok">답변상태넣어주세요</strong>날짜
                                                넣어주세요</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent btn_pop_open" data-popup="inquiry_02">
                                        <span class="bggrayarrow">
                                            <span class="tit">검색기능 오류 관련 공지</span>
                                            <span class="desc_12"><strong class="state leftling ok">답변완료</strong>2021년
                                                10월 11일</span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="linecontent">
                                        <span class="bggrayarrow">
                                            <span class="tit">검색기능 오류 관련 공지</span>
                                            <span class="desc_12"><strong class="state leftling">답변대기</strong>2021년 10월
                                                11일</span>
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

        <!-- 문의하기폼 : START  -->
        <div class="layout_popup center_modal detailpop inquiry" data-popup="inquiry_write">
            <div class="dim"></div>
            <div class="layout_contain">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal">문의내용</h3><button class="close btn_dim_close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
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
                        </div>
                        <dl class="list_type">
                            <dd>
                                <input class="line" type="text" placeholder="제목 작성해 주세요">
                            </dd>
                            <dd>
                                <textarea name="" id="" cols="30" rows="10" placeholder="문의 내용을 입력해 주세요"></textarea>
                            </dd>
                            <dd class="email_box">
                                <p class="cartchk">
                                    <input type="checkbox" id="email_chk">
                                    <label for="email_chk">가입한 이메일로 답변 받기</label>
                                </p>
                            </dd>
                            <dd class="file_uploadbox">
                                <span class="tit">첨부파일</span>
                                <p class="desc_12">최대 5장까지 10MB미만의 JPG, JPEG, PNG 포맷만 가능합니다.</p>
                                <div class="attach_fileimg">
                                    <div class="attach_file_box relative">
                                        <input type="file" id="attach-file1">
                                        <label for="attach-file1" class="posiLT btn_imgadd">
                                            <span class="posicenter">이미지<br />추가하기</span>
                                        </label>
                                    </div>
                                    <ul class="cvf_uploaded_files clear">
                                        <li><button class="btn_file_del"></button></li>
                                        <li><button class="btn_file_del"></button></li>
                                       
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                        <ul class="btnwrapbtw">
                            <li><button class="btn btn_text" date-type="close">취소</button></li>
                            <li><button class="btn_inquirysave btn btn_fillblack sm">저장</button></li>
                        </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 문의하기폼 : END  -->

        <!-- 문의내용상세 : START  -->
        <div class="layout_popup center_modal detailpop inquiry" data-popup="inquiry_01">
            <div class="dim"></div>
            <div class="layout_contain">
                <div class="layout_box">
                    <div class="pop_header">
                        <h3 class="title_modal">문의내용</h3><button class="close btn_dim_close"></button>
                    </div>
                    <div class="pop_body scrollcustom">
                        <div class="titbox">
                            <p><span class="state ok">답변완료</span><span class="brackets">[서비스/불만]</span></p>
                            <h4 class="txthide2 pa8t tit">문의 제목은 2줄까지 가능합니다. 문의 제목은 2줄까지 가능합니다.</h4>
                            <p class="font_14g pa8t">2021년 04월 25일 15:04:27</p>
                        </div>
                        <div class="txtbox">
                            <p>검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스
                                이용에 불편을 드려</p>
                            <br>
                            <p>검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스
                                이용에 불편을 드려 죄송합니다.
                                죄송합니다. </p>
                            <br>
                            <p>검색기능 오류로 인하여 서비스 이용에 불편을 드려 검색기능 오류로 인하여 서비스 이용에 불편을 드려 죄송합니다. 죄송합니다. 검색기능 오류로 인하여 서비스
                                이용에 불편을 드려 편을 드려</p>
                        </div>
                        <div class="imgbox">
                            <ul class="ma8t clear">
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                                <li class="bgimg sm" style="background-image: url(../images/bg/car.png);"></li>
                            </ul>
                        </div>
                        <div class="msg_infotxt ma8b">
                            <p class="title_12b ma16b">관리자답변</p>
                            <div class="title">결제후에 별도로 연락이 오는지 궁금합니다. 결제후에 별도로 연락이 오는지 궁금합니다. 결제후에 별도로 연락이 오는지 궁금합니다.
                                <br><br>결제후에 별도로 연락이 오는지 궁금합니다.</div>
                        </div>
                        <ul class="btnwrapbtw">
                            <li><button class="btn btn_text" date-type="close">목록으로</button></li>
                            <li><button class="btn_modify btn btn_lineblack sm">수정</button><button
                                    class="btn_inquirydel btn btn_fillblack sm">삭제</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 문의내용상세 : END  -->
        <footer class="layout_footer">
    <?php
      include '../common/layout_footer.php';
?>
    </footer>
</body>

</html>