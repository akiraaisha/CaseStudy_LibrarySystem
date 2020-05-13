<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" type="text/css" href="css/style2.css"/>
      <title>Library Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
		<link rel="stylesheet" href="css/style.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
      <script
              src="https://code.jquery.com/jquery-3.1.1.min.js"
              integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
              crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/form.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/form.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/input.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css" />
  </head>
  <body id="_body">
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
                    <!--<h1><a href="index.html" class="logo">Splash</a></h1>-->
                    <h1><img class="logo" src="images/logo_250px.png" height="150"/></h1>
                    <ul class="list-unstyled components mb-5">
	          <li>
	            <a style="font-size: large;" href="dashboard.php" data-toggle="collapse" aria-expanded="false">Dashboard</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Library</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="all.php">All Books</a>
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
              <a href="#">Contact</a>
	          </li>
	        </ul>

	        <div class="mb-5">
	            <div class="form-group d-flex">
                    <div class="ui button animated" style="position:absolute;left: 4.5rem;" tabindex="0">
                        <div class="visible content"><a style="font-size: larger">LOGOUT</a></div>
                        <div class="hidden content" onclick="window.location='logout.php';">
                        <i class="times circle icon big logout"></i>
                    </div>

                    </div>
	            </div>
	          </form>
					</div>
	      </div>
    	</nav>

        <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5 pt-5">
<!--          <div class="topbar"></div>-->
          <div class="top">
              <img class="topbar" src="images/topbar.png" align="right"/>
              <div class="department-name">Library System</div>
              <img class="topbar2" src="images/topbarLine.png"/>
              <img class="topbar3" src="images/topbarLine.png"/>

      </div>
<!--          <div class="topLine"></div>-->
<!--          <div class="topLine2"></div>-->
          <div class="ui container">
        <h1 class="">Add New Book</h1>
          <form class="ui form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <div class="ui segment compact">
          <div class="fields ui">
              <div class="field" >
                  <label>Book Title</label>
                  <input type="text" placeholder="Book Title" autocomplete="off" id="bkTitle">
              </div>
              <div class="field ui" >
                  <label>Book ISBN</label>
                  <input type="text" placeholder="Book ISBN" autocomplete="off" id="bkISBN">
              </div>
              <div class="field ui">
                  <label>Book Code</label>
                  <input type="text" placeholder="Book Code" autocomplete="off"  id="bkCode">
              </div>
              <div class="field ui">
                  <label>Book Author</label>
                  <input type="text" placeholder="Book Author" autocomplete="off" id="bkAuthor">
              </div>
              <div class="field ui" >
                  <label>Book Type</label>
                  <input type="text" placeholder="Book Type" autocomplete="off" id="bkType">
              </div>
          </div>
                  <div class="ui divider"></div>
              <div class="fields">
                  <div class="field ui" >
                      <label>Book Quantity</label>
                      <input type="text" pattern="\d{0,9}" max="3" maxlength="3" autocomplete="off" placeholder="Book Quantity" id="bkQuantity">
                  </div>
                  <div class="field" >
                      <label>Book Subject</label>
                      <input type="text" placeholder="Book Subject" autocomplete="off" id="bk">
                  </div>
              </div>
                  <div class="ui divider"></div>
                  <div class="fields">
                      <div class="field">
                          <label>Book Rack Number</label>
                          <input type="text" pattern="\d{0,9}" max="3" maxlength="3" autocomplete="off" placeholder="Book Rack Number" id="bkRackNumber">
                      </div>
                      <div class="field">
                          <label>Book Row Number</label>
                          <input type="text" pattern="\d{0,9}" max="3" maxlength="3" autocomplete="off" placeholder="Book Row Number" id="bkRowNumber">
                      </div>
                      <div class="field">
                          <label>Image Upload</label>
                          <div class="ui button animated" tabindex="0" >
                              <input type="file"accept="image/*"  id="imguploadBook" style="display: none" />
                              <div href="#" class="visible content" ><a style="font-size: larger">Image Upload</a></div>
                              <div href="#" class="hidden content"  onclick="$('#imguploadBook').trigger('click'); return false;">
                                  <i class="upload big circle icon book-Image-Upload" style="position:absolute;right: 3.7rem!important; top:-.55rem"></i>
                          </div>
                      </div>
                  </div>
              </div>
                  <div class="ui fields">
                      <div class="field">
                          <button class="ui button primary submit">Submit</button>
                          <input value="Clear" type="button" class="ui button" onclick="this.form.reset();document.getElementsByName('type').value ='';"/>
                      </div>
                  </div>
          </form>
      </div>
      </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  <script>
  </script>
  </body>
</html>