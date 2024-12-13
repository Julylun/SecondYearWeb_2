    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="dashboard.php" class="brand-link">
            <span class="brand-text font-weight-light">Sparkle Kids | Admin</span>
        </a>
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="2.1rem" height="2.1rem" x="0" y="0" viewBox="0 0 45.532 45.532" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                        <g>
                            <path d="M22.766.001C10.194.001 0 10.193 0 22.766s10.193 22.765 22.766 22.765c12.574 0 22.766-10.192 22.766-22.765S35.34.001 22.766.001zm0 6.807a7.53 7.53 0 1 1 .001 15.06 7.53 7.53 0 0 1-.001-15.06zm-.005 32.771a16.708 16.708 0 0 1-10.88-4.012 3.209 3.209 0 0 1-1.126-2.439c0-4.217 3.413-7.592 7.631-7.592h8.762c4.219 0 7.619 3.375 7.619 7.592a3.2 3.2 0 0 1-1.125 2.438 16.702 16.702 0 0 1-10.881 4.013z" fill="#ffffff" opacity="1" data-original="#000000" class="hovered-path"></path>
                        </g>
                    </svg>
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $_SESSION['uname']; ?></a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <?php if ($_SESSION['utype'] == 1): ?>
                    <!-- Subadmins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Sub-Admins
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="add-subadmin.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-subadmins.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
    
                    <!-- Teachers -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Teachers
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="add-teacher.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-teachers.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <!-- Classes -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Classes
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="add-class.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-classes.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <!-- Enrollment -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Enrollment
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="new-enrollments.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="accepted-enrolment.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Accepted</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="rejected-enrolments.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rejected</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="all-enrolments.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All</p>
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <!-- Visitors -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Visitors
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="new-visitors.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="visited-visitors.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Visited</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="notvisited-visitors.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Not Visited</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="all-visitors.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All</p>
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <!-- Reports -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Pages
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="aboutus.php" class="nav-link">
                                    <i class="far fa-file-alt nav-icon"></i>
                                    <p>About us</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact-us.php" class="nav-link">
                                    <i class="fas fa-file nav-icon"></i>
                                    <p>Contact us</p>
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <!-- Profile -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>
                                Account Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link">
                                    <i class="far fa-user nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="change-password.php" class="nav-link">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <p>Change Password</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">
                                    <i class="fas fa-sign-out-alt nav-icon"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>