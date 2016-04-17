<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub news list">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">bbb 소식통</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="news-list">
                <ul>
                    <li>
                        <a href="/news_view.php" data-transition="pop">
                            <figure>
                                <img src="/images/dummy/img_news_item.jpg" alt="">
                            </figure>
                            <h4>상상 그 이상의 아이디어로 通(통)하라!</h4>
                            <small>2016. 02. 18</small>
                        </a>
                    </li>
                    <li>
                        <a href="/news_view.php" data-transition="pop">
                            <figure>
                                <img src="/images/dummy/img_news_item.jpg" alt="">
                            </figure>
                            <h4> 상상 그 이상의 아이디어로 通(통)하라! 상상 그 이상의 아이디어로 通(통)하라! 상상 그 이상의 아이디어로 通(통)하라!</h4>
                            <small>2016. 02. 18</small>
                        </a>
                    </li>
                </ul>
                <p class="btn-area">
                    <a href="#" class="ui-btn btn-more btn-linear">더보기(1/10)</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>