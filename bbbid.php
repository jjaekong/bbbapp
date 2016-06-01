<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub bbbid">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">bbb id</h1>
            <a href="#profileUpload" class="btn-camera" data-rel="popup" data-transition="pop"><img src="/images/ico_camera.png" alt="프로필 사진 올리기"></a>
        </div>
        <div role="main" class="ui-content">
            <h2 class="ui-title" role="heading" aria-level="1"><img src="/images/logo.png" alt="비비비 코리아"></h2>
            <div class="content">
                <div class="profile">
                    <figure>
                        <img src="/images/dummy/img_profile.jpg" alt="프로필 사진">
                    </figure>
                    <dl>
                        <dt>성명</dt>
                        <dd>공수아</dd>
                        <dt>언어</dt>
                        <dd>말레이시아어</dd>
                        <dt>봉사자 승급일</dt>
                        <dd>2013년 12월 20일</dd>
                    </dl>
                </div>
                <div class="cert">
                    <p>위와 같이 bbb봉사자로 활동하고<br>있음을 증명합니다.</p>
                    <p>2016년 3월 18일</p>
                    <p>사단법인 비비비(BBB)코리아</p>
                </div>
            </div>
        </div>
        
        <div data-role="popup" id="profileUpload" data-overlay-theme="b">
            <form>
                <label for="profile-file">사진업로드</label>
                <input type="file" name="#" id="profile-file">
                <div class="btn-area">
                    <div class="ui-grid-a">
                        <div class="ui-block-a"><button type="submit" class="btn-primary">확인</button></div>
                        <div class="ui-block-b"><a href="#" class="ui-btn btn-of-form" data-rel="back">취소</a></div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>