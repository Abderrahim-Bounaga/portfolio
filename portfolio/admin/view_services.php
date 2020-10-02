<?php 
session_start();
include "admin_header.php"
 ?>


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            services List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>services Title</th>
                        <th>services icone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM services " ;
                            $load_services_query = mysqli_query($db,$query);

                            if (!$load_services_query) {
                                die("QUERY FAILED". mysqli_error($db));
                            }

                            while ($row = mysqli_fetch_array($load_services_query)) {
                                $services_id = $row['id_services'];
                                $services_title = $row['services_title'];
                                $services_icone = $row['services_icone'];

                                $get_services = "SELECT * FROM services" ;
                                $run_services = mysqli_query($db,$get_services);
                                $row_services = mysqli_fetch_array($run_services);

                                $services_title = $row_services['services_title'];

                                echo "<tr>";
                                echo "<td>$services_id</td>";
                                echo "<td>$services_title</td>";
                                echo "<td>$services_icone</td>";
                                echo "<td> <a href='edit_services.php?edit=$services_id '><i class='fa fa-pencil'>Edit</i></a></td>";
                                echo "<td><a href='view_services.php?delete=$services_id '><i class='fa fa-trash'>Delete</i></a></td>";
                                echo "</tr>";
                            }
                            
                            if (isset($_GET['delete'])) {
                                $deleted_services_id = $_GET['delete'];

                                $delete_query = "DELETE FROM services WHERE services_id = '$deleted_services_id'";
                                $deleted_services_query = mysqli_query($db,$delete_query);

                                header('Location: view_services.php');
                            }  

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>