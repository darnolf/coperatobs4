<div class="filter">
    <div class="row d-flex align-items-center flex-wrap">

        <div class="form-group col-4 col-xl-2">
            <label>Start Date</label>
            <input type="text" class="form-control datepicker" id="startdate">
        </div>

        <div style="margin-top: 32px; font-size: 1.5rem;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>

        <div class="form-group col-4 col-xl-2">
            <label>End Date</label>
            <input type="text" class="form-control datepicker" id="enddate">
        </div>

        <div class="form-group col-4 col-xl-2">
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

        <div style="margin: 32px 10px auto; font-size: 1.5rem;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>

        <div class="form-group col-4 col-xl-2">
            <div class="row d-flex flex-wrap">
                <label for="starttimehr" class="w-100 justify-content-start">End Time</label>
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

        <div class="form-group col-4 col-xl-2">
            <label for="agentselect">Agent</label>
            <div class="row no-negative-margin">
                <select class="selectpicker w-75" name="agentselect" id="agentselect">
                <option selected="selected">All</option>
                <option>101</option>
                <option>102</option>
                <option>103</option>
                <option>10443</option>
            </select>
            </div>
        </div>

        <div class="col d-flex justify-content-end">
            <button class="btn btn-primary">Filter</button>
        </div>
    </div>

</div>

<!--<script>
    $('.datepicker').datepicker({
        format: 'd M yy'
    });
</script>-->