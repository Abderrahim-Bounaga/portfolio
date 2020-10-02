<?php include "admin_header.php"?>
<?php include "db.php" ?>

<?php 

if (isset($_POST['add_resume'])) {
    $resume_date = $_POST['resume_date'];
    $resume_title = $_POST['resume_title'];
    $resume_info = $_POST['resume_info'];
    $resume_desc = $_POST['resume_desc'];


   

   

   

    $add_resume = "INSERT INTO resumes (resume_date,resume_title,resume_info,resume_desc) VALUES ('$resume_date','$resume_title','$resume_info','$resume_desc')";
    $add_resume_query = mysqli_query($db,$add_resume);

    if($add_resume_query){
        echo " <script>alert('resume has been added successfully')</script>";
        echo " <script>window.open('add_resume.php','_self')</script>";
    }

}
?>
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add a resume
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_resume.php" method="post" enctype="multipart/form-data">
     
                    <div class="form-group">
                        <label for="title">resume date</label>
                        <input type="text" class="form-control" name="resume_date">
                    </div>
                    
                    <div class="form-group">
                        <label for="resume_title">resume title</label>
                        <input type="text" class="form-control" name="resume_title">
                    </div>
                    
                    <div class="form-group">
                        <label for="resume_info">resume info</label>
                        <input type="text" class="form-control" name="resume_info">
                    </div>

                   <div class="form-group">
                        <label for="resume_desc">resume desc</label>
                        <input type="text" class="form-control" name="resume_desc">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_resume" value="Add resume">
                    </div>

            </form>


            </div>
            <!-- /.container-fluid -->

    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 

    <?php include "admin_footer.php" ?>
   
