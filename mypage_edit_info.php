<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub mypage edit-info">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">개인정보 수정</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="edit-info-form">
                <form>
                    <dl class="info-username">
                        <dt>이름</dt>
                        <dd>공수아</dd>
                        <dt>아이디</dt>
                        <dd>test</dd>
                    </dl>
                    <fieldset>
                        <legend class="required">휴대전화</legend>
                        <label for="info-mobile-service" class="select ui-hidden-accessible">통신사</label>
                        <select name="#" id="info-mobile-service" data-native-menu="true" data-icon="false">
                            <option value="#">통신사 선택</option>
                            <option value="#">SKT</option>
                            <option value="#">KT</option>
                            <option value="#">LG U+</option>
                            <option value="#">알뜰폰</option>
                        </select>
                        <label for="info-mobile-number" class="ui-hidden-accessible">휴대전화 번호</label>
                        <input type="number" name="#" id="info-mobile-number" placeholder="휴대전화 번호" pattern="[0-9]+">
                        <button type="button">본인인증</button>
                        <p class="help-block">
                            bbb언어봉사는 휴대전화를 통해 이루어 집니다.<br>
                            정확한 번호를 기재하시기 바랍니다.
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend>자택전화</legend>
                        <label for="info-phone-number" class="ui-hidden-accessible">자택 전화번호</label>
                        <input type="number" name="#" id="info-phone-number" placeholder="자택 전화번호" pattern="[0-9]+">
                    </fieldset>
                    <fieldset>
                        <legend class="required">이메일</legend>
                        <label for="info-email" class="ui-hidden-accessible">이메일</label>
                        <input type="email" name="#" id="info-email" placeholder="이메일">
                        <button type="button">중복확인</button>
                    </fieldset>
                    <fieldset>
                        <legend class="required">주소</legend>
                        <label for="info-addr-zipcode" class="ui-hidden-accessible">우편번호</label>
                        <input type="text" name="#" id="info-addr-zipcode" placeholder="우편번호(자동입력)" disabled>
                        <button type="button">우편번호 검색</button>
                        <label for="info-addr-default" class="ui-hidden-accessible">기본주소</label>
                        <input type="text" name="#" id="info-addr-default" placeholder="도로명주소(자동입력)" disabled>
                        <label for="info-addr-details" class="ui-hidden-accessible">상세주소</label>
                        <input type="text" name="#" id="info-addr-details" placeholder="상세주소를 입력해 주세요">
                    </fieldset>
                    <fieldset>
                        <legend>학력</legend>
                        <label for="info-last-scholl" class="ui-hidden-accessible">최종졸업학교</label>
                        <input type="text" name="#" id="info-last-scholl" placeholder="최종졸업학교">
                        <label for="info-major" class="ui-hidden-accessible">전공</label>
                        <input type="text" name="#" id="info-major" placeholder="전공">
                        <label for="info-graduate-year" class="ui-hidden-accessible">졸업년도</label>
                        <input type="number" name="#" id="info-graduate-year" placeholder="졸업년도(예:2015)" pattern="[0-9]{4}">
                    </fieldset>
                    <fieldset>
                        <legend class="required">직업/직종</legend>
                        <label for="info-job" class="select ui-hidden-accessible">직업/직종</label>
                        <select name="#" id="info-job" data-native-menu="true" data-icon="false">
                            <option value="#">직업/직종 선택</option>
                            <option value="#"></option>
                            <option value="#"></option>
                            <option value="#"></option>
                            <option value="#"></option>
                        </select>
                    </fieldset>
                    <div class="btn-area">
                        <div class="ui-grid-a">
                            <div class="ui-block-a"><button type="submit" class="btn-primary">확인</button></div>
                            <div class="ui-block-b"><a href="/mypage_main.php" class="ui-btn btn-of-form">취소</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>