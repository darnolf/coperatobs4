<?php include("inc/head.php"); ?>

<body>

    <?php include("inc/alerts.php"); ?>

    <div class="container-fluid main">
        <div class="row fixed-top">
            <div class="sidebar logo">
                <a href="index.php" class="logo-link"></a>
            </div>
            <header class="col">
                <div class="greet float-left h5">Welcome to Gaya 12 !!</div>
                <div class="user-status float-right">
                    <div class="avatar"><img src="images/Account_Avatar.png" alt=""></div>
                    <p class="usergreet">Welcome, agent 188</p>
                    <a href="#" class="logout float-right">Log Out</a>
                </div>
            </header>
        </div>
        <div class="row">
            <div class="sidebar aside fullheight">
                <?php include("inc/aside-admin.php"); ?>
            </div>

            <div class="col fullheight">
                <div class="filter w-50 mx-auto mt-5 text-center">
                    <div class="d-flex text-center justify-content-center w-100 flex-wrap form-group mr-4" style="width: 300px;">
                        <span class="px-3">Hours</span>
                        <span class="px-3">Minutes</span>
                        <span class="px-3">Seconds</span>
                        <div class="value display-3 w-100 text-gray">15:03:04</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include("inc/devnav.php"); ?>

</body>



</html>