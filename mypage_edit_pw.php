<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub mypage edit-pw">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">비밀번호 수정</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="section-header">
                <h2><img src="/images/logo_black.png" alt="비비비 코리아"></h2>
                <p>비밀번호를 변경해 주세요!</p>
            </div>
            <div class="edit-pw-form">
                <form>
                    <fieldset>
                        <legend>현재 비밀번호</legend>
                        <label for="pw-now" class="ui-hidden-accessible">현재 비밀번호</label>
                        <input type="password" name="#" id="pw-now" placeholder="">
                    </fieldset>
                    <fieldset>
                        <legend>새로운 비밀번호</legend>
                        <label for="pw-new" class="ui-hidden-accessible">새로운 비밀번호</label>
                        <input type="password" name="#" id="pw-new" placeholder="">
                    </fieldset>
                    <fieldset>
                        <legend>비밀번호 확인</legend>
                        <label for="pw-repeat" class="ui-hidden-accessible">비밀번호 확인</label>
                        <input type="password" name="#" id="pw-repeat" placeholder="">
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