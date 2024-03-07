<?php 
    include_once('../layouts/header.php');
?>
<?php 
    include_once('../connection.php');

    $id = $_GET['id']; 
    $sql = "SELECT * FROM languages WHERE id = $id"; 
    $lan = $db->query($sql)->fetch_object();
?>
<h1>Edit</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?> ">
    Center Your Languages:
    <input type="text" name="name" class="form-control" required  value="<?php echo $lan->name ?>">
    Level: 
    <br>
    <label><input type="radio" name="level" value="1" <?php  echo $lan->low?'checked':''; ?>>Low</label>
    <label><input type="radio" name="level" value="2" <?php  echo $lan->medium?'checked':''; ?>>Medium</label>
    <label><input type="radio" name="level" value="3" <?php  echo $lan->good?'checked':''; ?>>Good</label>
    <br>
    <input type="text" name="people_id" value="<?php echo $lan->people_id ?> ">
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>