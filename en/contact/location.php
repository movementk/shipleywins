<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
<link rel="stylesheet" href="/en/assets/css/contact.css">

</head>
<body class="sub contact">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/nav.php'); ?>
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <ul class="page-list">
                <li><a href="/en/contact/faq_list.php">FAQ<span></span></a></li>
<!--                <li><a href="#">인재 채용<span></span></a></li>-->
                <li class="active"><a href="/en/contact/location.php">찾아오시는 길<span></span></a></li>
            </ul>
            <div class="page-summary">
                <h2>찾아오시는 길</h2>
            </div>
        </div>
    </div>
    <!-- //Page Header -->
    
    <!-- Content Start -->
    <main id="content" class="location">
        <div class="container">
            <div class="map">
                <img src="/en/assets/images/contact/img_maps.jpg" class="img-responsive" alt="">
            </div>
            <div class="table-wrap">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>주소</th>
                            <td><address>서울시 중구 순화동 216 AIA타워 16층</address></td>
                        </tr>
                        <tr>
                            <th>전화번호</th>
                            <td>
                                <p><i class="icon-phone"></i>쉬플리 대표번호 02-862-8450</p>
                                <p><i class="icon-phone"></i>쉬플리 디자인팀 02-862-8451</p>
                            </td>
                        </tr>
                        <tr>
                            <th>FAX</th>
                            <td><p><i class="icon-fax"></i>02-862-8454</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- //Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>