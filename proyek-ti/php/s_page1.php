<html>
<head>
    <?php 
    include("connect.php");
    ?>
    <title>Admin TI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .row.content{
        height:100%;
    }
        
        .sidenav{
            background-color: #f1f1f1;
            height:100%;
        }
    </style>
    <script type="text/javascript">
    function generateCode(){
    document.getElementById("coba").style.display="none";
    
    }
    
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="s_page1.php">Admin Game TI</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="s_page1.php">Event List</a></li>
                    <li><a href="manage-users.php">Manage Users</a></li>
                    <li><a href="log.php">Log</a></li>
                    <li><a href="login-page.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Super Admin Game TI</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="s_page1.php">Event List</a></li>
                    <li><a href="manage-users.php">Manage Users</a></li>
                    <li><a href="log.php">Log</a></li>
                    <li><a href="login-page.php">Log Out</a></li>
                </ul>
            </div>
            
            <div class="col-sm-9">
                <div class="well">
                    <h4>Event List</h4>
                    <p id="coba">Dalam event list ini anda dapat melihat event apa saja yang sudah ada, dapat mengganti maupun menambahkan event dan syarat kondisinya</p>
                </div>
            </div>
            <br>
            <div class="col-sm-9">
                <div class="well">
                    <h4 >Testing Event Code</h4>
                    <br>
                    <?php 
                    $title = "ic2018";
                    $num =1;
                    echo md5($title.$num);
                    ?>
                    <form method="post" action="generateCode.php">
                    <input type="text" name="total" >
                    <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>