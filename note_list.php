<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    <div data-role="page" class="sub note list">
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
            <a href="/" class="btn-home" data-role="back"><img src="/images/ico_home.png" alt="홈"></a>
            <h1 class="ui-title" role="heading" aria-level="1">쪽지</h1>
        </div>
        <div role="main" class="ui-content">
            <div class="section-header">
                <h2><img src="/images/logo_black.png" alt="비비비 코리아"></h2>
                <p>봉사 활동 관련 문의</p>
                <a href="/note_write.php" data-transition="pop" class="ui-btn btn-send-note btn-primary">쪽지 보내기</a>
            </div>
            <div class="note-list">
                <ul data-role="listview">
                    <li data-role="collapsible" data-inset="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right">
                        <h4><span class="label no-reply">미답변</span> 봉사활동 실적이 등록되어있지 않아요!</h4>
                        <p class="question">
                            전화가 잘 오지 않습니다. 영어 봉사자 인데요.
                            한달에 한번 또는 그 이상 잘 오지 않네요; 저만 그런건지
                            확인 부탁드립니다.
                        </p>
                    </li>
                    <li data-role="collapsible" data-inset="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-nodisc-icon="true">
                        <h4><span class="label reply-ok">답변완료</span> 봉사활동 실적이 등록되어있지 않아요!</h4>
                        <p class="question">
                            전화가 잘 오지 않습니다. 영어 봉사자 인데요.
                            한달에 한번 또는 그 이상 잘 오지 않네요; 저만 그런건지
                            확인 부탁드립니다.
                        </p>
                        <div class="answer">
                            <span class="label comment">답변</span>
                            <p>
                                안녕하세요 공수아 봉사자님, bbb코리아 입니다.
                                우선 영어 봉사자님들이 많아지면서 봉사자 개인별로 돌아가는
                                통역 요청수가 감소했음을 말씀드리고 싶습니다.
                                그래서 다음 순차가 오기까지 시간이 걸릴 수 있습니다.
                            </p>
                        </div>
                    </li>
                    <li data-role="collapsible" data-inset="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-nodisc-icon="true">
                        <h4><span class="label reply-ok">답변완료</span> 봉사활동 실적이 등록되어있지 않아요!</h4>
                        <p class="question">질문입니다</p>
                        <div class="answer">
                            <span class="label comment">답변</span>
                            <p>
                                안녕하세요 공수아 봉사자님, bbb코리아 입니다.
                                우선 영어 봉사자님들이 많아지면서 봉사자 개인별로 돌아가는
                                통역 요청수가 감소했음을 말씀드리고 싶습니다.
                                그래서 다음 순차가 오기까지 시간이 걸릴 수 있습니다.
                            </p>
                        </div>
                    </li>
                    <li data-role="collapsible" data-inset="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-nodisc-icon="true">
                        <h4><span class="label reply-ok">답변완료</span> 봉사활동 실적이 등록되어있지 않아요!</h4>
                        <p class="question">질문입니다</p>
                        <div class="answer">
                            <span class="label comment">답변</span>
                            <p>
                                안녕하세요 공수아 봉사자님, bbb코리아 입니다.
                                우선 영어 봉사자님들이 많아지면서 봉사자 개인별로 돌아가는
                                통역 요청수가 감소했음을 말씀드리고 싶습니다.
                                그래서 다음 순차가 오기까지 시간이 걸릴 수 있습니다.
                            </p>
                        </div>
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