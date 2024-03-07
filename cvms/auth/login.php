<?php 
    include_once('../layouts/login_header.php');
    include_once('../connection.php');
    if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == 1){
        header('location: ../index.php');
    }
?>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <form action="login_action.php" class="card" method="post">
            <div class="card-body">
                <h3 class="text-center">Login Form</h3>
                <?php 
                    if(isset($_SESSION['error'])){
                        echo '<div class="alert alert-danger" role="alert">
                        '.$_SESSION['error'].'
                      </div>';
                        unset($_SESSION['error']);
                    }
                ?>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <br>
                    <button name="btn_login" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-4"></div>
</div>