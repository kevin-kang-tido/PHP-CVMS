<?php 
    include_once('../layouts/header.php');
    include_once('../connection.php');
    $cv_id = $_GET['cv_id'];
    $cv_sql ="SELECT * FROM people WHERE id = $cv_id";

    $cv = $db->query($cv_sql) -> fetch_object();
    $sql = "SELECT * FROM `skills` WHERE people_id = $cv_id";
 // get all rows from table skills
    $skill = $db->query($sql); 
// execute the query or SQL Statement
?>
        <a href="create.php?cv_id=<?php echo $cv_id ?>" class="btn btn-primary">Create</a>
        <h3 class="text-danger">Skill for <?php echo $cv->full_name ?></h3>
        <?php 
            if(isset($_SESSION['success'])){
                echo '<div class="alert alert-primary" role="alert">
                '.$_SESSION['success'].'
              </div>';
                unset($_SESSION['success']);
            }
        ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="bg-danger">
                    <td width="20px">No.</td>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // CRUD, C=Create; R=Retriev; U=Update; D=Delete
                    $i = 1;
                    while($data = $skill->fetch_object()){
                        echo '<tr>
                            <td>'. $i .'</td>
                            <td>'. $data->name .'</td>
                            <td>'. $data->type .'</td>
                            <td>
                                <a href="edit.php?id='. $data->id .'" class="btn btn-success">Edit</a>
                                <a href="delete.php?id='. $data->id.'" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>';
                        $i++;
                    }
                   
                ?>
            </tbody>
        </table>
<?php
    include_once('../layouts/footer.php');
?>