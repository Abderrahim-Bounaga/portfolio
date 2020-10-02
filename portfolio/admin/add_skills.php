<?php include "admin_header.php"?>
<?php include "db.php" ?>

<?php 

if (isset($_POST['add_skills'])) {
    $skills_title = $_POST['skills_title'];
    $skills_por = $_POST['skills_por'];
   
    
   


    $add_skills = "INSERT INTO skills (skills_title,skills_por) VALUES ('$skills_title','$skills_por')";
    $add_skills_query = mysqli_query($db,$add_skills);

    if($add_skills_query){
        echo " <script>alert('skills has been added successfully')</script>";
        echo " <script>window.open('add_skills.php','_self')</script>";
    }

}
?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add a skills
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_skills.php" method="post" enctype="multipart/form-data">    
     
     
                    <div class="form-group">
                        <label for="title">skills Title</label>
                        <input type="text" class="form-control" name="skills_title">
                    </div>
                    <div class="form-group">
                        <label for="poe">skills Porsontage</label>
                        <input type="number" class="form-control" name="skills_por">
                    </div>
                    

                   

      
        
                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_skills" value="Add skills">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 

    <?php include "admin_footer.php" ?>
   
