<?php include "admin_header.php"?>
<?php include "db.php" ?>

<?php 

if (isset($_POST['add_project'])) {
    $project_title = $_POST['project_title'];
    $project_lien = $_POST['project_lien'];
    $project_lang = $_POST['project_lang'];

   
    $project_img = $_FILES['project_img']['name'];
   
    $temp_name1 = $_FILES['project_img']['tmp_name'];
   

    move_uploaded_file($temp_name1, "img/$project_img");
   

    $add_project = "INSERT INTO project (project_img,project_lien,project_title,project_lang) VALUES ('$project_img','$project_lien','$project_title','$project_lang')";
    $add_project_query = mysqli_query($db,$add_project);

    if($add_project_query){
        echo " <script>alert('project has been added successfully')</script>";
        echo " <script>window.open('add_project.php','_self')</script>";
    }

}
?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add a project
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_project.php" method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                        <label for="project_image">project Image </label>
                        <input type="file"  name="project_img" class="form-control">
                    </div>
     
                    <div class="form-group">
                        <label for="lien">project Lien</label>
                        <input type="text" class="form-control" name="project_lien">
                    </div>

                    <div class="form-group">
                        <label for="title">project Title</label>
                        <input type="text" class="form-control" name="project_title">
                    </div>

                    <div class="form-group">
                        <label for="lang">project Lang</label>
                        <input type="text" class="form-control" name="project_lang">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_project" value="Add project">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 

    <?php include "admin_footer.php" ?>
   
