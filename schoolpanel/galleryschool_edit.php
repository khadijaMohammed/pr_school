<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"> EDIT Gallery School</h6>
        </div>
        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "schoolpanel");

            if (isset($_POST['gallery_edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM galleryschool WHERE id ='$id' ";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) {
            ?>


                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                        <div class="modal-body">

                            <div class="form-group">
                                <label> Subject School </label>
                                <input type="text" name="edit_subjectschool" value="<?php echo $row['subject']; ?>" class="form-control" placeholder="Enter Subject School">
                            </div>

                            <div class="form-group">
                                <label> Upload Image </label>
                                <input type="file" name="gallery_image" class="form-control" value="<?php echo $row['images'] ?>" required>
                            </div>

                            <a href="galleryschool.php" class="btn btn-danger">CANCEL</a>
                            <button type="submit" name="updategallerybtn" class="btn btn-success "> Update </button>
                        </div>
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