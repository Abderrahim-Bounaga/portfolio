<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">PerfectCup Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="users.php"><i class="fa fa-fw fa-user"></i> users</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                    <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-eye"></i> Resume <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="view_resume.php"><i class="fa fa-fw fa-eye"></i> View Resume</a>
                            </li>
                            <li>
                                <a href="add_resume.php"><i class="fa fa-fw fa-plus"></i> Add Resume</a>
                            </li> 
                            <li>
                                <a href="archif_resume.php"><i class="fa fa-fw fa-plus"></i> archif Resume</a>
                            </li>
                            <li>
                                <a href="categories_product.php"><i class="fa fa-fw fa-plus"></i> Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-eye"></i>Skills <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="view_skills.php"><i class="fa fa-fw fa-eye"></i> View skills</a>
                            </li> 
                            <li>
                                <a href="add_skills.php"><i class="fa fa-fw fa-plus"></i> Add skills</a>
                            </li> 
                             <li>
                                <a href="archif_skills.php"><i class="fa fa-fw fa-plus"></i> archif skills</a>
                            </li>
                        </ul>
                    </li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i>project <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="view_project.php"><i class="fa fa-fw fa-eye"></i> View project</a>
                            </li>
                            <li>
                                <a href="add_project.php"><i class="fa fa-fw fa-plus"></i> Add project</a>
                            </li> 
                            <li>
                                <a href="archif_project.php"><i class="fa fa-fw fa-plus"></i> archif project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#coupons"><i class="fa fa-fw fa-book"></i> services <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="coupons" class="collapse">
                            <li>
                                <a href="view_services.php">View services</a>
                            </li>
                            <!-- <li>
                                <a href="view_ctgry_coupon.php">View categories Coupons</a>
                            </li> -->
                            <li>
                                <a href="add_services.php">Add services</a>
                            </li>
                            <!-- <li>
                                <a href="add_coupon_ctgr.php">Add catigory Coupons</a>
                            </li> -->
                            
                        </ul>
                    </li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-dropbox"></i>about My <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="view_about.php"><i class="fa fa-fw fa-eye"></i> View About</a>
                            </li>
                            <li>
                                <a href="add_about.php"><i class="fa fa-fw fa-plus"></i> Add About</a>
                            </li> 
                            <li>
                                <a href="archif_about.php"><i class="fa fa-fw fa-plus"></i> archif About</a>
                            </li>
                        </ul>
                    </li>
                   
                    
                    
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>