
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
                <h2>Indoor Air Quality Dashboard</h2>
            </div>
            <div class="content-main-body jumbotron">
                <h3 class="display-4 content-title ">Carbon Monoxide Level</h3>
                <h3 class="col content-var">20ppm</h3>
                
 
  <hr class="my-4">
   <b>Severe Carbon Monoxide Levels</b>
                <p class="lead">Mental confusion, loss of muscular coordination, 
loss of consciousness, vomiting, disorientation, 
unconsciousness, and death may occur.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Go Back to Dashboard</a>
  </p>
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
