<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="author" content="akhmadjon">
      <link rel="stylesheet" href="css/master.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script type="text/javascript" src="js/mainjavascript.js"></script>
      <script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>

  <div class="container-fluid">

    <div class="row">
    <div class="col-md-3 navator">
      <nav class="navbar">
        <div class="brandme">
          <h3><a href="index.php">CodingCamp</a></h3>
        </div>
          <ul class="nav navbar-nav starter1">
            <li> Welcome To Our Coding-Camp</li>

          </ul>
      </nav>
    </div>
    <section class="col-md-9 study-part">
      <section>

        <div class="headerdiv">
            <div class="">
              <!-- Learning Area -->
              <h2> Here You will be given a task to complete. </h2>
              <p> You are given a task to complete HTML form</p>
                <div class="containsjson" id="starttest">
                  <!-- WE WILL CALL JSON TO HERE  -->
                </div>
              <hr>
            </div>


             <!-- FORM FOR TYPING CODE -->
            <form action="index.php" method="post" class="control-form">

            <textarea class="jumbotron textareaforhtml" name="learningtocode" id="learningtohtml" placeholder="You Have to Write Your HTML Code Here:"></textarea>
            <br>
            <textarea class="jumbotron textareaforcss" name="learningtocss" id="learningtocss" placeholder="You Have to Write Your CSS Code Here:"></textarea>
            <br>
              <div class="row">
                <div class="col-md-6">
                  <button class="btn-block btn btn-danger" name="delete-old-lesson"> Delete Old Lesson</button>
                </div>
                <div class="col-md-6">
                    <input class="btn-block btn btn-success" type="submit" name="submit" value="Check">
                </div>
                
              </div>
            </form>
               <hr>
            <button class="btn-block btn btn-warning opencss" id="opencss">Move to CSS</button>
              
            
            
           
    </section>
    <section>
        <div class="phplayer">
<!-- <?php
  $myfile = fopen("learning.html", "w");
  
  $txt = "<p align=\"center\">Your HTML Code Will Be Opened Here.</p>";
  fwrite($myfile, $txt);
  
  fclose($myfile);
 ?> -->

        </div>
    </section>
    <section>
      <hr>
      <iframe class="responsive-item" src="learning.html" width="100%" height="600px" align="center"></iframe>

    </section>
  </section>


  </div>

    <?php if(isset($_POST['learningtocode'])) {
      $myHtmlCode = $_POST['learningtocode'];
      $myCssCode = $_POST['learningtocss'];
      $handle = fopen("learning.html", 'w');
      $myCss = "<style>" . strval($myCssCode) . "</style>";

      $fullCode = strval($myHtmlCode) .  $myCss;
   
      fwrite($handle, $fullCode);
      fclose($handle);
    }
    
    if(isset($_POST['delete-old-lesson'])) {
      echo ">";
       unlink('learning.html');
      header("Location: index.php");

    }
    ?>
   

  </div>
   
</body>

</html>
