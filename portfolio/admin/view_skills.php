<?php include "admin_header.php" ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        skills List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>Title</th>
                        <th>porsontage</th>
                        <th>Edit</th>
                        <th>archive</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM skills WHERE skills_archive = '0'" ;
                            $load_products_query = mysqli_query($db,$query);

                            if (!$load_products_query) {
                                die("QUERY FAILED". mysqli_error($db));
                            }

                            while ($row = mysqli_fetch_array($load_products_query)) {
                                $skills_id = $row['id_skills'];
                                $skills_title = $row['skills_title'];
                                $skills_por = $row['skills_por'];
                               


                                echo "<tr>";
                                echo "<td>$skills_id</td>";
                                echo "<td>$skills_title</td>";
                                echo "<td>$skills_por</td>";
                                echo "<td> <a href='edit_cat.php?edit=$skills_id'>Edit</a></td>";
                                echo "<td><a href='view_cat.php?delete=$skills_id'>Delete</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['delete'])) {
                                $deleted_product_id = $_GET['delete'];

                                $query_UPDATE = "UPDATE skills SET skills_archive = '1' WHERE id_skills = $deleted_product_id";
                                $edit_product_query = mysqli_query($db,$query_UPDATE);

                                header('Location: view_cat.php');
                            }


                           

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>