<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">

</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav.php'); ?>
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <ul class="page-list">
                <li class="active"><a href="#">CEO's Message<span></span></a></li>
                <li><a href="#">회사소개<span></span></a></li>
                <li><a href="#">실적 및 연혁<span></span></a></li>
                <li><a href="#">고객사<span></span></a></li>
                <li><a href="#">성공사례<span></span></a></li>
            </ul>
            <div class="page-summary">
                <h2>실적 및 연혁</h2>
            </div>
        </div>
    </div>
    <!-- //Page Header -->
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            
            <!-- sub-nav -->
            <div class="sub-nav dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="sub-nav-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    방위/항공
                </button>
                <ul class="dropdown-menu" aria-labelledby="sub-nav-menu">
                    <li><a href="#">방위/항공</a></li>
                    <li><a href="#">SI/IT/통신</a></li>
                    <li><a href="#">제조</a></li>
                    <li class="space"><a href="#">건설/<br class="hidden-xs">엔지니어링</a></li>
                    <li><a href="#">금융</a></li>
                    <li><a href="#">식음료/급식</a></li>
                    <li><a href="#">면세</a></li>
                    <li class="active"><a href="#">컨설팅</a></li>
                    <li><a href="#">제약/바이오</a></li>
                    <li><a href="#">환경/에너지</a></li>
                    <li><a href="#">공공/협회</a></li>
                    <li><a href="#">기타 서비스</a></li>
                </ul>
            </div>
            
            <br><br><br>
            
            <!-- 검색폼 -->
            <div class="search-form">
                <form action="#">
                    <div class="form-group">
                        <select class="form-control">
                            <option>제목</option>
                            <option>내용</option>
                        </select>
                        <input type="text" id="search" class="form-control">
                        <label for="search" class="sr-only">검색하기</label>
                    </div>
                    <button type="submit" class="btn btn-search">
                        <i class="icon-search">
                            <span class="sr-only">검색버튼</span>
                        </i>
                    </button>
                </form>
            </div>
            
            <br><br><br>
            
            <!-- 게시판 리스트 -->
            <div class="table-wrap board-list">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>제목</th>
                            <th>글쓴이</th>
                            <th>등록일</th>
                            <th>조회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>152</td>
                            <td class="subject"><a href="#">D조선, A사 잠수체계사업 성공사례 감사편지</a></td>
                            <td>Shipleykorea</td>
                            <td>2015.06.08</td>
                            <td>700</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <br><br><br>
            
            <!-- 게시판 뷰 -->
            <article class="board-view">
                <div class="article-header">
                    <h3 class="title">[교육] KC솔라에너지 수주율 향상 특강</h3>
                    <div class="writer-info">
                        <ul>
                            <li>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>Shipleykorea</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>조회</dt>
                                    <dd>1,524</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>작성일</dt>
                                    <dd>2017.06.12</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="article-content">
                    <figure>
                        <img src="/assets/images/sub/view_img.jpg" class="img-responsive" alt="">
                    </figure>
                </div>
                <div class="attach">
                    <dl>
                        <dt>첨부파일</dt>
                        <dd>
                            <a href="#">첨부된 파일명.PDF</a>
                            <a href="#">첨부된 파일명.PDF</a>
                            <a href="#">첨부된 파일명.PDF</a>
                        </dd>
                    </dl>
                </div>
                <div class="article-footer">
                    <ul>
                        <li>
                            <dl>
                                <dt>이전글</dt>
                                <dd><a href="#">멀티링크 문의드립니다.</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>다음글</dt>
                                <dd><a href="#">문의드립니다.</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </article>
            
            <br><br><br>
            
            <!-- Nav tabs -->
            <div class="consulting-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#consulting-1" aria-controls="consulting-1" role="tab" data-toggle="tab">사업수주</a>
                    </li>
                    <li role="presentation" class="space">
                        <a href="#consulting-2" aria-controls="consulting-2" role="tab" data-toggle="tab">해외 제안서<br class="visible-xs"> 개발 역량 강화</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="consulting-1">
                        <ol class="square-list">
                            <li>
                                <span>1</span>
                                <strong>전략적 초점이 명확한 제안서 개발</strong>
                                <p>
                                    단순히 RFP(Request For Proposal: 제안요청서)에서 요구하는 내용을 채우는데 급급한 제안서가 아니라, 전략적인 제안서 즉, 고객의 공식적/비공식적 이슈에 대해 경쟁사와의 구도 속에서 전략적 초점이 명확한 제안서를 개발하여 사업 수주 가능성을 극대화 합니다.
                                </p>
                            </li>
                        </ol>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="consulting-2">
                        content 내용 2
                    </div>
                </div>
            </div>
            
            <br><br><br>
            
            <div class="expect-effect">
                <div class="order-business">
                    <h5>사업 수주</h5>
                    <ol class="square-list">
                        <li>
                            <span>1</span>
                            <strong>전략적 초점이 명확한 제안서 개발</strong>
                            <p>
                                단순히 RFP(Request For Proposal: 제안요청서)에서 요구하는 내용을 채우는데 급급한 제안서가 아니라, 전략적인 제안서 즉, 고객의 공식적/비공식적 이슈에 대해 경쟁사와의 구도 속에서 전략적 초점이 명확한 제안서를 개발하여 사업 수주 가능성을 극대화 합니다. 
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="reinforcement-capacity">
                    <h5>역량 강화</h5>
                    <ol class="square-list">
                        <li>
                            <span>1</span>
                            <strong>전략적 초점이 명확한 제안서 개발</strong>
                            <p>
                                단순히 RFP(Request For Proposal: 제안요청서)에서 요구하는 내용을 채우는데 급급한 제안서가 아니라, 전략적인 제안서 즉, 고객의 공식적/비공식적 이슈에 대해 경쟁사와의 구도 속에서 전략적 초점이 명확한 제안서를 개발하여 사업 수주 가능성을 극대화 합니다. 
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
            
            <br><br><br>
            
            <nav class="paging" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="first">
                        <a href="#" aria-label="Previous">
                            <i class="icon-angle-left">
                                <span class="sr-only">처음</span>
                            </i>
                        </a>
                    </li>
                    <li class="prev">
                        <a href="#" aria-label="Previous">
                            <i class="icon-angle-double-left">
                                <span class="sr-only">이전</span>
                            </i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="hidden-xs"><a href="#">6</a></li>
                    <li class="hidden-xs"><a href="#">7</a></li>
                    <li class="hidden-xs"><a href="#">8</a></li>
                    <li class="hidden-xs"><a href="#">9</a></li>
                    <li class="hidden-xs"><a href="#">10</a></li>
                    <li class="next">
                        <a href="#" aria-label="Next">
                            <i class="icon-angle-right">
                                <span class="sr-only">다음</span>
                            </i>
                        </a>
                    </li>
                    <li class="last">
                        <a href="#" aria-label="Next">
                            <i class="icon-angle-double-right">
                                <span class="sr-only">마지막</span>
                            </i>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- tab panel -->
            <div class="tab-panel">
                <div class="consulting-panel">
                    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapse-consulting-1" aria-expanded="false" aria-controls="collapse-consulting-1">
                        컨설팅 문의하기
                    </a>
                    <div class="collapse in" id="collapse-consulting-1">
                        <div class="well">
                            <div class="inquire">
                                <div class="details">
                                    <figure class="hidden-xs">
                                        <img src="/assets/images/abroad_consulting/img_inquire.gif" alt="">
                                    </figure>
                                    <p>
                                        컨설팅 문의를 직접 하시고자 하시는 분들을 위해 1:1 문의를 통해 자세한 답변을 드리고 있습니다.
                                    </p>
                                    <dl>
                                        <dt>김준연 팀장</dt>
                                        <dd>
                                            <ul>
                                                <li><i class="icon-phone"></i>010-9903-9386</li>
                                                <li><i class="icon-mail"></i><a href="mailto:jamie@shipleywins.co.kr">jamie@shipleywins.co.kr</a></li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="consulting-panel">
                    <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#collapse-consulting-2" aria-expanded="false" aria-controls="collapse-consulting-2">
                        성공사례 보기
                    </a>
                    <div class="collapse" id="collapse-consulting-2">
                        <div class="well">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- //Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>