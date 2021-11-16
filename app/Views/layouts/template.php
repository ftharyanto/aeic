<!doctype html>
<html lang="en">

<head>
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

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="select">
            <select class="form-select" aria-label="Select Country">
                <option selected>Select Country</option>
                <option value="indonesia">Indonesia</option>
                <option value="malaysia">Malaysia</option>
                <option value="philippines">Phippines</option>
                <option value="thailand">Thailand</option>
                <option value="singapore">Singapore</option>
                <option value="bruneids">Brunei DS</option>
                <option value="vietnam">Vietnam</option>
                <option value="laos">Laos</option>
                <option value="myanmar">Myanmar</option>
            </select>
        </div>
        <div class="logo-text text-end fw-bold">
            <a href="<?php echo base_url(); ?>">
                ASEAN EARTHQUAKE <br> INFORMATION CENTER
            </a>
        </div>
        <div class="header_logo">
            <a href="<?= base_url(); ?>">
                <img src=<?php echo base_url($aseanLogo); ?> alt="ASEAN logo">
            </a>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div class="nav_list">
                <a href="/" class="nav_link active"> <i class='bx bx-home'></i> <span class="nav_name">Home</span> </a>
                <a href="/history" class="nav_link"> <i class='bx bx-history'></i> <span class="nav_name">History and Goals</span> </a>
                <a href="/activities" class="nav_link"> <i class='bx bx-hive'></i> <span class="nav_name">Activities</span> </a>
                <a href="/data-exchange" class="nav_link"> <i class='bx bx-data'></i> <span class="nav_name">Data Exchange</span> </a>
                <a href="/update-data" class="nav_link"> <i class='bx bx-refresh'></i> <span class="nav_name">Update Data</span> </a>
                <a href="/recent-earthquakes" class="nav_link"> <i class='bx bx-news'></i> <span class="nav_name">Recent Earthquakes</span> </a>
                <a href="/facilities" class="nav_link"> <i class='bx bx-buildings'></i> <span class="nav_name">Facilities</span> </a>
                <a href="/financial-support" class="nav_link"> <i class='bx bx-donate-heart'></i> <span class="nav_name">Financial Support</span> </a>
                <a href="/aeic-links" class="nav_link"> <i class='bx bx-link'></i> <span class="nav_name">AEIC Links</span> </a>
            </div>
    </div>
    </div>
    </div>
    </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <?= $this->renderSection('content'); ?>
    </div>
    <!--Container Main end-->



    <!-- JavaScript -->
    <script src=<?php echo base_url($js); ?>></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- sidebar js -->
    <script src=<?php echo base_url($sidebarjs); ?>></script>
</body>

</html>