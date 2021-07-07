<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"> EDIT New Page </h6>
        </div>
        <div class="card-body">
        <?php
        if (isset($_POST['new_edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM news WHERE id ='$id' ";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) {
            ?>
                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label> New </label>
                            <input type="text" name="edit_new" value="<?php echo $row['new']; ?>" class="form-control" placeholder="Enter New">
                        </div>
                        
                        <a href="news.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="updatenewbtn" class="btn btn-success "> Update </button>
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