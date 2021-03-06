<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="../assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/> 
    <link rel="stylesheet" type="text/css" href="../assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>-->
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
    <nav class="navbar navbar-default navbar-fixed-top be-top-header">
      <div class="container-fluid">
        <div class="navbar-header"><a href="index.php" class="navbar-brand"></a></div>
        <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="../assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">Welcome Admin</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  
                  <li><a href="../lgout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Dashboard</span></div>  
        </div>
        </div>
    </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="index.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li><a href="users/show.php"><i class="icon mdi mdi-face"></i><span>Users</spa></a>
                  </li>
                  <li><a href="admins/show.php"><i class="icon mdi mdi-face"></i><span>Admins</spa></a>
                  </li>
                  <li><a href="banners/show.php"><i class="icon mdi mdi-face"></i><span>Banners</spa></a>
                  </li>
                  <li><a href="teams/show.php"><i class="icon mdi mdi-face"></i><span>Teams</spa></a>
                  </li>
                  <li><a href="services/show.php"><i class="icon mdi mdi-chart-donut"></i><span>Services</span></a>         
                  </li>
                  <li><a href="portfolio/show.php"><i class="icon mdi mdi-chart-donut"></i><span>Portfolio</span></a>
                  </li>
                  <li><a href="testmonials/show.php"><i class="icon mdi mdi-chart-donut"></i><span>Testmonials</span></a>
                  </li>
                  <li><a href="posts/show.php"><i class="icon mdi mdi-chart-donut"></i><span>Posts</span></a>
                  </li>
                  <li><a href="comments/show.php"><i class="icon mdi mdi-chart-donut"></i><span>Comments</span></a>
                  </li>
                  <li><a href="abouts/show.php"><i class="icon mdi mdi-chart-donut"></i><span>Abouts</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
<div class="be-content">
  <div class="main-content container-fluid">
    <div class="row">
    <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> Users 
                <div class="tools"><a href="add.php" class="btn btn-primary">New User</a></div>
                </div>
                <div class="panel-body">
                  <table class="table">
                  <thead>
                      <tr>
                        <th style="width:5%; text-align:center">ID</th>
                        <th style="width:10%;">Title</th>
                        <th style="text-align:center">Description</th>
                        <th class="actions text-align:center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>description</td>
                        <td class='actions'><a href="edit.php" class="icon"><i class="mdi mdi-edit"></i></a></td>
                        <td class="actions"><a href="delete.php" class="icon"><i class="mdi mdi-delete"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  </div>
  </div> <!-- end content fluid  containter -->
</div> <!-- end content -->

</div> <!-- end wrapper -->
<script src="../assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/main.js" type="text/javascript"></script>
<script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="../assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="../assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="../assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="../assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="../assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../assets/lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="../assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
<script src="../assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="../assets/js/app-dashboard.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //initialize the javascript
    App.init();
    App.dashboard();
  
  });
</script>
</body>
</html>
