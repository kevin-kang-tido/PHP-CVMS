<?php 
    include_once('../layouts/header.php');
?>
<?php 
    include_once('../connection.php');

    $id = $_GET['id']; 
    $sql = "SELECT * FROM skills WHERE id = $id"; 
    $skill = $db->query($sql)->fetch_object();
?>

<h1>Edit</h1>
<form action="update.php" method="post" class="w-25">
    <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>"><br>
    Skill Name:
    <input type="text" name="skill_name" class="form-control" value="<?php echo $skill->name ?>" required>
    <br>
    Skill type:
    <select name="type" required class="form-control">
        <option value="">---</option>
        <option value="hard" <?php echo $skill->type == 'hard' ? 'selected' : ''; ?>>Hard Skill</option>
        <option value="soft" <?php echo $skill->type == 'soft' ? 'selected' : ''; ?>>Soft Skill</option>
    </select>
    <br>
    <input type="hidden" name="people_id" class="form-control" value="<?php echo $skill->people_id ?>" required>
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>