<?php 
    include_once('../layouts/header.php');
    include_once('../connection.php');
    $cv_id = $_GET['cv_id'];
    $sql = "SELECT * FROM `experiences` where people_id = $cv_id";
    $edu = $db->query($sql); 
?>
        <a href="create.php?cv_id=<?php echo $cv_id?>" class="btn btn-primary">Create</a>
        <h3 class="text-danger">List of experiences</h3>
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
                    <td>Position</td>
                    <td>Start Year</td>
                    <td>End Year</td>
                    <td>Company </td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // CRUD, C=Create; R=Retriev; U=Update; D=Delete
                    $i = 1;
                    while($data = $edu->fetch_object()){
                        echo '<tr>
                            <td>'. $i .'</td>
                            <td>'. $data->position .'</td>
                            <td>'. $data->start_year.'</td>
                            <td>'. $data->end_year .'</td>
                            <td>'. $data->company_name .'</td>
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