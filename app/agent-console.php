<?php include("inc/head.php"); ?>
<body class="agent">
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
                <?php include("inc/aside-manager.php"); ?>
            </div>


            <div class="col fullheight">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">Home</a>
                    <a class="breadcrumb-item" href="#">Library</a>
                    <a class="breadcrumb-item" href="#">Data</a>
                    <span class="breadcrumb-item active">Bootstrap</span>
                </nav>


                <div class="float-right h5">22 March 2017</div>

                <h1>Agent Console</h1>

                <div class="filter">
                    <div class="row d-flex align-items-center">
                        <div class="col d-flex flex-wrap">
                            <div class="form-group mr-4 pr-4">
                                <label>Total Calls</label>
                                <div class="output">15</div>
                            </div>

                            <div class="form-group mr-4 pr-4">
                                <label>Total Login Time</label>
                                <div class="output">05:00:00</div>
                            </div>

                            <div class="form-group mr-4 pr-4">
                                <label>Total Talk Time</label>
                                <div class="output">00:45:00</div>
                            </div>
                            <div class="form-group mr-4 pr-4">
                                <label>Time on break</label>
                                <div class="outputtext-center">01:20:00</div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row py-3">
                    <div class="col-12 col-xl-6">
                        <div class="card card-scrolled-1 my-2 rounded-1">
                            <div class="card-header text-center bg-gray">Notes</div>
                            <div class="card-block">
                                <div class="float-left form-group">
                                    <select class="selectpicker" name="sel1" id="sel1">
                                        <option>No.Entries</option>
                                        <option>value</option>
                                        <option>value</option>
                                        <option>value</option>
                                        <option>value</option>
                                    </select>
                                </div>
                                <div class="float-right form-group">
                                    <div class="input-group input-search">
                                        <input type="text" class="form-control" placeholder="SEARCH..">
                                        <span class="input-group-btn">
                                                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>


                                <div class="w-100 scrollbar scroll-primary">
                                    <div class="scroller mb-1">

                                        <table class="table table-striped compact display-8">
                                            <tr class="text-uppercase">
                                                <th>Date <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Phone Time <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Name <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Total Talk time <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Call Status</th>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="display-8 float-left">Showing 2 of 3 entries</div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="card card-scrolled-1 my-2 rounded-1">
                            <div class="card-header text-center bg-warning text-white">Scheduled calls</div>
                            <div class="card-block">

                                <div class="float-left form-group">
                                    <select class="selectpicker" name="sel1" id="sel1">
                                            <option>No.Entries</option>
                                            <option>value</option>
                                            <option>value</option>
                                            <option>value</option>
                                            <option>value</option>
                                        </select>
                                </div>

                                <div class="float-right form-group">
                                    <div class="input-group input-search">
                                        <input type="text" class="form-control" placeholder="SEARCH..">
                                        <span class="input-group-btn">
                                                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>
                                <div class="w-100 scrollbar scroll-primary">
                                    <div class="scroller mb-1">

                                        <table class="table table-striped compact display-8">
                                            <tr class="text-uppercase">
                                                <th>Date <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Phone Time <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Name <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Total Talk time <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Call Status</th>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="display-8 float-left">Showing 2 of 3 entries</div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card card-scrolled-1  my-2 rounded-1">
                            <div class="card-header text-center bg-success text-white">Last Calls</div>
                            <div class="card-block">

                                <div class="float-left form-group">
                                    <select class="selectpicker" name="sel1" id="sel1">
                                            <option>No.Entries</option>
                                            <option>value</option>
                                            <option>value</option>
                                            <option>value</option>
                                            <option>value</option>
                                        </select>
                                </div>

                                <div class="float-right form-group">
                                    <div class="input-group input-search">
                                        <input type="text" class="form-control" placeholder="SEARCH..">
                                        <span class="input-group-btn">
                                                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>

                                <div class="w-100 scrollbar scroll-primary">
                                    <div class="scroller mb-1">

                                        <table class="table table-striped compact display-8">
                                            <tr class="text-uppercase">
                                                <th>Date <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Phone Time <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Name <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Total Talk time <i class="fa fa-fw fa-sort"></i></th>
                                                <th>Call Status</th>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                            <tr>
                                                <td>23/02/2017 14:45:00</td>
                                                <td>987987987987</td>
                                                <td>John Smith</td>
                                                <td>1:45:00</td>
                                                <td>Success</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="display-8 float-left">Showing 2 of 3 entries</div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 ">
                        <div class="card my-2 rounded-1">
                            <div class="card-header text-center bg-primary text-white">Dashboard Calls</div>
                            <div class="card-block ">
                                <img src="images/coperato_07.png" style="width: 100%; height: 230px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </div>

    <?php include("inc/devnav.php "); ?>

</body>



</html>