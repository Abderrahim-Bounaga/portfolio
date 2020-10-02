<?php include "admin_header.php" ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Product List
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
                            $query = "SELECT * FROM skills  WHERE skills_archif = '1'" ;
                            $load_products_query = mysqli_query($db,$query);

                            if (!$load_products_query) {
                                die("QUERY FAILED". mysqli_error($db));
                            }

                            while ($row = mysqli_fetch_array($load_products_query)) {
                                $skills_id = $row['skills_id'];
                                $skills_title = $row['skills_title'];
                                $skills_desc = $row['skills_desc'];
                               $skills_date = $row['skills_date'];
                               $skills_image = $row['skills_image'];


                                echo "<tr>";
                                echo "<td>$skills_id</td>";
                                echo "<td>$skills_title</td>";
                                echo "<td>$skills_image</td>";
                                echo "<td>$skills_desc</td>";
                                echo "<td>$skills_date</td>";
                                echo "<td> <a href='edit_cat.php?edit=$skills_id'>Edit</a></td>";
                                echo "<td><a href='archif_cat.php?delete=$skills_id'>add to products</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['delete'])) {
                                $deleted_product_id = $_GET['delete'];

                                $query_UPDATE = "UPDATE skills SET skills_archif = '0' WHERE skills_id = $deleted_product_id";
                                $edit_product_query = mysqli_query($db,$query_UPDATE);

                                header('Location: archif_cat.php');
                            }


                           

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>