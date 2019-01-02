@extends('layout.loginpage')

@section('login')
       
            <div class="text-box-main">
           <h1 class="heading-primary">
            <span class="heading-primary-main">LOGIN</span>
           </h1> 
       </div>
       <div class="text-box-sub" >
           <h1 class="heading-primary">
            <span class="heading-primary-sub">welcome back! Login to access the</span>
           </h1> 
       </div>
      <div class="text-box-sub2">
           <h1 class="heading-primary">
            <span class="heading-primary-sub2">Indoor Air Quality Monitoring System</span>
           </h1> 
       </div>
         <div class="input-box">
           
            <input type="text" placeholder="Username" class="input-main">
            
       </div>
       <div class="input-box-2">
                <input type="password" placeholder="Password" class="input-main"><br/>
       </div>       
       <div class="input-box-3">
                 <a href="#" class="btn btn-white" > Continue </a>
       </div>   
@endsection