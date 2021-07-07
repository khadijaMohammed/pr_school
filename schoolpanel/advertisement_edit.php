<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"> EDIT Advertisement pagee </h6>
        </div>
        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "schoolpanel");

            if (isset($_POST['advertisement_edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM advertisement WHERE id ='$id' ";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) {
            ?>
                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label> advertise </label>
                            <input type="text" name="edit_advertise" value="<?php echo $row['advertise']; ?>" class="form-control" placeholder="Enter Advertise">
                        </div>
                        <div class="form-group">
                        <select name="edit_visible" id="inputState" class="form-control">
                        <?php 
                        
                        if($row['visible'] == 1){
                        echo '<option value="1" selected>Visible</option>
                            <option value="0">Not Visible</option>';
                        }else{
                            echo '<option value="1">Visible</option>
                            <option value="0" selected>Not Visible</option>';
                        }
                            ?>
                          

                        </select>
                        </div>
                        <a href="teacher.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="updateadvertisementbtn" class="btn btn-success "> Update </button>
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