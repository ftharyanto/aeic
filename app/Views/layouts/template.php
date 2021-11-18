<!doctype html>
<html lang="en">

<head>
    <!-- hidden base url for js -->
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- sidebar CSS -->
    <link rel="stylesheet" href=<?php echo base_url($sidebarcss); ?>>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href=<?php echo base_url($css); ?>>
    <title><?= $title; ?></title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="<?php echo base_url(); ?>/img/asean-logo.png" width="20%" alt="">
            <span class="logo_name">AEIC</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/">Home</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-flag'></i>
                        <span class="link_name">Countries</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Countries</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/indonesia">Indonesia</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/malaysia">Malaysia</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/philippines">Philippines</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/thailand">Thailand</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/singapore">Singapore</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/bruneids">Brunei DS</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/vietnam">Vietnam</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/laos">Laos</a></li>
                    <li><a href="<?php echo base_url(); ?>/country/index/myanmar">Myanmar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-history'></i>
                    <span class="link_name">History and Goals</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">History and Goals</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-hive'></i>
                    <span class="link_name">Activities</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Activities</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-data'></i>
                    <span class="link_name">Data Exchange</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Data Exchange</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-news'></i>
                    <span class="link_name">Recent Earthquakes</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Recent Earthquakes</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-buildings'></i>
                    <span class="link_name">Facilities</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Facilities</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-donate-heart'></i>
                    <span class="link_name">Financial Support</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Financial Support</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-link'></i>
                    <span class="link_name">AEIC Links</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">AEIC Links</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <img src="<?php echo base_url(); ?>/img/asean-logo.png" alt="ASEAN Logo" width="2%">
            <span class="text">ASEAN EARTHQUAKE INFORMATION CENTER</span>
        </div>
        <!--Container Main start-->
        <div class="container mt-5">
            <?= $this->renderSection('content'); ?>
        </div>
        <!--Container Main end-->
    </section>




    <!-- JavaScript -->
    <!-- <script src=<?php echo base_url($js); ?>></script> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- sidebar js -->
    <script src=<?php echo base_url($sidebarjs); ?>></script>
</body>

</html>