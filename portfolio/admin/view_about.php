<?php 
session_start();
include "admin_header.php"
 ?>


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            about
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>Name</th>                       
                        <th>Desc</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>address</th>
                        <th>number</th>
                        <th>project</th>
                        <th>Edit</th>
                        <th>archive</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM about  WHERE about_archive = '0'" ;
                            $load_about_query = mysqli_query($db,$query);

                            if (!$load_about_query) {
                                die("QUERY FAILED". mysqli_error($db));
                            }

                            while ($row = mysqli_fetch_array($load_about_query)) {
                                $about_id = $row['id_about'];
                                $about_name = $row['about_name'];
                                $about_desc = $row['about_desc'];
                                $about_date = $row['about_date'];
                                $about_email = $row['about_email'];
                                $about_address = $row['about_address'];
                                $about_number = $row['about_number'];
                                $about_project = $row['about_project'];

                                echo "<tr>";
                                echo "<td>$about_id</td>";
                                echo "<td>$about_name</td>";
                                echo "<td>$about_desc</td>";
                                echo "<td>$about_date</td>";
                                echo "<td>$about_email</td>";
                                echo "<td>$about_address</td>";
                                echo "<td>$about_number</td>";
                                echo "<td>$about_project</td>";
                                echo "<td> <a href='edit_about.php?edit=$about_id'><i class='fa fa-pencil'></i>Edit</a></td>";
                                echo "<td><a href='view_about.php?archiver=$about_id'><i class='fa fa-fw fa-edit'></i>archiver</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['archiver'])) {
                                $archive_about_id = $_GET['archiver'];

                                $query_archive = "UPDATE about SET about_archive ='1' WHERE about_id = '$archive_about_id'";
                                $archive_about_query = mysqli_query($db,$query_archive);

                                header('Location: view_about.php');
                            }

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>