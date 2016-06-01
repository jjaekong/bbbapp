<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub mypage request-cert">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">봉사활동확인서 발급요청</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="request-cert-form">
                <form>
                    <fieldset>
                        <legend class="required">수량</legend>
                        <label for="request-quantity" class="select ui-hidden-accessible">수량</label>
                        <select name="#" id="request-quantity" data-native-menu="true" data-icon="false">
                            <option value="#">1매</option>
                            <option value="#">2매</option>
                            <option value="#">3매</option>
                        </select>
                        <p class="help-block">* 최대 3매까지 신청 가능합니다.</p>
                    </fieldset>
                    <fieldset>
                        <legend class="required">용도</legend>
                        <label for="request-quantity" class="select ui-hidden-accessible">용도</label>
                        <textarea cols="10" rows="5" placeholder="용도"></textarea>
                    </fieldset>
                    <fieldset>
                        <legend class="required">이름(국/영)</legend>
                        <label for="request-kor-name" class="ui-hidden-accessible">국문이름</label>
                        <input type="text" name="#" id="request-kor-name" placeholder="국문">
                        <label for="request-eng-name" class="ui-hidden-accessible">영문이름</label>
                        <input type="text" name="#" id="request-eng-name" placeholder="영문">
                    </fieldset>
                    <fieldset>
                        <legend class="required">생년월일</legend>
                        <label for="request-birth" class="ui-hidden-accessible">생년월일</label>
                        <input type="number" name="#" id="request-birth" placeholder="1980-01-01">
                    </fieldset>
                    <fieldset>
                        <legend>연락처</legend>
                        <label for="request-mobile" class="ui-hidden-accessible">연락처</label>
                        <input type="number" name="#" id="request-mobile" placeholder="010-1234-5678">
                    </fieldset>
                    <fieldset>
                        <legend class="required">주소</legend>
                        <label for="request-addr-zipcode" class="ui-hidden-accessible">우편번호</label>
                        <input type="text" name="#" id="request-addr-zipcode" placeholder="우편번호(자동입력)" disabled>
                        <button type="button">우편번호 검색</button>
                        <label for="request-addr-default" class="ui-hidden-accessible">기본주소</label>
                        <input type="text" name="#" id="request-addr-default" placeholder="도로명주소(자동입력)" disabled>
                        <label for="request-addr-details" class="ui-hidden-accessible">상세주소</label>
                        <input type="text" name="#" id="request-addr-details" placeholder="상세주소를 입력해 주세요">
                        <p class="help-block">* 정확한 정보가 기입되어 있는지 꼭 확인해주세요.</p>
                    </fieldset>
                    <fieldset>
                        <legend class="required">소속</legend>
                        <label for="request-workplace" class="ui-hidden-accessible">근무처(학교)</label>
                        <input type="text" name="#" id="request-workplace" placeholder="근무처(학교)">
                        <label for="request-jobtitle" class="ui-hidden-accessible">직함(학과/학년)</label>
                        <input type="text" name="#" id="request-jobtitle" placeholder="직함(학과/학년)">
                    </fieldset>
                    <fieldset>
                        <legend class="required">수령방법</legend>
                        <label for="request-method" class="select ui-hidden-accessible">수량</label>
                        <select name="#" id="request-method" data-native-menu="true" data-icon="false">
                            <option value="#">우편</option>
                            <option value="#">팩스</option>
                            <option value="#">방문</option>
                        </select>
                        <p class="help-block">* 팩스 수령 시 팩스 번호를 아래 메모에 남겨주세요.</p>
                        <p class="help-block">* 방문 수령 시 방문 일자 및 시간을 아래 메모에 남겨주세요. 방문 수령은 최소 이틀 전에는 신청 가능합니다.</p>
                    </fieldset>
                    <fieldset>
                        <legend class="required">메모</legend>
                        <label for="request-note" class="select ui-hidden-accessible">용도</label>
                        <textarea id="request-note" cols="10" rows="5" placeholder="내용을 입력해주세요"></textarea>
                        <p class="help-block">* 봉사확인서는 bbb korea의 공문이므로 스캔하여 이메일로 전송드리는 것이 불가합니다.</p>
                        <p class="help-block">* 근무처(학교)가 공란일 시 발급이 불가하오니, 졸업한 학교 등 최소 정보를 기입해주세요.</p>
                        <p class="help-block">* 봉사확인서는 발급 요청 전, 마이페이지에서 본인의 주소를 다시 한 번 확인해주세요.</p>
                        <p class="help-block">* 봉사활동 확인서 발급처리는 요청일로부터 7~10일이 소요될 수 있으니, 수령일에 있어 소요기간을 참조하시기를 바랍니다.</p>
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