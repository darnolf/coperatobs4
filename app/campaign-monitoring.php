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

                <div class="float-right">
                    <select class="selectpicker w-100" name="type" id="type">
                        <option>(Outgoing campain) Morning - 4# NL DE MY SG (Yo. 1.2017) Q7 - 15.3-15:00PM</option>
                        <option>(Outgoing campain) Morning - 4# NL DE MY SG (Yo. 1.2017) Q7 - 15.3-15:00PM</option>
                        <option>(Outgoing campain) Morning - 4# NL DE MY SG (Yo. 1.2017) Q7 - 15.3-15:00PM</option>
                        <option>(Outgoing campain) Morning - 4# NL DE MY SG (Yo. 1.2017) Q7 - 15.3-15:00PM</option>
                        <option>(Outgoing campain) Morning - 4# NL DE MY SG (Yo. 1.2017) Q7 - 15.3-15:00PM</option>
                    </select>
                </div>

                <h1>Campaign Monitoring</h1>

                <div class="filter">
                    <div class="row d-flex align-items-center">
                        <div class="col d-flex flex-wrap">
                            <div class="form-group mx-2">
                                <label>Start Date</label>
                                <input type="text" class="form-control datepicker" id="startdate">
                            </div>

                            <div class="d-flex align-items-center display-7"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>

                            <div class="form-group mx-2">
                                <label>End Date</label>
                                <input type="text" class="form-control datepicker" id="enddate">
                            </div>

                            <div class="form-group mx-2">
                                <label>Schedule</label>
                                <div class="output ">15:00:00 - 16:00:00</div>
                            </div>
                            <div class="form-group mx-2">
                                <label>Queue</label>
                                <div class="output text-center">1008</div>
                            </div>
                            <div class="form-group mx-2">
                                <label>Retries</label>
                                <div class="output text-center">30</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-deck mt-4 ">

                    <div class="card border-top-0 border-bottom-0 border-left-0 display-8 ">
                        <div class="card-block ">
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Pending Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Failed Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Short Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-top-0 border-bottom-0 border-left-0 display-8 ">
                        <div class="card-block ">
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Average call Duration</strong>
                                <div class="col ">00:00:43</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-top-0 border-bottom-0 border-left-0 display-8 ">
                        <div class="card-block ">
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                            <div class="row my-1 ">
                                <strong class="col-5 text-uppercase ">Total Calls</strong>
                                <div class="col ">6997</div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-right">
                    <div class="col">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Hide logged out !!</span>
                        </label>
                    </div>
                </div>

                <div class="row d-flex flex-wrap mt-4 ">
                    <div class="col">
                        <h4>Placing Calls</h4>
                        <table class="table table-striped text-nowrap">
                            <tr class="bg-success text-white text-uppercase display-8 ">
                                <th>Status</th>
                                <th>Phone Number</th>
                                <th>Since</th>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col">
                        <h4>Agents</h4>
                        <table class="table table-striped ">
                            <tr class="bg-success text-white text-uppercase display-8 ">
                                <th>Status</th>
                                <th>Phone Number</th>
                                <th>Since</th>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                            <tr>
                                <td>Placing</td>
                                <td>4987609985</td>
                                <td>16/03/2017 15:18:34</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">View Campaign Log</span>
                    </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("inc/devnav.php"); ?>
</body>
</html>