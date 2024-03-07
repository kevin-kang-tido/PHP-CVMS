
<?php 
    include_once('../layouts/header.php');
    include_once('../connection.php');
    // $cv_id = $_GET("cv_id");

    // $cv_id = $_GET['cv_id'];
    // $cv_sql ="SELECT * FROM people WHERE id = $cv_id";
    // $cv = $db->query($cv_sql) -> fetch_object();
    // $sql = "SELECT * FROM `people` WHERE people_id = $cv_id";
    
    $sql = "SELECT * FROM `people`";
     // get all rows from table people
    $people = $db->query($sql); 
    // execute the query or SQL Statement
?>
        <a href="create.php" class="btn btn-primary">Create</a>

        <h3 class="text-danger">List of CV</h3>
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
                    <td>Photo</td>
                    <td>Full Name</td>
                    <td>Gender</td>
                    <td>Phone Number</td>
                    <td>Date of Birth</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // CRUD, C=Create; R=Retriev; U=Update; D=Delete
                    $i = 1;
                    while($data = $people->fetch_object()){
                        $gender = $data->gender==1 ? 'Male' : 'Female';
                        echo '<tr>
                            <td>'. $i .'</td>
                            <td><img src="'.baseUrl('assets/images/'.$data->photo).'" width="100px"></td>
                            <td>'. $data->full_name .'</td>
                            <td>'. $gender .'</td>
                            <td>'. $data->phone .'</td>
                            <td>'. $data->dob .'</td>
                            <td>
                                <a href="'.baseUrl('skills/index.php?cv_id='.$data->id).'" class="btn btn-success">Add Skill</a>
                                <a href="'.baseUrl('languages/index.php?cv_id='.$data->id).'" class="btn btn-success">Add Languages</a>
                                <a href="'.baseUrl('educations/index.php?cv_id='.$data->id).'" class="btn btn-success">Add Educations</a>
                                <a href="'.baseUrl('experiences/index.php?cv_id='.$data->id).'" class="btn btn-success">Add Experiences</a>
                                <a href="'.baseUrl('users/index.php?cv_id='.$data->id).'" class="btn btn-success">Add Users</a>
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