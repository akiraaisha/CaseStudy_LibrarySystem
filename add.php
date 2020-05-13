<!doctype html>
<html lang="en">
<?php
    include('include/head.html');
    include('include/navbar.php');
?>
  <body id="_body">
<!--          <div class="topLine"></div>-->
<!--          <div class="topLine2"></div>-->
          <div class="ui container">
        <h1 class="">Add New Book</h1>
          <form class="ui form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
              <div class="ui segment compact">
          <div class="fields ui">
              <div class="field" >
                  <label>Book Title</label>
                  <input type="text" placeholder="Book Title" autocomplete="off" id="bkTitle" name="bkTitle">
              </div>
              <div class="field ui" >
                  <label>Book ISBN</label>
                  <input type="text" placeholder="Book ISBN" autocomplete="off" id="bkISBN" name="bkISBN">
              </div>
              <div class="field ui">
                  <label>Book Code</label>
                  <input type="text" placeholder="Book Code" autocomplete="off"  id="bkCode" name="bkCode">
              </div>
              <div class="field ui">
                  <label>Book Author</label>
                  <input type="text" placeholder="Book Author" autocomplete="off" id="bkAuthor" name="bkAuthor">
              </div>
              <div class="field ui" >
                  <label>Book Type</label>
                  <input type="text" placeholder="Book Type" autocomplete="off" id="bkType" name="bkType">
              </div>
          </div>
                  <div class="ui divider"></div>
              <div class="fields">
                  <div class="field ui" >
                      <label>Book Quantity</label>
                      <input type="text" pattern="\d{0,9}" max="3" maxlength="3" autocomplete="off" placeholder="Book Quantity" id="bkQuantity" name="bkQuantity">
                  </div>
                  <div class="field" >
                      <label>Book Subject</label>
                      <input type="text" placeholder="Book Subject" autocomplete="off" id="bkSubject" name="bkSubject">
                  </div>
              </div>
                  <div class="ui divider"></div>
                  <div class="fields">
                      <div class="field">
                          <label>Book Rack Number</label>
                          <input type="text" pattern="\d{0,9}" max="3" maxlength="3" autocomplete="off" placeholder="Book Rack Number" id="bkRackNumber" name="bkRackNumber">
                      </div>
                      <div class="field">
                          <label>Book Row Number</label>
                          <input type="text" pattern="\d{0,9}" max="3" maxlength="3" autocomplete="off" placeholder="Book Row Number" id="bkRowNumber" name="bkRowNumber">
                      </div>
                      <div class="field">
                          <label>Image Upload</label>
                          <div class="ui button animated" tabindex="0" >

                              <input type="file"accept="image/x-png,image/jpeg"  id="bkImgUpload" style="display: none" name="bkImgUpload"/>
                              <div href="#" class="visible content" ><a style="font-size: larger">Image Upload</a></div>
                              <div href="#" class="hidden content"  onclick="$('#bkImgUpload').trigger('click'); return false;">
                              <i class="upload big circle icon book-Image-Upload" style="position:absolute;right: 3.7rem!important; top:-.55rem; padding-left: 3em; padding-right: 3em; left: -1.7rem;"></i>
                          </div>
                      </div>
                      </div>
                      <div class="field image">
                          <img class="ui rounded image tiny" id="previewImage" src="images/preview.png" style="position: absolute;">
                      </div>
              </div>
                  <div class="ui fields">
                      <div class="field">
                          <button class="ui button primary submit">Submit</button>
                          <input value="Clear" type="button" class="ui button" onclick="this.form.reset();document.getElementsByName('type').value ='';"/>

                      </div>
                  </div>
                  <?php
                      include('config.php');

                      if($_SERVER["REQUEST_METHOD"] == "POST") {
                          $bookTitle = mysqli_real_escape_string($db_conn, $_POST['bkTitle']);
                          $bookISBN = mysqli_real_escape_string($db_conn, $_POST['bkISBN']);
                          $bookCode = mysqli_real_escape_string($db_conn, $_POST['bkCode']);
                          $bookAuthor = mysqli_real_escape_string($db_conn, $_POST['bkAuthor']);
                          $bookType = mysqli_real_escape_string($db_conn, $_POST['bkType']);
                          $bkQuantity = mysqli_real_escape_string($db_conn, $_POST['bkQuantity']);
                          $bkSubject = mysqli_real_escape_string($db_conn, $_POST['bkSubject']);
                          $bookRackNumber = mysqli_real_escape_string($db_conn, $_POST['bkRackNumber']);
                          $bookRowNumber = mysqli_real_escape_string($db_conn, $_POST['bkRowNumber']);

                          try {
                              switch ($_FILES['bkImgUpload']['error']) {
                                  case UPLOAD_ERR_OK:
                                      break;
                                  case UPLOAD_ERR_NO_FILE:
                                      throw new RuntimeException("<div class=\"ui yellow message compact\">".
                                          "<div class=\"header\">Warning!</div>No Image Uploaded.");
                                  case UPLOAD_ERR_INI_SIZE:
                                  case UPLOAD_ERR_FORM_SIZE:
                                      throw new RuntimeException("<div class=\"ui red message compact\">".
                                          "<div class=\"header\">Error!</div>Exceeded Filesize Limit.");
                                  default:
                                      throw new RuntimeException("<div class=\"ui red message compact\">".
                                          "<div class=\"header\">Error!</div>Unknown Errors.");
                              }

                              $fileInfo = new finfo(FILEINFO_MIME_TYPE);
                              if (false === $ext = array_search(
                                      $fileInfo->file($_FILES['bkImgUpload']['tmp_name']),
                                      array(
                                          'jpg' => 'image/jpeg',
                                          'png' => 'image/png',
                                      ),
                                      true
                                  )) {
                                  throw new RuntimeException(  "<div class=\"ui negative message compact\">".
                                      "<div class=\"header\">Error</div>Invalid File Format!");

                              }
                              $randFileName  = substr(str_shuffle(hash('sha256', microtime())), 0, 64);
                              #$randFileName = sha1_file($_FILES['bkImgUpload']);
                              $extension  = pathinfo($_FILES["bkImgUpload"]["name"], PATHINFO_EXTENSION );
                              if (!move_uploaded_file(
                                  $_FILES["bkImgUpload"]["tmp_name"],
                                  "uploaded_images/" .
                                  $randFileName.".".
                                  $extension));
                              $uploaded_file = "uploaded_images/". $randFileName.".".$extension;

                              #echo "<img style=\"height:250px\" src=\"$uploaded_file\"></img>";
                              echo "<div class=\"ui positive message compact\">".
                                  "<div class=\"header\">Successful!</div><a href='$uploaded_file' target=\"_blank\">Image</a> Uploaded!";

                          } catch (RuntimeException $e) {
                              echo  $e->getMessage();
                          }
                     }
                  ?>
          </form>

      </div>
      </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  <script>
      function display(input) {
          var url = input.value;
          var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
          if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg") || ext == "jfif") {
              var reader = new FileReader();
              reader.onload = function(event) {
                  $('#previewImage').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
          }else{
              $('#previewImage').attr('src', 'images/preview.png');
          }
      }

      $("#bkImgUpload").change(function() {
          display(this);
      });

      $('.message .close')
          .on('click', function() {
              $(this)
                  .closest('.message')
                  .transition('fade')
              ;
          });
      document.forms[0].addEventListener('submit', function( evt ) {
          var file = document.getElementById('bkImgUpload').files[0];
          if(file && file.size < 10485760) { // 10 MB (this size is in bytes)
              //Submit form
          } else {
              //Prevent default and display error
              evt.preventDefault();
              alert("max file size");
          }
      }, false);
  </script>
  </body>
</html>