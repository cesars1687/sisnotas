
<html>
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/bootstrap/css/bootstrap.css" media="all"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="span4 offset4 well">
            <legend>Please Sign In</legend>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
            <form method="POST" action="admin/login" accept-charset="UTF-8">
                <input type="text" id="username" class="span4" name="username" placeholder="Username" style="height: 35px" required>
                <input type="password" id="password" class="span4" name="password" placeholder="Password" style="height: 35px" required>
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"> Remember Me
                </label>
                <button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>

</body>

  </html>
