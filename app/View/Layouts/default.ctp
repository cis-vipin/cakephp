<?php
/**
*
*
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link http://cakephp.org CakePHP(tm) Project
* @package app.View.Layouts
* @since CakePHP(tm) v 0.10.0.1076
* @license http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php //echo $cakeDescription ?>:
<?php //echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->meta('icon');

echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min', 'custom'));
echo $this->Html->script(
array('jquery-1.7.1.min', 'bootstrap.min')
); ?>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
<div class="page-header">
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="http://localhost:3000/" target="_blank" class="brand">Cake PHP</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#" target="_blank">Home</a></li>
              <li><a href="#" target="_blank">About</a></li>
              <li><a href="#" target="_blank">Contact</a></li>
            </ul>
          	<ul class="nav navbar-nav navbar-right">
          	 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Category <b class="caret"></b></a>
                    <ul class="dropdown-menu">
          		<li><a href="#">Action</a></li>
          		<li><a href="#">Another action</a></li>
          		<li><a href="#">Something else here</a></li>
          		<li class="divider"></li>
          		<li><a href="#">Separated link</a></li>
          	</ul>
          </div>
        </div>
      </div>
    </div>    

<div class="main-container">
	<?php echo $this->fetch('content'); ?>
</div>


<div class="footer">
<hr>
 <footer>
        <p>© Copyright 2013 Tutorial Republic</p>
 </footer>
 </div>

</body>
</html>
