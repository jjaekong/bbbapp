<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub find">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/login.php" class="btn-back" data-role="back"><img src="/images/ico_close.png" alt="뒤로"></a>
            <h1 class="ui-title" role="heading" aria-level="1">아이디/비밀번호 찾기</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="section-header">
                <h2>아이디와 비밀번호를 잊어버리셨나요?</h2>
                <p>
                    가입시 입력한 이메일과 휴대전화로<br>
                    아이디 또는 비밀번호를 찾을 수 있습니다.
                </p>
            </div>
            <div data-role="tabs" id="tabs">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#find-id" data-ajax="false">아이디 찾기</a></li>
                        <li><a href="#find-pw" data-ajax="false">비밀번호 찾기</a></li>
                    </ul>
                </div>
                <div id="find-id">
                    <div class="find-form find-id-email">
                        <form>
                            <fieldset>
                                <legend class="required">이메일로 찾기</legend>
                                <label for="find-id-by-name-1" class="ui-hidden-accessible">이름</label>
                                <input type="text" name="#" id="find-id-by-name-1" placeholder="이름">
                                <label for="find-id-by-email" class="ui-hidden-accessible">이메일</label>
                                <input type="email" name="#" id="find-id-by-email" placeholder="이메일">
                            </fieldset>
                            <div class="btn-area">
                                <div class="ui-grid-a">
                                    <div class="ui-block-a"><button type="submit" class="btn-primary">확인</button></div>
                                    <div class="ui-block-b"><a href="" class="ui-btn btn-of-form">취소</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="find-form find-id-mobile">
                        <form>
                            <fieldset>
                                <legend class="required">휴대전화로 찾기</legend>
                                <label for="find-id-by-name-2" class="ui-hidden-accessible">이름</label>
                                <input type="text" name="#" id="find-id-by-name-2" placeholder="이름">
                                <label for="find-id-by-mobile" class="ui-hidden-accessible">휴대전화 번호</label>
                                <input type="number" name="#" id="find-id-by-mobile" placeholder="휴대전화 번호" pattern="[0-9]+">
                            </fieldset>
                            <div class="btn-area">
                                <div class="ui-grid-a">
                                    <div class="ui-block-a"><button type="submit" class="btn-primary">확인</button></div>
                                    <div class="ui-block-b"><a href="" class="ui-btn btn-of-form">취소</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="find-pw">
                    <div class="find-form find-pw-email">
                        <form>
                            <fieldset>
                                <legend class="required">이메일로 찾기</legend>
                                <label for="find-pw-by-id-1" class="ui-hidden-accessible">아이디</label>
                                <input type="text" name="#" id="find-pw-by-id-1" placeholder="아이디">
                                <label for="find-pw-by-name-1" class="ui-hidden-accessible">이름</label>
                                <input type="text" name="#" id="find-pw-by-name-1" placeholder="이름">
                                <label for="find-pw-by-email" class="ui-hidden-accessible">이메일</label>
                                <input type="email" name="#" id="find-pw-by-email" placeholder="이메일">
                            </fieldset>
                            <div class="btn-area">
                                <div class="ui-grid-a">
                                    <div class="ui-block-a"><button type="submit" class="btn-primary">확인</button></div>
                                    <div class="ui-block-b"><a href="" class="ui-btn btn-of-form">취소</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="find-form find-pw-mobile">
                        <form>
                            <fieldset>
                                <legend class="required">휴대전화로 찾기</legend>
                                <label for="find-pw-by-id-2" class="ui-hidden-accessible">아이디</label>
                                <input type="text" name="#" id="find-pw-by-id-2" placeholder="아이디">
                                <label for="find-pw-by-name-2" class="ui-hidden-accessible">이름</label>
                                <input type="text" name="#" id="find-pw-by-name-2" placeholder="이름">
                                <label for="find-pw-by-mobile" class="ui-hidden-accessible">휴대전화 번호</label>
                                <input type="number" name="#" id="find-pw-by-mobile" placeholder="휴대전화 번호" pattern="[0-9]+">
                            </fieldset>
                            <div class="btn-area">
                                <div class="ui-grid-a">
                                    <div class="ui-block-a"><button type="submit" class="btn-primary">확인</button></div>
                                    <div class="ui-block-b"><a href="" class="ui-btn btn-of-form">취소</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>