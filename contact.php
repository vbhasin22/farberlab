<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact | Farber Lab</title>
    <meta name="author" content="Vikram Bhasin">
    <meta name="description" content="Farber Lab at the University of Virginia">
    <meta name="viewport" content="width=device-width">
    <link href="media/favicon.png" rel="icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
  	<link href="css/material-wfont.min.css" rel="stylesheet">
    <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobilecss/mobile_contact.css" rel="stylesheet">
 </head>

<div class="pagewrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Farber Lab</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="people.php">People</a></li>
                <li><a href="publications.php">Publications</a></li>
                <li><a href="links.php">Links</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
                <li><a href="press.php">Press</a></li>
            </ul>
        </div>
        </div>
    </div>
    <br></br>
    <br></br>

<div class="row">
        <div class="col-md-8">
            <div class="well">
                <h4>The Lab is located on the 3rd floor of UVA Medical Center's West Complex. It is located in the Old Medical School Area at Room 3836.</h4>
                <iframe width="750" height="450" frameborder="0" style="border:0" src="
                 https://www.google.com/maps/embed/v1/place?q=West%20Complex%20University%20of%20Virginia%20Charlottesville%2C%20VA%2022903
                 &key=AIzaSyC6DLz6KFai6ZJqC9Yz1kGzV7QxRfG1hQ0
                 &zoom=17
                 &maptype=satellite"></iframe>
            </div>
    </div>

    <div class="col-md-4">
        <div class="well">
            <h4><strong>Mailing Address:</strong></h4>
            <address>
            University of Virginia<br>
            Center for Public Health Genomics<br>
            P.O. Box 800717<br>
            Charlottesville, VA 22908<br>
            </address>

            <h4><strong>FedEx or other Courier:</strong></h4>
            <address>
            Center for Public Health Genomics<br>
            Old Med School Rm 3836<br>
            21 Hospital Dr<br>
            Lane Rd Loading Dock<br>
            Charlottesville, VA 22908<br>
            </address>

            <h4><strong>Contact Information:</strong></h4>
            <i class="mdi-communication-phone"></i> 434-243-5946<br>
            <i class="mdi-communication-email"></i> <a href="mailto:crf2s@virginia.edu" title="Email Charles">crf2s@virginia.edu </a><br>
        </div>
    </div>
</div>


 <div class="footer">
  <div class="well">
        <div class="row">
            <div class="col-md-4">
                <p class="text-muted">  
                <a href="http://cphg.virginia.edu/">Center for Public Health Genomics</a> <br> © 2014-2015 | <a href="mailto:vb8nd@virginia.edu">Email Webmaster</a></p>
            </div>
            <div class="col-md-4">
            <p style="text-align:center"><strong>Total Visitors: 
      
      <?php 
      $filename = "counter.txt";
      $ip_filename = "ipaddr.txt";

      function counter() {
        $ip = $_SERVER['REMOTE_ADDR'];
        global $filename, $ip_filename;

        if (!in_array($ip, file($ip_filename, FILE_IGNORE_NEW_LINES))) {
          $current_value = (file_exists($filename)) ? file_get_contents($filename) : 0;
          file_put_contents($ip_filename, $ip."\n", FILE_APPEND);
          file_put_contents($filename, ++$current_value);
        }

        $count = file_get_contents($filename);
        echo $count;

      }
      counter();
      
      ?>

      </strong> </p>

            </div>
            <div class="col-md-4">
                <p style="text-align:right"> Special Thanks to: </p>
                <div class="imgs">
                    <a href="http://cphg.virginia.edu/">
                    <img title="Center for Public Health Genomics" class="CPHG" style="height:35%;width:35%" src="media/CPHG.png"> </a>
                    <a href="http://www.medicine.virginia.edu/">
                    <img title="University of Virginia Medical School" class="MedSchool" style="height:35%;width:35%" src="media/MedSchool.png"> </a>
                </div>
            </div>
        </div>
    </div>

 </div>

<!--javascript code-->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script>
        $(document).ready(function() {
            $.material.init();
        });
</script>
</body>
</div>
</html>