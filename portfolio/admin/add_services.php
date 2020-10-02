
<?php
session_start();
 include "admin_header.php"
?>


<?php 

if (isset($_POST['add_services'])) {
    $services_title = $_POST['services_title'];
    $services_icone = $_POST['services_icone'];


    if($check_services == 1){
        echo " <script>alert('services Code/ Product Already Added. Choose Another services Code ')</script>";
        
    }else{
        $insert_services = "INSERT INTO services ( services_title, services_icone) VALUES ('$services_title', '$services_icone')";
        $run_services = mysqli_query($db, $insert_services);
        if($run_services){
            echo " <script>alert('Your services Has Been Created')</script>";
            echo " <script>window.open('view_services.php','_self')</script>";
        }
    }

}
?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add services
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_services.php" method="post" >    
     
     
                    <div class="form-group">
                        <label for="title">services Title</label>
                        <input type="text" class="form-control" name="services_title">
                    </div>

                    <div class="form-group">
                        <label for="services_price">services pourcentage réduction</label>
                        <input type="text" min="0" max="100" class="form-control" name="services_icone">
                    </div>

                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_services" value="Add services">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 

    <?php include "admin_footer.php" ?>
   
