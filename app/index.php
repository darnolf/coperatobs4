<?php include("inc/head.php"); ?>
<body>
    <?php include("inc/alerts.php"); ?>
    <div class="container-fluid main">
        <div class="row fixed-top">
            <div class="sidebar logo">
                <a href="index.php" class="logo-link"></a>
            </div>
            <header class="col">
                <div class="greet float-left h5">Welcome to Virtual !!</div>
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

                <div class="btn-group float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-outline-success justify-content-end rounded">Export Report<i class="align-middle fa fa-download" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item align-items-center" href="#">Download PDF <i class="fa fa-file-pdf-o float-right text-danger justify-content-end" aria-hidden="true"></i></a>
                        <a class="dropdown-item align-items-center" href="#">Download Excel <i class="fa fa-file-excel-o float-right text-success" aria-hidden="true"></i></a>
                        <a class="dropdown-item align-items-center" href="#">Download CSV <i class="fa fa-table float-right text-primary" aria-hidden="true"></i></a>
                    </div>
                </div>

                <h1>Agent Activity Summary</h1>

                <?php include("inc/filter.php"); ?>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr class="bg-success text-white">
                            <th>Source</th>
                            <th>Name</th>
                            <th>Total Calls</th>
                            <th>Total time on phone</th>
                            <th>First Call</th>
                            <th>Last Call</th>
                            <th>Unique calls made</th>
                            <th>

                                <ul class="pagination float-right m-0">
                                    <li class="page-item"><a class="page-link text-white" href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                                    <li class="page-item"><a class="page-link text-white" href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                                </ul>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
for($i=1; $i<80; $i++){
echo <<< EOF
  <tr>
    <td>$i</td>
    <td>Maria Anders</td>
    <td>34</td>
    <td>00:00:00</td>
    <td>00:00:00</td>
    <td>00:00:00</td>
    <td colspan="2">5</td>
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