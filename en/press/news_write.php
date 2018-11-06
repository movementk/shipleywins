<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
<link rel="stylesheet" href="/en/assets/css/press.css">

</head>
<body class="sub press">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/nav.php'); ?>
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <ul class="page-list">
                <li class="active"><a href="/en/press/news_list.php">Shipley News<span></span></a></li>
                <li><a href="/en/press/press_list.php">Press Release<span></span></a></li>
            </ul>
            <div class="page-summary">
                <h2>Shipley News</h2>
            </div>
        </div>
    </div>
    <!-- //Page Header -->
    
    <!-- Content Start -->
    <main id="content" class="bulletin-write news-write">
        <article class="list">
            <div class="container">
                <div class="article-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><label for="u-writer">작성자</label></th>
                                        <td class="user-name">
                                            <div class="form-group">
                                                <input type="text" id="u-writer" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td class="user-pw">
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="align-top"><label for="u-content">내용</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>첨부파일</th>
                                        <td class="attach">
                                            <div class="form-group">
                                                <input type="text" id="attach" class="form-control">
                                                <label for="attach">찾아보기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-xs btn-gray" role="button">취소</a>
                                <button type="submit" class="btn btn-xs btn-blue">완료</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>
    <!-- //Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>