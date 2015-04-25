<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Publications | Farber Lab </title>
    <meta name="author" content="Vikram Bhasin">
    <meta name="description" content="Farber Lab at the University of Virginia">
    <meta name="viewport" content="width=device-width">
    <link href="media/favicon.png" rel="icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/publications.css" rel="stylesheet">
    <link href="css/material-wfont.min.css" rel="stylesheet">
    <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobilecss/mobile_publications.css" rel="stylesheet">
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
                <li class="active"><a href="publications.php">Publications</a></li>
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
    <div class="publications">
        <ul class="pub_list">

        <li> <a href="http://www.ncbi.nlm.nih.gov/pubmed/14970693">Comparative mapping of genes flanking the human chromosome 12 evolutionary breakpoint in the pig</a>
        <br>
        <strong>Farber CR</strong>, Raney NE, Rilington VD, Venta PJ, Ernst CW<br>
        <strong>Cytogenetic and Genome Research</strong><br>
        October 3, 2003<br>
        <a class="link" href="http://europepmc.org/abstract/MED/14970693" title="View Paper"> 
            <button class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-primary">
                <i class="mdi-content-link"></i>
            </button>
        </a>
        </li>
        <br>

        <li> <a href="http://www.ncbi.nlm.nih.gov/pubmed/12887183">Mapping of porcine genetic markers generated by representational difference analysis</a>
        <br>
        <strong>Farber CR</strong>, Raney NE, Kuhlers DL, Nadarajah K, Ernst CW<br> 
        <strong>Animal Biotechnology</strong><br>
        May 14, 2003<br>
        <a class="link" href="http://www.tandfonline.com/doi/pdf/10.1081/ABIO-120022139#.VKzi64rF_3o" title="View Paper"> 
            <button class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-primary">
                <i class="mdi-content-link"></i>
            </button>
        </a>
        </li>
        <br>

        <li> <a href="http://www.ncbi.nlm.nih.gov/pubmed/12580781">Putative <i>in silico</i> mapping of DNA sequences to livestock genome maps using SSLP flanking sequences</a>
        <br>
        <strong>Farber CR</strong>, Medrano JF<br> 
        <strong>Animal Genetics</strong><br>
        Feruary 4, 2003<br>
         <a class="link" href="http://onlinelibrary.wiley.com/doi/10.1046/j.1365-2052.2003.00919.x/pdf" title="Download Paper"> 
            <button class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-primary">
                <i class="mdi-file-file-download"></i>
            </button>
        </a>
        </li>
        <br>

        </ul>
    </div>
    
    <ul class="pager">
        <li class="previous"><a href="publications2.php">← Newer</a></li>
        <li class="next disabled"><a href="javascript:void(0)">Older →</a></li>
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