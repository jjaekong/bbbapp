<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub mypage main">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">마이 페이지</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="mypage-main">
                <ul data-role="listview">
                    <li><a href="/mypage_edit_info.php">개정정보수정</a></li>
                    <li><a href="/mypage_edit_pw.php">비밀번호 변경</a></li>
                    <li><a href="/mypage_stop_service.php">봉사 불가능 시간 / 중지 설정</a></li>
                    <li><a href="/mypage_service_terms.php">봉사활동 규정</a></li>
                    <li><a href="/mypage_set_config.php">어플리케이션 설정</a></li>
                    <li><a href="/mypage_request_cert.php">봉사활동확인서 발급요청</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>