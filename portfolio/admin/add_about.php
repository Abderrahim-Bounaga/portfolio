
<?php
session_start();
 include "admin_header.php"
 ?>


<?php 

if (isset($_POST['add_about'])) {
    $about_name = $_POST['about_name'];
    $about_desc = $_POST['about_desc'];
    $about_date = $_POST['about_date'];
    $about_email = $_POST['about_email'];
    $about_address = $_POST['about_address'];
    $about_number = $_POST['about_number'];
    $about_project = $_POST['about_project'];
   
    

    $add_about = "INSERT INTO about (about_name,about_desc,about_date,about_email,about_address,about_number,about_project) VALUES ('$about_name','$about_desc','$about_date','$about_email','$about_address','$about_number','$about_project')";
    $add_about_query = mysqli_query($db,$add_about);

    if($add_about_query){
        echo " <script>alert('about has been added successfully')</script>";
        echo " <script>window.open('add_about.php','_self')</script>";
    }

}
?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add about
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_about.php" method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                        <label for="about_name">about Name</label>
                        <input type="text" class="form-control" name="about_name">
                    </div>

                    <div class="form-group">
                        <label for="about_desc">about Description</label>
                        <textarea class="form-control "name="about_desc" id="" cols="30" rows="5">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="about_image">about Date </label>
                        <input type="date"  name="about_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="about_image">about Email </label>
                        <input type="email"  name="about_email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="about_image">about Address </label>
                        <input type="text"  name="about_address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="about_image">about Number </label>
                        <input type="number"  name="about_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="about_image">about Project </label>
                        <input type="number"  name="about_project" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_about" value="Add about">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 

    <?php include "admin_footer.php" ?>
   
