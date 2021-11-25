<?php
require_once('php/connect.php');
$sql = "SELECT * FROM `teacher` ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information Technology</title>

    <!-- Section Meta tag -->
    <?php include_once('includes/meta.php') ?>

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section Page-title -->
    <header class="jarallax" data-speed="0.5" style="background-image: url(assets/images/back.jpg);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">เกี่ยวกับเรา</h1>
            <p class="lead">"คุณไม่เก่งตั้งแต่เริ่ม แต่คุณต้องเริ่มมาเรียนกับเราก่อน ถึงจะเก่ง"</p>
        </div>
    </header>

    <!-- Section TODO -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tjNwneaMQPM?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น...</h2>
                <p>เราทำการสอนตามใจเรา</p>
                <br>
                <h3>เราคาดหวังไว้ว่า...</h3>
                <p>จะสอนนักเรียนนักเรียนทุกคนให้จบไปแล้ว ไม่เป็นภาระของสังคม</p>
            </div>
        </div>
    </section>

    <!-- Section Timeline -->
    <!-- <section class="position-relative py-5 jarallax" data-speed="0.5" style="background-image: url(https://images.unsplash.com/photo-1519241047957-be31d7379a5d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=14bceaef9e3406f4b66fb49b3b9fe736&auto=format&fit=crop&w=1350&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <img src="assets/images/logo.png" class="img-fluid" width="150" alt="">
                    <h1 class="text-white display-4 font-weight-bold">Timeline About Us</h1>
                </div>
            </div>
        </div>
    </section> -->

    <section class="container py-5">
        <div class="row g-xl-5 ">

            <?php while ($row = $result->fetch_assoc()) {  ?>

                <div class="col-md-6 d-flex align-items-center ">
                    <div class="my-5 w-75 ">
                        <img src="assets/images/profile/<?php echo $row['img'] ?>" style="width: 100%; height:400px">
                    </div>
                </div>

                <div class="col-md-6 d-flex ">
                    <div class="my-5">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab<?php echo $row['id'] ?>" data-toggle="pill" href="#pills-home<?php echo $row['id'] ?>" role="tab" aria-controls="pills-home<?php echo $row['id'] ?>" aria-selected="true">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab<?php echo $row['id'] ?>" data-toggle="pill" href="#pills-profile<?php echo $row['id'] ?>" role="tab" aria-controls="pills-profile<?php echo $row['id'] ?>" aria-selected="false">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab<?php echo $row['id'] ?>" data-toggle="pill" href="#pills-contact<?php echo $row['id'] ?>" role="tab" aria-controls="pills-contact<?php echo $row['id'] ?>" aria-selected="false">Experience</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home<?php echo $row['id'] ?>" role="tabpanel" aria-labelledby="pills-home-tab<?php echo $row['id'] ?>">
                                <h2 class="mb-3">ชื่อ-สกุล</h2>
                                <p class="mb-3 ml-3" style="font-size: 30px; color:darkslategray">คุณครู <?php echo $row['name'] ?> <?php echo $row['lastname'] ?></p>
                                <h2 class="mb-3">วุฒิการศึกษา</h2>
                                <p class="mb-3 ml-3" style="font-size: 30px; color:darkslategray;"><?php echo $row['edu_back1'] ?></p>
                                <h2 class="mb-3">เบอร์โทร</h2>
                                <p class="mb-3 ml-3" style="font-size: 30px; color:darkslategray;"><?php echo $row['tel'] ?></p>

                            </div>

                            <div class="tab-pane fade" id="pills-profile<?php echo $row['id'] ?>" role="tabpanel" aria-labelledby="pills-profile-tab<?php echo $row['id'] ?>">
                                <h2 class="mb-4">ทักษะที่เชี่ยวชาญ</h2>
                                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                                <div class="row mt-3">
                                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                        <div class="progress-wrap">
                                            <h3><?php echo $row['skills_name1'] ?></h3>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['skills_value1'] ?>%">
                                                    <span><?php echo $row['skills_value1'] ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                        <div class="progress-wrap">
                                            <h3><?php echo $row['skills_name2'] ?></h3>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['skills_value2'] ?>%">
                                                    <span><?php echo $row['skills_value2'] ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                        <div class="progress-wrap">
                                            <h3><?php echo $row['skills_name3'] ?></h3>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['skills_value3'] ?>%">
                                                    <span><?php echo $row['skills_value3'] ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                        <div class="progress-wrap">
                                            <h3><?php echo $row['skills_name4'] ?></h3>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['skills_value4'] ?>%">
                                                    <span><?php echo $row['skills_value4'] ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-contact<?php echo $row['id'] ?>" role="tabpanel" aria-labelledby="pills-contact-tab<?php echo $row['id'] ?>">
                                <p><?php echo $row['Experience'] ?></p>

                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


    </section>


    <!-- <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">6 Mar 1993</p>
                        </div>
                        <div class="timeline-card">
                            <h5>วันเกิดของเรา</h5>
                            <p class="text-muted">เกิดวันที่ 6 มีนาคม 1993 </p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">15 May 2006</p>
                        </div>
                        <div class="timeline-card">
                            <h5>เรียนโรงเรียนสายธรรมจันทร์</h5>
                            <p class="text-muted">เรียนสายศิลป์คำนวน</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">10 Aug 2012</p>
                        </div>
                        <div class="timeline-card">
                            <h5>มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์</h5>
                            <p class="text-muted">Business Information Technology Software Developer</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">15 June 2016</p>
                        </div>
                        <div class="timeline-card">
                            <h5 >เข้าทำงานที่ DOOTV MEDIA</h5>
                            <p class="text-muted">Full Stack Web Developer</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">1 June 2017</p>
                        </div>
                        <div class="timeline-card">
                            <h5 >เข้าทำงานที่ Thai Livestream</h5>
                            <p class="text-muted">Reseach & Web Developer 360° </p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">15 Oct 2017 - Present</p>
                        </div>
                        <div class="timeline-card">
                            <h5 >Freelance Web Developer</h5>
                            <p class="text-muted">Freelance & Web Developer ที่ AppzStory Studio สอนเขียนเว็บไซต์</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fa fa-chevron-down"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section> -->

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>