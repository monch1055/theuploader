<?php require_once( 'header.php' ); ?>
<body>
    <div class="divider"></div>
    <div class="container login_box">
        <h3 align="center">Uploader</h3>
        <div class="alert alert-info">
            <span>Login to Dashboard</span>
        </div>
        <div class="">
            <form method="post" action="process.php">
                <div class="form-group">
                <label>E-Mail</label>
                <input type="email" name="email" class="form-control" required="required" />
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required="required" />
                </div>
                <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login" />
                </div>
            </form>
        </div>
    </div>
<?php require_once( 'footer.php' ); ?>