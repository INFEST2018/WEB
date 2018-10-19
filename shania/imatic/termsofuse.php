<?php
include dirname(__FILE__).'/config.php';
function siteURL() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || 
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title><?php echo $config['Title']; ?></title>
<meta name="description" content="<?php echo $config['Meta-Description']; ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../Assets/css/style.css">
</head>
<body>
<progress value="" max="100" id="progress"></progress>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $config['Title']; ?></a>
        </div>
        <div class="navbar-collapse collapse">
            
        </div>
    </div>
</div>
<div class="container">




    <div class="col-md-12">
        <h1>Terms of Use ("Terms")</h1>
<p>Last updated: July 28, 2014</p>

<p>Please read these Terms of Use ("Terms", "Terms of Use") carefully before using the <?php echo siteURL(); ?> website (the "Service") operated by <?php echo $config['Title']; ?> ("us", "we", or "our").</p>

<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>

<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>


<p><strong>Links To Other Web Sites</strong></p>

<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by <?php echo $config['Title']; ?>.</p>

<p><?php echo $config['Title']; ?> has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that <?php echo $config['Title']; ?> shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>

<p><strong>Termination</strong></p>

<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>


<p><strong>Governing Law</strong></p>

<p>These Terms shall be governed and construed in accordance with the laws of New York, United States, without regard to its conflict of law provisions.</p>

<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>

<p><strong>Changes</strong></p>

<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 60 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>

<p><strong>Contact Us</strong></p>

<p>If you have any questions about these Terms, please contact us.</p>
    </div>
</div>
<Br /><Br/>
<footer class="footer">
    &copy; <?php echo date("Y");?> |
    <a href="termsofuse.php">Terms Of Use</a> | 
    <a href="privacypolicy.php">Privacy Policy</a> 
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style>
footer{
    position: fixed;
    width: 100%;
    background-color: #fff;
    bottom:0px;
    left:0;
    text-align: center;
}
</style>
</body> 
</html>
