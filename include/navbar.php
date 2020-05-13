
<body id="_body">
<!--Start NavBar-->
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5">
            <h1><img class="logo" src="images/logo_250px.png" height="150"/></h1>
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a style="font-size: large;" href="dashboard.php" aria-expanded="false">Dashboard</a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Library</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="listBooks.php">All Books</a>
                                </li>
                                <li>
                                    <a class="active" href="add.php">Add New Book</a>
                                </li>
                                <li>
                                    <a href="edit.php">Edit Book</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="reports.php">Reports</a>
                        </li>
                        <li>
                            <a href="students.php">Students</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>

            <div class="mb-5">
                <div class="form-group d-flex">
                    <div class="ui button animated" style="position:absolute;left: 4.5rem;" tabindex="0">
                        <div class="visible content"><a style="font-size: larger">LOGOUT</a></div>
                        <div class="hidden content" onclick="window.location='logout.php';">
                            <i class="times circle icon big _logout"></i>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </nav>


    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="top">
            <img class="topbar" src="images/topbar.png" align="right"/>
            <div class="department-name">Library System</div>
            <img class="topbar2" src="images/topbarLine.png"/>
            <img class="topbar3" src="images/topbarLine.png"/>
        </div>
<!--End NavBar-->
