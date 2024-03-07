<?php 
    include_once('../layouts/header.php');
    $cv_id = $_GET['cv_id'];
?>
<form action="insert.php" method="post">
    Center Your Position:
    <input type="text" name="position" class="form-control" required>
    Enter Your start Year:
    <input type="text" name="start_year" class="form-control" required>
    Enter Your End Year:
    <input type="text" name="end_year" class="form-control" required>
    Enter Your Company Name:
    <input type="text" name="company_name" class="form-control" required> 
    <input type="hidden" name="people_id" value="<?php echo $cv_id ?>">
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>