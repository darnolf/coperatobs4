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

            <div class="col content fullheight">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">Home</a>
                    <a class="breadcrumb-item" href="#">Library</a>
                    <a class="breadcrumb-item" href="#">Data</a>
                    <span class="breadcrumb-item active">Bootstrap</span>
                </nav>

                <div class="btn-group float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-outline-success justify-content-end rounded">Export Report<i class="align-middle fa fa-download" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item align-items-center" href="#">Download PDF <i class="fa fa-file-pdf-o float-right text-danger justify-content-end" aria-hidden="true"></i></a>
                        <a class="dropdown-item align-items-center" href="#">Download Excel <i class="fa fa-file-excel-o float-right text-success" aria-hidden="true"></i></a>
                        <a class="dropdown-item align-items-center" href="#">Download CSV <i class="fa fa-table float-right text-primary" aria-hidden="true"></i></a>
                    </div>
                </div>

                <h1>Graphic Calls per Hour</h1>

                <div class="content">
                    <div class="form-group container-fluid">
                        <?php include("inc/filter.php"); ?>

                        <div class="card rounded-1 mt-3 text-center">
                            <h6 class="card-header card-primary text-white font-weight-bold">Calls</h6>
                            <div class="card-block">
                                <img src="./images/graph_callsperhour.png" width="100%" alt="">
                            </div>
                        </div>

                        <table class="table table-striped  mt-3">
                            <thead>
                                <tr class="bg-success text-white">
                                    <th>Hour</th>
                                    <th>1007</th>
                                    <th>1008</th>
                                    <th>1009</th>
                                    <th>1020</th>
                                    <th>All</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
for($i=0; $i<5; $i++){
echo <<< EOF
  <tr>
    <td>00:00</td>
    <td>200</td>
    <td>10</td>
    <td>1</td>
    <td>1</td>
    <td>100</td>
  </tr>
EOF;
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("inc/devnav.php"); ?>
</body>
</html>