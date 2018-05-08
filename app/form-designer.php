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
                <h1>Form Designer</h1>

                <div class="filter">
                    <div class="row d-flex align-items-center">
                        <div class="col d-flex flex-wrap">
                            <div class="form-group mr-4">
                                <label for="input1">Form Name</label>
                                <input class="form-control" type="text" value="" id="input1">
                            </div>

                            <div class="form-group">
                                <label for="input2">Description</label>
                                <textarea class="form-control" type="text" value="" id="input2" rows="1" cols="50"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="float-right">
                                <button type="button" class="btn text-uppercase btn-primary my-1 mr-2">Save</button>
                                <button type="button" class="btn text-uppercase btn-info my-1  mr-0">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table mt-3 table-bordered">
                    <thead>
                        <tr class="bg-success text-white">
                            <th class="text-center">#</th>
                            <th>Field Name</th>
                            <th>Type</th>
                            <th>CRM Field</th>
                            <th class="text-center">Mask Data</th>
                            <th class="text-center">Values</th>
                            <th class="text-center">Sort</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-light">
                        <?php
for($i=1; $i<5; $i++){
echo <<< EOF
                        <tr>
                            <td class="text-center">$i</td>
                            <td><input class="form-control" type="text" value="" placeholder="First Name" id="input1"></td>
                            <td>
                                <select class="selectpicker w-100" name="type" id="type">
                                    <option>Type 1</option>
                                    <option>Type 2</option>
                                    <option>Type 3</option>
                                    <option>Type 4</option>
                                    <option>Type 5</option>
                                </select>
                            </td>
                            <td>
                                <select class="selectpicker w-100" name="type" id="type">
                                    <option>Type 1</option>
                                    <option>Type 2</option>
                                    <option>Type 3</option>
                                    <option>Type 4</option>
                                    <option>Type 5</option>
                                </select>
                            </td>
                            <td class="text-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </td>
                            <td class="text-center">5</td>
                            <td class="text-center d-flex flex-column">
                                <a href="#"><i class="fa fa-chevron-up display-8" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-chevron-down display-8" aria-hidden="true"></i></a>
                            </td>
                        </tr>
EOF;
}
?>
                    </tbody>
                </table>

                <button class="btn btn-primary w-100 p-3 text-left d-flex align-items-center rounded-2"><i class="fa fa-plus display-6 mr-4" aria-hidden="true"></i> Add new field</button>
            </div>
        </div>
    </div>
    <?php include("inc/devnav.php"); ?>
</body>

</html>