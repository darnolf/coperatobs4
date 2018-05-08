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

                <div class="card my-2 rounded-1 w-50 mx-auto">
                    <div class="card-header text-center bg-primary text-white">Schedule Call</div>
                    <div class="card-block">
                        <form action="#">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="clientfname">Name</label>
                                        <input class="form-control" name="clientfname" type="text" id="clientfname">
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div class="col">
                                    <div class="form-group d-flex justify-content-around flex-wrap">
                                        <button class="btn btn-outline-success my-1">Call at the end of campaign</button>
                                        <button class="btn btn-success my-1">Schedule at date</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="text" class="form-control datepicker" id="startdate">
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group pr-3">
                                        <label for="starttimehr" class="w-100 justify-content-start">Start Time</label>
                                        <div class="row d-flex flex-wrap">
                                            <select class="selectpicker w-50" name="starttimehr" id="starttimehr">
                                                <option selected="selected">HH</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                            </select>

                                            <select class="selectpicker w-50" name="starttimemin" id="starttimemin">
                                                <option selected="selected">MM</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="starttimehr" class="w-100 d-flex justify-content-start">End Time</label>
                                        <div class="row d-flex flex-wrap">
                                            <select class="selectpicker w-50" name="endtimehr" id="endtimehr">
                                                <option selected="selected">HH</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                            </select>

                                            <select class="selectpicker w-50" name="endtimemin" id="endtimemin">
                                                <option selected="selected">MM</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <div class="form-group mt-4">
                                        <button class="btn btn-primary rounded mx-auto px-5" type="submit">Submit?</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include("inc/devnav.php"); ?>
</body>

</html>