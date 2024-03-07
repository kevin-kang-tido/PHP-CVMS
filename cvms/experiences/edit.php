<?php 
    include_once('../layouts/header.php');
?>
<?php 
    include_once('../connection.php');

    $id = $_GET['id']; 
    $sql = "SELECT * FROM experiences WHERE id = $id"; 
    $experiences = $db->query($sql)->fetch_object();
?>
<h1>Edit</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?> ">
    Center Your Position:
    <input type="text" name="position" class="form-control" required value="<?php echo $experiences->position ?>">
    Enter Your start Year:
    <input type="text" name="start_year" class="form-control" required value="<?php echo $experiences->start_year ?>">
    Enter Your End Year:
    <input type="text" name="end_year" class="form-control" required value="<?php echo $experiences->end_year ?>">
    Enter Your Company Name:
    <input type="text" name="company_name" class="form-control" required value="<?php echo $experiences->company_name ?>"> 
    <input type="text" name="people_id" value="<?php echo $experiences->people_id ?> ">
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>