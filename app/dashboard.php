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
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">Home</a>
                    <a class="breadcrumb-item" href="#">Library</a>
                    <a class="breadcrumb-item" href="#">Data</a>
                    <span class="breadcrumb-item active">Bootstrap</span>
                </nav>

                <div class="float-right h5">22 March 2017</div>

                <h1>Dashboard</h1>

                <div class="card-deck text-center">

                    <div class="card rounded-1">
                        <div class="card-header card-gray font-weight-bold">NUMBER OF CALLS</div>
                        <div class="card-block">
                            <p class="card-text display-4 text-muted">25</p>
                        </div>
                    </div>

                    <div class="card rounded-1">
                        <div class="card-header card-warning text-white">AVERAGE CALL DURATION</div>
                        <div class="card-block">
                            <p class="card-text display-4 text-muted">00:27:04</p>
                        </div>
                    </div>

                    <div class="card rounded-1">
                        <div class="card-header card-success text-white">ANSWER SEIZURE RATIO</div>
                        <div class="card-block">
                            <p class="card-text display-4 text-muted">00:27:04</p>
                        </div>
                    </div>

                    <div class="card rounded-1">
                        <div class="card-header card-primary text-white">MAXIMUM CALL DURATION</div>
                        <div class="card-block">
                            <p class="card-text display-4 text-muted">00:27:04</p>
                        </div>
                    </div>

                </div>

                <div class="card rounded-1 mt-3  text-center">
                    <div class="card-header card-primary text-white">Calls</div>
                    <div class="card-block">
                        <img src="./images/graph_callsperhour.png" width="100%" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include("inc/devnav.php"); ?>

</body>



</html>