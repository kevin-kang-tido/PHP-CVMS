<?php 
    include_once('../layouts/header.php');
?>
<form action="insert.php" method="post">
    Name:
    <input type="text" name="name" class="form-control" required>
    <br>
    Username:
    <input type="text" name="username" class="form-control" required>
    <br>
    Password
    <input type="password" name="password" class="form-control" required>
    <br>
    <button class="btn btn-primary">Save</button>
</form>
<?php 
    include_once('../layouts/footer.php');
?>