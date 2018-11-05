<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">

</head>
<body class="sub admin">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/nav.php'); ?>
    <!-- Page Header -->
    <div class="page-header"></div>
    <!-- //Page Header -->
    
    <!-- Content Start -->
    <main id="content" class="login">
        <div class="container">
            <h2>관리자 로그인</h2>
            <div class="login-form">
                <form action="#">
                    <div class="form-group">
                        <input type="text" id="u-id" class="form-control" placeholder="아이디">
                        <label for="u-id" class="sr-only">아이디</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                        <label for="u-id" class="sr-only">비밀번호</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-blue">로그인</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- //Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>