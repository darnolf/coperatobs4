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

                <h1>Agent Call</h1>

                <div class="filter d-flex align-items-center justify-content-between">
                    <div class="d-flex text-center justify-content-center flex-wrap form-group mr-4" style="width: 300px;">
                        <span class="px-3">Hours</span>
                        <span class="px-3">Minutes</span>
                        <span class="px-3">Seconds</span>
                        <div class="value float-left display-3 w-100 text-gray">15:03:04</div>
                    </div>
                    <a href="#" class="btn btn-outline-success justify-content-end rounded">Active Call<i class="fa fa-phone display-7 ml-3" aria-hidden="true"></i></a>
                </div>

                <div class="row py-3">

                    <div class="col-12 col-xl-6">
                        <div class="card my-2 rounded-1">
                            <div class="card-header text-center card-faded bg-primary text-white">Client Form</div>
                            <div class="card-block">

                                <form action="#">
                                    <h4 class="mb-4"><span class="badge badge-pill badge-primary">1</span> Personal Information</h4>

                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="clientfname">Name</label>
                                                <input class="form-control" name="clientfname" type="text" id="clientfname">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="clientlname">Surname</label>
                                                <input class="form-control" name="clientlname" type="text" id="clientlname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group full">
                                                <label for="clientemail">Email</label>
                                                <input class="form-control" name="clientemail" type="text" id="clientemail">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group half">
                                                <label for="clientphone">Phone Number</label>
                                                <input class="form-control" name="clientphone" type="text" id="clientphone">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="campaignid">Campaign ID</label>
                                                <input class="form-control" name="campaignid" type="text" id="campaignid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="countrysel">Country</label>
                                                <select class="selectpicker w-100" name="countrysel">
                                                    <option selected="selected">All</option>
                                                    <option>101</option>
                                                    <option>102</option>
                                                    <option>103</option>
                                                    <option>10443</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="currencysel">Currency</label>
                                                <select class="selectpicker w-100" name="currencysel">
                                                    <option selected="selected">All</option>
                                                    <option>101</option>
                                                    <option>102</option>
                                                    <option>103</option>
                                                    <option>10443</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group full mt-4" style="text-align: center;">
                                        <button class="btn btn-primary rounded" type="submit">Submit?</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6 ">
                        <div class="card my-2 rounded-1">
                            <div class="card-header text-center card-faded bg-success text-white">Script</div>
                            <div class="card-block ">

                                <h4 class="float-left mb-4">Outbound Script</h4>
                                <div class="fontsize float-right mt-0">
                                    <span class="down">A</span>
                                    <span class="up display-7">A</span>
                                </div>


                                <div class="w-100 scrollbar scroll-primary chatbox" style="min-height: 200px; max-height: 500px; overflow-y: scroll; overflow-x: hidden;">
                                    <div class="scroller mb-1">

                                        <?php
for($i=0; $i<5; $i++){
echo <<< EOF
<div class="row my-2">
<div class="col-2">Agent</div>
<div  class="col px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="row">
<div class="col-2">Customer</div>
<div class="col px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
EOF;
}
?>

                                    </div>
                                </div>



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