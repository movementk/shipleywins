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
                <li><a href="/en/company/introduce.php">회사소개<span></span></a></li>
                <li><a href="/en/company/history.php">Major History of Shipley Korea<span></span></a></li>
                <li class="active"><a href="/en/company/partner.php">고객사<span></span></a></li>
<!--                <li><a href="/en/company/succession_case.php">성공사례<span></span></a></li>-->
            </ul>
            <div class="page-summary">
                <h2>고객사</h2>
            </div>
        </div>
    </div>
    <!-- //Page Header -->
    
    <!-- Content Start -->
    <main id="content" class="partner">
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
            
            <article class="partner-list">
                <div class="article-header">
                    <h3>방위/항공</h3>
                </div>
                <ul class="row">
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner01.gif" class="img-responsive" alt="롯데면세점">
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner02.gif" class="img-responsive" alt="호텔신라">
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner03.gif" class="img-responsive" alt="참존">
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner04.gif" class="img-responsive" alt="리젠">
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner05.gif" class="img-responsive" alt="SK 네트웍스">
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner06.gif" class="img-responsive" alt="이랜드">
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                            <img src="/en/assets/images/company/img_partner07.gif" class="img-responsive" alt="엔타스 듀티프리">
                        </div>
                    </li>
                </ul>
            </article>
        </div>
    </main>
    <!-- //Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>