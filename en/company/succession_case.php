<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
<link rel="stylesheet" href="/en/assets/css/company.css">

</head>
<body class="sub company">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/nav.php'); ?>
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <ul class="page-list">
                <li><a href="/en/company/greeting.php">CEO's Message<span></span></a></li>
                <li><a href="/en/company/introduce.php">Company introduction<span></span></a></li>
                <li><a href="/en/company/history.php">Major History of Shipley Korea<span></span></a></li>
                <li><a href="/en/company/partner.php">Client company<span></span></a></li>
                <li class="active"><a href="/en/company/succession_case.php">Customer message<span></span></a></li>
            </ul>
            <div class="page-summary">
                <h2>Client company</h2>
            </div>
        </div>
    </div>
    <!-- //Page Header -->
    
    <!-- Content Start -->
    <main id="content" class="succession-case">
        <div class="container">
            <div class="sub-nav dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="sub-nav-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    방위/항공
                </button>
                <ul class="dropdown-menu" aria-labelledby="sub-nav-menu">
                    <li class="active"><a href="#">방위/항공</a></li>
                    <li><a href="#">SI/IT/통신</a></li>
                    <li><a href="#">제조</a></li>
                    <li class="space"><a href="#">건설/<br class="hidden-xs">엔지니어링</a></li>
                    <li><a href="#">금융</a></li>
                    <li><a href="#">식음료/급식</a></li>
                    <li><a href="#">면세</a></li>
                    <li><a href="#">컨설팅</a></li>
                    <li><a href="#">제약/바이오</a></li>
                    <li><a href="#">환경/에너지</a></li>
                    <li><a href="#">공공/협회</a></li>
                    <li><a href="#">기타 서비스</a></li>
                </ul>
            </div>
            
            <article>
                <div class="article-header">
                    <h3>방위/항공</h3>
                </div>
                <div class="article-content">
                    <div class="content-view-list">
                        <h4>국내 사례</h4>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="content-view-list">
                        <h4>해외 사례</h4>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <img src="/en/assets/images/company/img_success.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <!-- //Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>