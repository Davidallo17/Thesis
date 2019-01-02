<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
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
            @yield('home')
            
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
    <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAee2UzTuI8vfl_C7ivtHPctQQcoknwk5g",
        authDomain: "thesis-9edf0.firebaseapp.com",
        databaseURL: "https://thesis-9edf0.firebaseio.com",
        projectId: "thesis-9edf0",
        storageBucket: "thesis-9edf0.appspot.com",
        messagingSenderId: "937119624530"
      };
      firebase.initializeApp(config);
    </script>
</body>

</html>
