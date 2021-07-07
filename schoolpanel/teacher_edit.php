<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"> EDIT Teacher Page </h6>
        </div>
        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "schoolpanel");

            if (isset($_POST['teacher_edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM teacher WHERE id ='$id' ";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) {
            ?>


                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label> Fname </label>
                            <input type="text" name="edit_fname" value="<?php echo $row['fname']; ?>" class="form-control" placeholder="Enter Fname">
                        </div>
                        <div class="form-group">
                            <label> Lname </label>
                            <input type="text" name="edit_lname" value="<?php echo $row['lname']; ?>" class="form-control" placeholder="Enter Fname">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control checking_email" placeholder="Enter Email">
                            <small class="error_email" style="color: red;"></small>
                        </div>
                       
                        <a href="teacher.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="updateteacherbtn" class="btn btn-success "> Update </button>
                    </form>
            <?php
                }
            }

            ?>


        </div>
    </div>

</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>