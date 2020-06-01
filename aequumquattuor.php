<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <?php
        require('./temp/header.php');
        require './script/script1.php';
    ?>  
</head>
    <body oncontextmenu="return false">
    <div class="container-fluid">
        <?php 
            require './temp/titlebar.php';
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <div class="sidebar-nav">
                        <div class="navbar navbar-default" role="navigation" style="border: none;">
                           <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <span class="visible-xs navbar-brand">Menu Bar</span>
                           </div>
                           <div id="menu" class="navbar-collapse collapse sidebar-navbar-collapse">
                              <ul class="nav navbar-nav">
                                <li><h3 class="nav-title first">LEVELS</h3></li>
                                <li><a href="aequumunum.php"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 01</a></li>
                                <li><a href="aequumduo.php"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 02</a></li>
                                <li><a href="aequumtribus.php"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 03</a></li>
                                <li><a href="aequumquattuor.php"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 04</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 05</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 06</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 07</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 08</a></li>
                              </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
              </div>
            <div class="col-md-9" style="background-color: rgba(186, 186, 186, 0.46);color: #010101;">
                <!-- Content Load Here -->
                <h3 class="contentArea" style="margin-top: 10px;">Level-4 Challenge</h3>
                <hr style="margin-top: 14px;">
                <p>You need to look closely! Lets check your HTML knoledge.(you will have to find a way to submit the key).</p>
		<!--html ="http://localhost/prankster/pics"-->
                <hr>
                    <form class="form-inline" action="" method="post">
                    <div class="form-group">
                      <label for="exampleInputName2">Submit and GO > ></label>
                      <input style="width: 450px;" type="text" class="form-control number-only" name="keyBox" id="keyBox" placeholder="Submit the Key">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit The Key</button>
                  </form>
                <hr>
                      <!--Next level Link mention here -->
                      <?php 
                            require 'temp/Lvl4Action.php';                            
                      ?>
                <hr>
                <!-- End Of Content -->
            </div>
        </div>
    </div>
    <?php
        require ('./temp/footer.php');
    ?>
</body>
<script src="Js/jquery-1.9.1.min.js"></script>
<script src="Js/bootstrap.js"></script>
</html>
