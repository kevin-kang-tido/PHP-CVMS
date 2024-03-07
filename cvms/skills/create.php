<?php 
    include_once('../layouts/header.php');
    $cv_id = $_GET['cv_id'];
    // if (isset($_GET['cv_id'])) {
    //     $cv_id = $_GET['cv_id'];
    // } else {
    //     echo"Can not caught cv_id";
    // };
?>
<form action="insert.php" method="post" class="w-25">
    Skill Name:
    <input type="text" name="skill_name" class="form-control" required>
    <br>
    Skill type:
    <select name="type" class="form-control" required>
        <option value="">---</option>
        <option value="hard">Hard Skill</option>
        <option value="soft">Soft Skill</option>
    </select>
    <br>
    <input type="hidden" name="people_id" value="<?php echo $cv_id ?>" class="form-control" required>
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>