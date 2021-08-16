<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>صفحه اصلی</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if IE]>
    <style type="text/css">.pie {
        behavior: url(PIE.htc);
    }</style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-menu">
    <div class="container">
        <ul>
            <li><a href="index.php">صفحه اصلی</a></li>
            <li><a href="category.html">دسته بندی</a></li>
            <li><a href="user/register.html">ثبت نام</a></li>
            <li><a href="user/login.html">ورود</a></li>
        </ul>
    </div>
</div>
<div class="top-section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="img/logo1.png" alt="" class="logo">
            </div>
            <div class="col-md-5">
                <form method="" action="" class="search-form">
                    <input type="text" name="" placeholder="جستجو کنید ...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-md-5">
                <div class="index-h1">
                    <h1>هوشیکا</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<center>
    <p style="font-size: 16px;color: #444;">آخرین مطالب وبلاگ</p>
</center>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <div class="sidebar-social">
                    <ul>
                        <li>
                            <a href="https://gap.im/HOOSH" class="telegram">دنبال کردن در گپ</a>
                        </li>
                    </ul>
                </div>
                <div class="category-sidebar">
                    <span><i class="fa fa-bookmark"></i>دسته بندی معما ها</span>
                    <ul>
                        <li><a href="category/jenaei.php">جنایی</a></li>
                        <li><a href="category/math.php">ریاضی</a></li>
                        <li><a href="category/testhoosh.php">تست هوش</a></li>
                        <li><a href="category/sudoko.php">سودوکو</a></li>
                        <li><a href="category/chistan.php">چیستان</a></li>
                        <li><a href="category/mafhoumi.php">مفهومی</a></li>
                    </ul>
                </div>
                <div class="category-sidebar ads-sidebar">
                    <span><i class="fa fa-slack"></i>تبلیغات</span>
                    <ul>
                        <li>
                            <a href="#">

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <figure>
                                <img src="img/slide/Slide1.jpg" alt="">
                                <figcaption></figcaption>
                            </figure>
                            <div class="carousel-caption">
                                <h3>طراحی وب</h3>
                                <p>طراحی وب رو از همین امروز شروع کن</p>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="img/slide/Slide1.jpg" alt="">
                                <figcaption></figcaption>
                            </figure>
                            <div class="carousel-caption">
                                <a href="">
                                    <h3>چرا شاد نباشیم</h3>
                                    <p>مجموعه مقالات روانشناسی سارتر</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
            mysqli_set_charset($conn, 'utf8');
            if ($conn) {
                $post = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM post"));
            }
            foreach ($post as $item) {
                $user = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM users WHERE id = '$item[4]'"));
                if ($item[6] == 1) {
                    ?>

                    <div class="col-md-4">
                        <a href="single.php/?id=<?= $item[0] ?>">
                            <div class="post-content">
                                <figure>
                                    <img src="<?= $item['1'] ?>">
                                    <figcaption class="hover-fig">
                                        <i class="fa fa-plus"></i>
                                    </figcaption>
                                    <figcaption class="date-fig">
                                        <span><?= $user[0][1] ?></span>
                                        <i class="fa fa-date"></i>
                                    </figcaption>
                                </figure>
                                <H1><?= $item['2'] ?></H1>
                                <p><?= mb_strimwidth($item['3'], 0, 25, '...') ?></p>
                            </div>
                        </a>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>
<br><br>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-contact">
                    <span class="footer-title">چگونه با ما در تماس باشید</span>
                    <ul>
                        <li><a href="#" title="09175694487" data-toggle="tooltip"><i class="fa fa-phone"></i></a></li>
                        <li><a href="#" title="قم " data-toggle="tooltip"><i class="fa fa-map-marker"></i></a></li>
                        <li><a href="#" title="fooladereza@gmail.com" data-toggle="tooltip"><i
                                        class="fa fa-envelope-o"></i></a>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-random-posts">
                    <span class="footer-title">شاید این مطالب را بپسندید</span>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="footer-random-posts-body">
                                <figure>
                                    <img src="img/blog/blog4.jpg" alt="">
                                </figure>
                                <h4>دوچرخه سواری و استقامت</h4>
                                <span><i class="fa fa-calendar-o"></i>98/8/7</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="footer-random-posts-body">
                                <figure>
                                    <img src="img/blog/blog7.jpg" alt="">
                                </figure>
                                <h4>ورزش و سلامتی </h4>
                                <span><i class="fa fa-calendar-o"></i>98/8/7</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="footer-random-posts-body">
                                <figure>
                                    <img src="img/blog/blog7.jpg" alt="">
                                </figure>
                                <h4>آیا تنیس قدرت بدنی بالایی نیاز دارد؟</h4>
                                <span><i class="fa fa-calendar-o"></i>98/8/7</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="footer-random-posts-body">
                                <figure>
                                    <img src="img/blog/blog4.jpg" alt="">
                                </figure>
                                <h4>طبیعت گردی در روح انسان چه تاثیری دارد ؟</h4>
                                <span><i class="fa fa-calendar-o"></i>98/8/7</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <center>
            <p>تمامی حقوق مادی و معنوی این سایت متعلق به الکوب می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد</p>
        </center>
    </div>
</div>
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/jquery.particleground.js"></script>
<script>
    jQuery("[data-toggle='tooltip']").tooltip();
    jQuery('.footer').particleground({
        dotColor: '#515151',
        lineColor: '#515151'
    });
</script>
</body>
</html>