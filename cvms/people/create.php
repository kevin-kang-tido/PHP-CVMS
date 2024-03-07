<?php 
    include_once('../layouts/header.php');
    include_once('../connection.php');
    // new edit 
    // $cv_id = $_GET['cv_id'];
    
?>

<div class="row">
    <div class="col-sm-12">
    <?php 
            if(isset($_SESSION['error'])){
                echo '<div class="alert alert-danger" role="alert">
                '.$_SESSION['error'].'
              </div>';
                unset($_SESSION['error']);
            }
        ?>
        
    </div>
    <div class="col-sm-12">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="">----</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Website</label>
                <input type="text" name="webiste" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Date of birth</label>
                <input type="date" name="dob" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Place of birth</label>
                <input type="text" name="pob" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Current Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Profile</label>
                <input type="file" name="profile" class="form-control" accept=".png, .jpg, .jpeg">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>