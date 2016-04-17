<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="login">
        <div id="header" data-role="header">
            <h1 class="logo"><img src="/images/logo_lg.png" width="130" alt="비비비 코리아"></h1>
            <p>봉사자를 위한 특별한 공간</p>
        </div>
        <div role="main" class="ui-content">
            <div class="login-form">
                <form>
                    <fieldset>
                        <label for="login-id" class="ui-hidden-accessible">아이디</label>
                        <input type="text" name="#" id="login-id" placeholder="아이디">
                        <label for="login-pw" class="ui-hidden-accessible">비밀번호</label>
                        <input type="password" name="#" id="login-pw" placeholder="비밀번호">
                    </fieldset>
                    <p class="help-find">
                        <a href="/find.php" data-ajax="false">아이디/비밀번호 찾기</a>
                    </p>
                    <p class="btn-area">
                       <button type="submit" class="btn-primary">로그인</button> 
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>