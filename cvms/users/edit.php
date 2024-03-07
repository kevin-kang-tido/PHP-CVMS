<?php 
    include_once('../layouts/header.php');
?>
<?php 
    include_once('../connection.php');
    $id = $_GET['id']; // retrieve id from url (query string)
    $sql = "SELECT * FROM users WHERE id = $id"; // get one record by primary key
    $user = $db->query($sql)->fetch_object();
    // var_dump($skill);
?>
<h1>Edit</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>"><br>
    Name:
    <input type="text" name="name" value="<?php echo $user->name ?>" class="form-control" required>
    <br>
    Username:
    <input type="text" name="username" value="<?php echo $user->username ?>" class="form-control" required>
    <br>
    Password
    <input type="password" name="password" class="form-control">
    <br>
    <button class="btn btn-primary">Save Change</button>
</form>

<?php 
    include_once('../layouts/footer.php');
?>