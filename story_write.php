<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub story write" id="story-write">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">봉사 이야기</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="story-form">
                <form action="#" method="post">
                    <label for="story-region" class="select ui-hidden-accessible">지역</label>
                    <select name="#" id="story-region" data-native-menu="true" data-icon="false">
                        <option value="#">지역</option>
                        <option value="#">서울</option>
                        <option value="#">인천</option>
                        <option value="#">경기</option>
                        <option value="#">강원</option>
                    </select>
                    
                    <label for="story-place" class="select ui-hidden-accessible">지역</label>
                    <select name="#" id="story-place" data-native-menu="true" data-icon="false">
                        <option value="#">장소</option>
                    </select>
                    
                    <label for="story-type" class="select ui-hidden-accessible">지역</label>
                    <select name="#" id="story-type" data-native-menu="true" data-icon="false">
                        <option value="#">유형</option>
                    </select>
                    
                    <label for="story-date" class="ui-hidden-accessible">날짜</label>
                    <input type="date" name="#" id="story-date">
                    
                    <label for="story-attach" class="ui-hidden-accessible">첨부파일</label>
                    <input type="file" name="#" id="story-attach">

                    <label for="story-title" class="ui-hidden-accessible">제목</label>
                    <input type="text" name="#" id="story-title" placeholder="제목">

                    <label for="story-content" class="ui-hidden-accessible">내용</label>
                    <textarea cols="40" rows="20" name="#" id="story-content" placeholder="내용"></textarea>
                    
                    <p>
                        <button type="submit" class="ui-btn btn-submit btn-primary">작성하기</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>