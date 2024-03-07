<?php 
    include_once('../layouts/header.php');
?>
<?php 
    include_once('../connection.php');

    $id = $_GET['id']; 
    $sql = "SELECT * FROM `people` WHERE id = $id"; 
    $people = $db->query($sql)->fetch_object();
?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<h1>Edit</h1>
<div class="col-sm-12">
        <form action="testupdate.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="full_name" class="form-control" value="<?php echo $people->full_name ?>" required>
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="">----</option>
                    <option value="1" <?php echo $people->gender == '1' ? 'selected' : ''; ?>>Male</option>
                    <option value="2" <?php echo $people->gender == '2' ? 'selected' : ''; ?>>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $people->phone ?>" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $people->email ?>" required>
            </div>
            <div class="form-group">
                <label for="">Website</label>
                <input type="text" name="webiste" class="form-control" value="<?php echo $people->website ?>">
            </div>
            <div class="form-group">
                <label for="">Date of birth</label>
                <input type="date" name="dob" class="form-control" required value="<?php echo $people->dob ?>">
            </div>
            <div class="form-group">
                <label for="">Place of birth</label>
                <input type="text" name="pob" class="form-control" required value="<?php echo $people->pob ?>">
            </div>
            <div class="form-group">
                <label for="">Current Address</label>
                <input type="text" name="address" class="form-control" required value="<?php echo $people->address ?>">
            </div>
            <div class="form-group g-3">
                <label for="">Profile</label>
                <input type="file" name="profile" class="form-control" accept=".png, .jpg, .jpeg">
            </div>
            <input type="hidden" name="people_id" class="form-control" value="<?php echo $people->people_id ?>" required>
            <div class="form-group g-3">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
<?php 
    include_once('../layouts/footer.php');
?>