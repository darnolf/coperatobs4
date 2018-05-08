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

                <div class="btn-group float-right">
                    <a href="create-campaign.php" class="btn btn-outline-success justify-content-end rounded">Create New Camplaign<i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>

                <h1>Campaings</h1>

                <div class="filter">
                    <div class="row d-flex align-items-center">
                        <div class="col-4 d-flex flex-wrap">
                            <div class="form-group">
                                <label for="statusselect">Status</label>
                                <select class="form-control selectpicker" name="agentselect" id="statusselect">
                                    <option selected="selected">Status 1</option>
                                    <option>Status 2</option>
                                    <option>Status 3</option>
                                    <option>Status 4</option>
                                    <option>Status 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped mt-3" valign="middle">
                    <thead>
                        <tr class="bg-success text-white">
                            <th>Action</th>
                            <th>Name</th>
                            <th>Range Date</th>
                            <th>Scheduele per day</th>
                            <th>Queue</th>
                            <th>Camplaign Progress</th>
                            <th>
                                <ul class="pagination float-right m-0">
                                    <li class="page-item"><a class="page-link text-white" href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                                    <li class="page-item"><a class="page-link text-white" href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fa-hold"><i class="fa fa-play-circle text-primary" aria-hidden="true"></i></td>
                            <td class="align-middle">Morning - 5# 6k EUR (yo. 1.2017Q8-14.3 15:00PM)</td>
                            <td>14/03/2017 - 18/03/2017</td>
                            <td>15:00:00 - 16:00:00</td>
                            <td>1008</td>
                            <td colspan="2">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 41%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa-hold"><i class="fa fa-stop-circle text-danger" aria-hidden="true"></i></td>
                            <td>Morning - 5# 6k EUR (yo. 1.2017Q8-14.3 15:00PM)</td>
                            <td>14/03/2017 - 18/03/2017</td>
                            <td>15:00:00 - 16:00:00</td>
                            <td>1008</td>
                            <td colspan="2">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa-hold"><i class="fa fa-pause-circle text-warning" aria-hidden="true"></i></td>
                            <td>Morning - 5# 6k EUR (yo. 1.2017Q8-14.3 15:00PM)</td>
                            <td>14/03/2017 - 18/03/2017</td>
                            <td>15:00:00 - 16:00:00</td>
                            <td>1008</td>
                            <td colspan="2">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa-hold"><i class="fa fa-play-circle text-primary" aria-hidden="true"></i></td>
                            <td>Morning - 5# 6k EUR (yo. 1.2017Q8-14.3 15:00PM)</td>
                            <td>14/03/2017 - 18/03/2017</td>
                            <td>15:00:00 - 16:00:00</td>
                            <td>1008</td>
                            <td colspan="2">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa-hold"><i class="fa fa-pause-circle text-warning" aria-hidden="true"></i></td>
                            <td>Morning - 5# 6k EUR (yo. 1.2017Q8-14.3 15:00PM)</td>
                            <td>14/03/2017 - 18/03/2017</td>
                            <td>15:00:00 - 16:00:00</td>
                            <td>1008</td>
                            <td colspan="2">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include("inc/devnav.php"); ?>
</body>

</html>