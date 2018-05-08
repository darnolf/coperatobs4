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
                    <div class="card-header text-center bg-primary text-white">Create new Campaign</div>
                    <div class="card-block p-5">
                        <form action="#">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Campaign Name*</h5>
                                        <input class="form-control" name="cmpname" type="text" id="cmpname">
                                    </div>
                                </div>
                            </div>

                            <!--<div class="row my-4">
                                <div class="col-12"><h5>Range Date</h5></div>
                                <div class="col-4">
                                    star date
                                </div>
                                <div class="col-2"></div>
                                <div class="col-4">
                                    end date
                                </div>
                            </div>-->

                            <div class="row my-4">
                                <div class="col-12">
                                    <h5>Range Date*</h5>
                                </div>
                                <div class="col-6 form-group">
                                    <label class="display-8 text-uppercase">Start Date</label>
                                    <input type="text" class="form-control datepicker" id="startdate">
                                </div>

                                <div class="col-6 form-group">
                                    <label class="display-8 text-uppercase">End Date</label>
                                    <input type="text" class="form-control datepicker" id="enddate">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <label class="h5">Schedule per day*</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-group pr-3">
                                        <label for="starttimehr" class="w-100 display-8 text-uppercase">Start Time</label>
                                    <div class="row">
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
                                    <label for="starttimehr" class="w-100 display-8 text-uppercase">End Time</label>
                                    <div class="row">
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
                        <div class="col-12">
                            <label class="h5">Forms*</label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">SIP/188</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-sm text-primary">Manage Forms</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="h5">External URLS*</label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">SIP/188</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6"><a href="#" class="btn-sm text-primary">Manage External URLs</a></div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="h5">Dialer Type*</label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">SIP/188</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6"></div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="h5">Outbound Route*</label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">SIP/188</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6"><a href="#" class="btn-sm text-primary">Manage Routes</a></div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-4">
                                <label class="custom-control custom-checkbox h5">
                                    <span class="ml-2" style="line-height: 2rem;">Answering Machine Detection*</span>
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator align-text-top"></span>
                                </label>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="h5">Queue*</label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">SIP/188</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6"><a href="#" class="btn-sm text-primary">Manage Queues</a></div>
                    </div>

                    <div class="row my-4">
                        <div class="col-6 form-group">
                            <label class="h5">Priority*</label>
                            <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                <option selected="selected">SIP/188</option>
                                <option>SIP/189</option>
                                <option>SIP/190</option>
                            </select>
                        </div>

                        <div class="col-6 form-group">
                            <label class="h5">Retries</label>
                            <input type="text" class="form-control" id="enddate">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-6 form-group">
                            <label class="custom-control custom-checkbox h5">
                                    <span class="ml-2" style="line-height: 2rem;">Is Header*</span>
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator align-text-top"></span>
                                </label>
                        </div>
                        <div class="col-6 form-group">
                            <label class="custom-control custom-checkbox h5">
                                    <span class="ml-2" style="line-height: 2rem;">Validate Numbers*</span>
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator align-text-top"></span>
                                </label>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="w-100">Call File*</h5>
                                <label class="custom-file w-100">
                                    <input type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="w-100 h5">Call File encoding</label>
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                <option selected="selected">SIP/188</option>
                                <option>SIP/189</option>
                                <option>SIP/190</option>
                            </select>
                            </div>
                        </div>
                    </div>


                    <div class="row my-4">
                        <div class="col-12">
                            <label class="h5">Script*</label>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">H1</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">Times New Roman</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select class="selectpicker w-100" name="agentselect2" id="agentselect">
                                    <option selected="selected">HH</option>
                                    <option>SIP/189</option>
                                    <option>SIP/190</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-12">
                            <img src="images/editor-mockup.png" style="width: 100%;" alt="">
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