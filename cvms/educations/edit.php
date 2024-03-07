<?php 
    include_once('../layouts/header.php');
?>
<?php 
    include_once('../connection.php');

    $id = $_GET['id']; 
    $sql = "SELECT * FROM educations WHERE id = $id"; 
    $edu = $db->query($sql)->fetch_object();

?>
<h1>Edit</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?> ">
    Center Your Majors:
    <input type="text" name="major" class="form-control" required value="<?php echo $edu->major ?>">
    Enter Your start Year:
    <input type="text" name="start_year" class="form-control" required value="<?php echo $edu->start_year ?>">
    Enter Your End Year:
    <input type="text" name="end_year" class="form-control" required value="<?php echo $edu->end_year ?>">
    Enter Your Degree:
    <input type="text" name="degree" class="form-control" required value="<?php echo $edu->degree ?>">
    Enter Your School Name:
    <input type="text" name="school_name" class="form-control" required value="<?php echo $edu->school_name ?>"> 
    <input type="hidden" name="people_id" value="<?php echo $edu->people_id ?>">
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>