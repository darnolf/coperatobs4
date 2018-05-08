<?php ?>
<div class="devnav ui-widget-content" draggable="true">
    <a href="agent-break.php">Agent Break</a>
    <a href="agent-call.php">Agent Call</a>
    <a href="agent-console.php">Agent Console</a>
    <a href="agent-list.php">Agent List</a>
    <a href="campaign-monitoring.php">Campaign Monitoring</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="form-designer.php">Form Designer</a>
    <a href="graphic-calls-perhour.php">Graphic Calls per Hour</a>
    <a href="index.php">Agent Activity</a>
    <a href="manager-campaings.php">Campaigns</a>
    <a href="login.php">Login</a>
    <a href="schedule-call.php">Schedule Call</a>
    <a href="create-campaign.php">Create Campaign</a>
    <a href="#" data-toggle="modal" data-target=".alert-ok">Alert OK</a>
    <a href="#" data-toggle="modal" data-target=".alert-fail">Alert Fail</a>
    <a href="#" data-toggle="modal" data-target="#pop-welcome">Popup Welcome</a>
    <a href="#" data-toggle="modal" data-target="#pop-note">Popup Note</a>
</div>

<script>
    $(function() {
        $(".devnav").draggable();
    });
</script>