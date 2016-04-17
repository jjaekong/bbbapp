<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub mypage set-config">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">어플리케이션 설정</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="confirm-form">
                <form>
                    <div class="ui-field-contain">
                        <label for="set-alarm">소식통 알람</label>
                        <div class="flipswitch-wrap">
                            <input type="checkbox" data-role="flipswitch" name="#" id="set-alarm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>