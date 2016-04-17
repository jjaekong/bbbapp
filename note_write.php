<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub note write">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">쪽지</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="section-header">
                <h2><img src="/images/logo.png" alt="비비비 코리아"></h2>
                <p>궁금한 사항에 대해 자유롭게 문의하세요!</p>
            </div>
            <div class="note-form">
                <form>
                    <p>
                        <label for="note-name" class="ui-hidden-accessible">제목</label>
                        <input type="text" name="" id="note-name" placeholder="제목">
                    </p>
                    <p>
                        <label for="note-text" class="ui-hidden-accessible">내용</label>
                        <textarea cols="40" rows="20" name="" id="note-text" placeholder="내용"></textarea>
                    </p>
                    <p>
                        <button type="submit" class="ui-btn btn-submit btn-of-form">쪽지 보내기</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>