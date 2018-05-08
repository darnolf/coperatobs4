<?php include("inc/head.php"); ?>

<body style="background: #000 url(./images/login.jpg) no-repeat center top; background-size: cover;">
    <?php include("inc/alerts.php"); ?>

    <div class="container-fluid main">
        <div class="card mx-auto text-center rounded-1 drop-shadow" style="width: 400px">
            <img class="card-img-top" alt="">
            <div class="card-block">
                <img src="./images/logo.png" alt="Coperato" class="mb-5">
                <h3 class="card-title">Welcome</h3>
                <p class="display-8">Please enter your username and password.</p>
                <form>
                    <div class="form-group text-center mt-5">
                        <label for="username" class="text-uppercase display-8">Username</label>
                        <input type="text" name="username" value="" class="form-control w-75 mx-auto">
                    </div>
                    <div class="form-group text-center my-5">
                        <label for="password" class="text-uppercase display-8">Password</label>
                        <input type="password" name="password" value="" class="form-control w-75 mx-auto">
                    </div>
                    <button class="btn btn-primary rounded px-5">Sign In</button>
                </form>
            </div>
        </div>
    </div>
    <?php include("inc/devnav.php"); ?>
</body>

</html>