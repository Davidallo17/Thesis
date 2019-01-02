
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Four flags</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/morestyle.css">

</head>
    
<body>
    
    <nav>
    <a href="#" class="nav-toggle-btn"></a>
       <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Node 1</a></li>
            <li><a href="#">Node 2</a></li>
            <li><a href="#">Logs</a></li>
            <li><a href="#">User Management</a></li>
            <li><a href="#" class="btn btn-red">Logout</a></li>
       </ul>
        
    </nav>
    
   
    <div class="content">
        <div class="content-main">
            <div class="content-main-header">
                <h2>User Management</h2>
            </div>
            <div class="content-main-body jumbotron">
<div class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item col-sm-4 ">
        <input type="text"  placeholder="Search User" class="input-edit-box">
      </li>
      <li class="nav-item col-sm-4 col">
        <input type="text"  placeholder="User Type" class="input-edit-box">
      </li>
      <li class="nav-item col-sm-4 col">
        <input type="text"  placeholder="Status" class="input-edit-box">
      </li>
      <li class="nav-item col-sm-1 col">
        <a class=" " href="#">Search</a>
      </li>
    </ul>
  </div>
</div>
     <div class="content-main-body">
    <div class="row">
        <div class="col content-users-main col-sm-3"> Faculty Number</div>
        <div class="col content-users-main col-sm-2"> First Name</div>
        <div class="col content-users-main col-sm-2"> Last Name</div>
        <div class="col content-users-main col-sm-2"> Email</div>
        <div class="col content-users-main col-sm-3"> User Type</div>
    </div>
    <div class="row">
        <div class="col content-users-body col-sm-3"> 2014068552</div>
        <div class="col content-users-body col-sm-2"> Jose </div>
        <div class="col content-users-body col-sm-2"> Ocampo</div>
        <div class="col content-users-body col-sm-2"> JoseOcampo@gmail.com</div>
        <div class="col content-users-body col-sm-3"> Admin</div>
    </div>
    <div class="row">
        <div class="col content-users-body col-sm-3"> 2014068552</div>
        <div class="col content-users-body col-sm-2"> Jose </div>
        <div class="col content-users-body col-sm-2"> Ocampo</div>
        <div class="col content-users-body col-sm-2"> JoseOcampo@gmail.com</div>
        <div class="col content-users-body col-sm-3"> Admin</div>
    </div>
    <div class="row">
        <div class="col content-users-body col-sm-3"> 2014068552</div>
        <div class="col content-users-body col-sm-2"> Jose </div>
        <div class="col content-users-body col-sm-2"> Ocampo</div>
        <div class="col content-users-body col-sm-2"> JoseOcampo@gmail.com</div>
        <div class="col content-users-body col-sm-3"> Admin</div>
    </div>
    <div class="row">
       <div class="col content-users-body col-sm-3"> 2014068552</div>
        <div class="col content-users-body col-sm-2"> Jose </div>
        <div class="col content-users-body col-sm-2"> Ocampo</div>
        <div class="col content-users-body col-sm-2"> JoseOcampo@gmail.com</div>
        <div class="col content-users-body col-sm-3"> Admin</div>
    </div>
    
   
</div>           
                
 
  
  </div>
  </div>
        </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        (function(){
            var bodys =$('body'),
                navToggleBtn = bodys.find('.nav-toggle-btn');
            
                navToggleBtn.on('click',function(e){
                bodys.toggleClass('active-nav');
                e.preventDefault();            
                });
        })();
    </script>
</body>

</html>
