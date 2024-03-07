<?php 
    include_once('../layouts/header.php');
    $cv_id = $_GET['cv_id'];
?>
<form action="insert.php" method="post">
    Center Your Languages:
    <input type="text" name="name" class="form-control" required>
    Level: 
    <br>
    <label><input type="radio" name="level" value="1">Low</label>
    <label><input type="radio" name="level" value="2">Medium</label>
    <label><input type="radio" name="level" value="3">Good</label>
    <br>
    <input type="hidden" name="people_id" value="<?php echo $cv_id ?>">
    <br>
    <button class="btn btn-primary">Save</button
    >
</form>
<?php 
    include_once('../layouts/footer.php');
?>