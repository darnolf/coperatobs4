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

                <h1>Agent List</h1>

                <div class="filter">
                    <div class="row d-flex align-items-center">
                        <div class="col d-flex flex-wrap">
                            <div class="form-group w-50">
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

                        <div class="col form-group">
                            <div class="float-right">
                                <button type="button" class="btn btn-primary mx-2 my-1">New Agent</button>
                                <button type="button" class="btn btn-outline-primary mx-2 my-1">Disconnect</button>
                                <button type="button" class="btn btn-outline-primary mx-2 my-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped mt-3">
                    <thead>
                        <tr class="bg-success text-white">
                            <th>Select</th>
                            <th>Configure</th>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
for($i=0; $i<3; $i++){
echo <<< EOF
  <tr>
    <td><label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input">
    <span class="custom-control-indicator"></span>
    </label></td>
    <td>check</td>
    <td>101</td>
    <td>Agent 101</td>
    <td>Off Line</td>
    <td><a href="#" class="edit">EDIT</a></td>
  </tr>
EOF;
}
?>
                            <tr class="bg-success">
                                <td colspan="6"></td>
                            </tr>


                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <?php include("inc/devnav.php"); ?>

</body>



</html>