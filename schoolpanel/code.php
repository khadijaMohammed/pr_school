<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "schoolpanel");

//login
if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'  ";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
}

//logout
if (isset($_POST['logout_btn'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}



//register profile

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}





if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username' , email='$email' , password='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: register.php');
    }
}


if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}
//teacher profile

if (isset($_POST['teacherbtn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $email_query = "SELECT * FROM teacher WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: teacher.php');
    } else {
        $query = "INSERT INTO teacher (fname,lname,email) VALUES ('$fname','$lname','$email')";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            $_SESSION['success'] = "Teacher Profile Added";
            header('Location: teacher.php');
        } else {
            $_SESSION['status'] = "Teacher Profile NOT Added";
            header('Location: teacher.php');
        }
    }
}


if (isset($_POST['updateteacherbtn'])) {
    $id = $_POST['edit_id'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $email = $_POST['edit_email'];

    $query = "UPDATE teacher SET fname='$fname' , fname='$fname' , email='$email'  WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: teacher.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: teacher.php');
    }
}


if (isset($_POST['deleteteacher_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM teacher WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: teacher.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: teacher.php');
    }
}


//Advertise profile

if (isset($_POST['advertisebtn'])) {
    $advertise = $_POST['advertise'];
    $visible = $_POST['visible'];
    $query = "INSERT INTO advertisement (advertise , visible) VALUES ('$advertise' , '$visible')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Advertisement Added";

        header('Location: advertisement.php');
    } else {
        $_SESSION['status'] = " Advertisement NOT Added ";

        header('Location: advertisement.php');
    }
}


if (isset($_POST['updateadvertisementbtn'])) {
    $id = $_POST['edit_id'];
    $advertise = $_POST['edit_advertise'];
    $visible = $_POST['edit_visible'];
    $query = "UPDATE advertisement SET  advertise='$advertise' , visible='$visible'   WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: advertisement.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location:advertisement.php');
    }
}

if (isset($_POST['deleteadvertisement_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM advertisement WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: advertisement.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: advertisement.php');
    }
}


//news pagee
if (isset($_POST['newbtn'])) {
    $new = $_POST['new'];

    $query = "INSERT INTO news (new) VALUES ('$new')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "New Added";
        header('Location: news.php');
    } else {
        $_SESSION['status'] = " New NOT Added";
        header('Location: news.php');
    }
}
if (isset($_POST['updatenewbtn'])) {
    $id = $_POST['edit_id'];
    $new = $_POST['edit_new'];

    $query = "UPDATE news SET new='$new'    WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: news.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: news.php');
    }
}


if (isset($_POST['deletenews_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM news WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: news.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: news.php');
    }
}


///gallery school 
if (isset($_POST['gallerybtn'])) {
    $subject = $_POST['subject'];
    $images = $_FILES["gallery_image"]['name'];

    if (file_exists("upload/" . $_FILES["gallery_image"]['name'])) {
        $store = $_FILES["gallery_image"]['name'];
        $_SESSION['status'] = "Image Already ";
        header('Location: galleryschool.php');
    } else {

        $query = "INSERT INTO galleryschool (subject , images) VALUES ('$subject' , '$images')";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            move_uploaded_file($_FILES["gallery_image"]["tmp_name"], "upload/" . $_FILES["gallery_image"]["name"]);
            $_SESSION['success'] = "Gallery School Added";
            header('Location: galleryschool.php');
        } else {
            $_SESSION['status'] = " Gallery School NOT Added";
            header('Location: galleryschool.php');
        }
    }
}


if (isset($_POST['updategallerybtn'])) {
    $edit_id = $_POST['edit_id'];
    $edit_subjectschool = $_POST['edit_subjectschool'];
    echo $edit_subjectschool;
    $images = $_FILES["gallery_image"]['name'];

    $gallery_query = "SELECT * FROM galleryschool WHERE id='$edit_id' ";
    $gallery_query_run = mysqli_query($connection, $gallery_query);
    foreach ($gallery_query_run as $fa_row) {
        if ($images == NULL) {
            $image_data = $fa_row['images'];
        } else {
            if ($img_path = "upload/" . $fa_row['images']) {
                unlink($img_path);
                $image_data = $images;
            }
        }
    }

    $query = "UPDATE galleryschool SET subject='$edit_subjectschool' , images='$image_data'  WHERE id='$edit_id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        //update with existing image
        if ($images == NULL) {
            $_SESSION['success'] = "Gallery Updated With Existing Image" + $image_data;
            header('Location: galleryschool.php');
        } else {
            //update with new image and deleted with old image
            move_uploaded_file($_FILES["gallery_image"]["tmp_name"], "upload/" . $_FILES["gallery_image"]["name"]);
            $_SESSION['success'] = "Gallery School Updated";
            header('Location: galleryschool.php');
        }
    } else {
        $_SESSION['status'] = " Gallery School NOT Updated";
        header('Location: galleryschool.php');
    }
}

if (isset($_POST['deletegallery_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM galleryschool WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: galleryschool.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: galleryschool.php');
    }
}
