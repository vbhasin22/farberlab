<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Projects | Farber Lab </title>
    <meta name="author" content="Vikram Bhasin">
    <meta name="description" content="Farber Lab at the University of Virginia">
    <meta name="viewport" content="width=device-width">
    <link href="media/favicon.png" rel="icon">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/projects.css" rel="stylesheet">
    <link href="css/material-wfont.min.css" rel="stylesheet">
    <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobilecss/mobile_projects.css" rel="stylesheet">
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
                <li class="active"><a href="projects.php">Projects</a></li>
                <li><a href="people.php">People</a></li>
                <li><a href="publications.php">Publications</a></li>
                <li><a href="links.php">Links</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="press.php">Press</a></li>
            </ul>
        </div>
        </div>
    </div>
    <br></br>
    <br></br>

    <div class="well">
    <h2 class="text-muted">
        Projects in the Farber Lab fall into three general categories:
        
    </h2>
	<br>

    <ul class="media-list">

        <li class="media">
            <a class="media-left">
                <img class="img-circle" height="225" width="300" src="http://cphg.virginia.edu/farber/files/2011/10/slide11_system-genetics.png" style="border:1px solid black;" alt="Systems Genetics">
            </a>
            <div class="media-body">
                <td width="65%"> 
                    <h4 class="media-heading"> <strong> Systems Genetics of Complex Skeletal Phenotypes </strong> </h4>
                        <a href="http://cphg.virginia.edu/?page_id=410">Systems genetics</a> seeks to understand how genetic information is integrated, organized and transmitted through cellular networks to impact cellular function/behavior. Much of our work in the lab uses systems genetics approaches that integrate genetic and transcriptome data to identify individual genes and gene networks influencing complex skeletal phenotypes.  
                        <br>
                        </br>
                        Example Papers: <a href="http://www.jci.org/articles/view/73072">Mesner et al. Bicc1</a>, <a href="http://www.plosgenetics.org/article/info%3Adoi%2F10.1371%2Fjournal.pgen.1002038"> Farber et al. Asxl2</a>, <a href="http://www.plosgenetics.org/article/info%3Adoi%2F10.1371%2Fjournal.pgen.1003150"> Calabrese et al. Plos Genetics</a>.
                </td>
            </div>
        </li>

        <li class="media">
            <a class="media-left">
                <img class="img-circle" height="225" width="300" src="http://cphg.virginia.edu/farber/files/2011/10/slide19_Bicc1-network.png" style="border:1px solid black;" alt="Novel Skeletal Genes">
            </a>
            <div class="media-body">
                <td width="65%"> 
                    <h4 class="media-heading"> <strong> Investigating the Function of Novel Skeletal Genes</strong> </h4>
                        We are actively investigating the functions of genes identified using systems genetics.  We investigate gene function using a variety of approaches ranging from cell culture systems to the generation and characterization of mouse models.
                        <br>
                        </br>
                        Example Papers
                </td>
            </div>
        </li>

        <li class="media">
            <a class="media-left">
                <img class="img-circle" height="225" width="300" src="http://wp.tx.ncsu.edu/fashioning-health/wp-content/uploads/2012/02/placeholder.jpg" style="border:1px solid black;" alt="CRISPR/Cas9 and iPSCs">
            </a>
            <div class="media-body">
                <td width="65%"> 
                    <h4 class="media-heading"> <strong> CRISPR/Cas9 and iPSCs </strong> </h4>
                        A burgeoning project in the Farber lab is focused on using osteoblasts derived from induced Pluriopotent Stem Cells as a renewable, primary cell model to study gene function.  We are working to combine CRIPSR/Cas9 genome-editing with iPSCs to study gene function and identify genomic variant influeincing osteoblast activity.
                        <br>
                        </br>
                        Example Papers 
                </td>
            </div>
        </li>

    </ul>
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