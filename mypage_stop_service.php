<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub mypage stop-service">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">봉사 불가능 시간 / 중지 설정</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="section-header">
                <h2><img src="/images/logo_black.png" alt="비비비 코리아"></h2>
                <p><i>공수아</i> 님은 현재 봉사자로<br><i>활동 중</i>이십니다!</p>
            </div>
            <div class="disable-service-form">
                <form>
                    <fieldset>
                        <legend>봉사 불가능 시간</legend>
                        <label for="disable-from" class="ui-hidden-accessible">봉사 불가능 시간(부터)</label>
                        <input type="number" name="#" id="disable-form" placeholder="부터" pattern="[0-9]{1,2}">
                        <label for="disable-to" class="ui-hidden-accessible">봉사 불가능 시간(까지)</label>
                        <input type="number" name="#" id="disable-to" placeholder="까지" pattern="[0-9]{1,2}">
                        <p class="help-block">봉사 불가능 시간은 하루 8시간 이상 지정 할 수 없습니다.</p>
                    </fieldset>
                    <div class="btn-area">
                        <button type="submit" class="btn-primary">적용</button>
                    </div>
                </form>
            </div>
            <div class="stop-service-form">
                <form>
                    <fieldset>
                        <legend>봉사 중지 설정</legend>
                        <p class="info-block">
                            2번째 봉사 중지를 위해서는 bbb의 승인이 필요합니다.<br>
                            신중하게 결정해 주시기 바랍니다.
                        </p>
                        <label for="stop-date">중지 날짜</label>
                        <input type="date" name="#" id="stop-date" placeholder="">
                        <label for="stop-period">중지 기간</label>
                        <select name="#" id="stop-period" data-native-menu="true" data-icon="false">
                            <option value="#">1개월</option>
                            <option value="#">2개월</option>
                            <option value="#">3개월</option>
                            <option value="#">4개월</option>
                            <option value="#">5개월</option>
                            <option value="#">6개월</option>
                            <option value="#">7개월</option>
                            <option value="#">8개월</option>
                            <option value="#">9개월</option>
                            <option value="#">10개월</option>
                            <option value="#">11개월</option>
                            <option value="#">12개월</option>
                        </select>
                        <p class="help-block">봉사 중지는 최대 12개월을 넘을 수 없습니다.</p>
                    </fieldset>
                    <div class="btn-area">
                        <button type="submit" class="btn-primary">비밀번호 변경</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>