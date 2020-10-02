<?php include "admin_header.php" ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            resume List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>Date</th>
                        <th>Title</th>                       
                        <th>Info</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>archive</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM resumes  WHERE resume_archif = '0'" ;
                            $load_resumes_query = mysqli_query($db,$query);

                            if (!$load_resumes_query) {
                                die("QUERY FAILED". mysqli_error($db));
                            }

                            while ($row = mysqli_fetch_array($load_resumes_query)) {
                                $id_resume = $row['id_resume'];
                                $resume_date = $row['resume_date'];
                                $resume_title = $row['resume_title'];
                                $resume_info = $row['resume_info'];
                                $resume_desc = $row['resume_desc'];



                                echo "<tr>";
                                echo "<td>$id_resume</td>";
                                echo "<td>$resume_date</td>";
                                echo "<td>$resume_title</td>";
                                echo "<td>$resume_info</td>";
                                echo "<td>$resume_desc</td>";
                                echo "<td> <a href='edit_resume.php?edit=$id_resume'>Edit</a></td>";
                                echo "<td><a href='view_resume.php?delete=$id_resume'>Delete</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['delete'])) {
                                $deleted_id_resume = $_GET['delete'];

                                $query_UPDATE = "UPDATE resumes SET resume_archif = '1' WHERE id_resume = $deleted_id_resume";
                                $edit_resume_query = mysqli_query($db,$query_UPDATE);

                                header('Location: view_resumes.php');
                            }


                           

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>