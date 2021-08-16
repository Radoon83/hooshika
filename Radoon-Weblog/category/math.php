<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>ریاضی</title>
    <link href="http://localhost/radoon-weblog/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/radoon-weblog/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
    <link href="http://localhost/radoon-weblog/css/style.css" rel="stylesheet" type="text/css">
    <!--[if IE]>
    <style type="text/css">.pie {behavior:url(PIE.htc);}</style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src=http://localhost/radoon-weblog/js/respond-1.1.0.min.js"></script>
    <script src="http://localhost/radoon-weblog/js/html5shiv.js"></script>
    <script src="http://localhost/radoon-weblog/js/html5element.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-menu">
    <div class="container">
        <ul>
            <li><a href="../index.php">صفحه اصلی</a></li>
            <li><a href="../category.html">دسته بندی</a></li>
            <li><a href="../user/register.html">ثبت نام</a></li>
            <li><a href="../user/login.html">ورود</a></li>
        </ul>
    </div>
</div>
<div class="top-section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="http://localhost/radoon-weblog/img/logo1.png" alt="" class="logo">
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
    <p style="font-size: 16px;color: #444;">ریاضی</p>
</center>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
<!--                <div class="sidebar-text">-->
<!--                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>-->
<!--                </div>-->
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
                        <li><a href="jenaei.php">جنایی</a></li>
                        <li><a href="math.php">ریاضی</a></li>
                        <li><a href="testhoosh.php">تست هوش</a></li>
                        <li><a href="sudoko.php">سودوکو</a></li>
                        <li><a href="chistan.php">چیستان</a></li>
                        <li><a href="mafhoumi.php">مفهومی</a></li>
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

                </div>
            </div>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
            mysqli_set_charset($conn, 'utf8');
            if ($conn) {
                $post = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM post WHERE category = 'math'"));
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
                                <p><?= mb_strimwidth($item['3'], 0, 50, '...') ?></p>
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
                        <li><a href="#" title="fooladereza@gmail.com" data-toggle="tooltip"><i class="fa fa-envelope-o"></i></a>
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
                                    <img src="http://localhost/radoon-weblog/img/blog/blog4.jpg" alt="">
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
                                    <img src="http://localhost/radoon-weblog/img/blog/blog7.jpg" alt="">
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
                                    <img src="http://localhost/radoon-weblog/img/blog/blog7.jpg" alt="">
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
                                    <img src="http://localhost/radoon-weblog/img/blog/blog4.jpg" alt="">
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
            <p>حقوق انتشار برای وب سایت محفوظ است - قالب seo90.ir</p>
        </center>
    </div>
</div>
<script type="text/javascript" src="http://localhost/radoon-weblog/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="http://localhost/radoon-weblog/js/bootstrap.js"></script>
<script type="text/javascript" src="http://localhost/radoon-weblog/js/wow.js"></script>
<script type="text/javascript" src="http://localhost/radoon-weblog/js/jquery.particleground.js"></script>
<script>
    jQuery("[data-toggle='tooltip']").tooltip();
    jQuery('.footer').particleground({
        dotColor: '#515151',
        lineColor: '#515151'
    });
</script>
</body>

</html>