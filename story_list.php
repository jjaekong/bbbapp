<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub story list">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">봉사 이야기</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="section-header">
                <h2><img src="/images/logo.png" alt="비비비 코리아"></h2>
                <p>봉사자들의 소중한 마음을 기다립니다.</p>
                <a href="/story_write.php" data-transition="pop" class="ui-btn btn-write-story btn-primary">작성하기</a>
            </div>
            <div data-role="tabs" class="story-tabs">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#all-story">전체보기</a></li>
                        <li><a href="#my-story">내가 작성한 글 보기</a></li>
                    </ul>
                </div>
                <div id="all-story" class="story-list">
                    <ul>
                        <li>
                            <a href="/story_view.php" data-transition="pop">
                                <span class="label">[공항 | 사건/사고]</span>
                                <h4>인천 공항 세관에서 온 전화입니다.</h4>
                                <ul>
                                    <li>배은정</li>
                                    <li>영어</li>
                                    <li>2016.03.19</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/story_view.php" data-transition="pop">
                                <span class="label">[휴대폰 관련 | 행정처리]</span>
                                <h4>휴대폰 개통 본인인증 안내</h4>
                                <ul>
                                    <li>유철호</li>
                                    <li>영어</li>
                                    <li>2016.03.09</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/story_view.php" data-transition="pop">
                                <span class="label">[택시 | 기타]</span>
                                <h4>외국인의 친구 찾기</h4>
                                <ul>
                                    <li>배은정</li>
                                    <li>중국어</li>
                                    <li>2016.03.19</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                    <p class="btn-area">
                        <a href="#" class="ui-btn btn-more btn-linear">더보기(1/10)</a>
                    </p>
                </div>
                <div id="my-story" class="story-list">
                    <ul>
                        <li>
                            <a href="/story_view.php" data-transition="pop">
                                <span class="label">[공항 | 사건/사고]</span>
                                <h4>인천 공항 세관에서 온 전화입니다.2222</h4>
                                <ul>
                                    <li>배은정</li>
                                    <li>영어</li>
                                    <li>2016.03.19</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/story_view.php" data-transition="pop">
                                <span class="label">[휴대폰 관련 | 행정처리]</span>
                                <h4>휴대폰 개통 본인인증 안내</h4>
                                <ul>
                                    <li>유철호</li>
                                    <li>영어</li>
                                    <li>2016.03.09</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/story_view.php" data-transition="pop">
                                <span class="label">[택시 | 기타]</span>
                                <h4>외국인의 친구 찾기</h4>
                                <ul>
                                    <li>배은정</li>
                                    <li>중국어</li>
                                    <li>2016.03.19</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                    <p class="btn-area">
                        <a href="#" class="ui-btn btn-more btn-linear">더보기(1/10)</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>