<!DOCTYPE html>
@extends('layouts\uptitle')
@section('container')

<body>
	<img class="wave" src="img/gelomabang.png">
	<div class="container">
		<div class="img">
			<img src="img/people.svg">
		</div>
		<div class="login-content">

			<form action="/login" method="post">

				<img src="img/Politeknik Sekayu.png">
				<h2 class="title">Login Sistem Repository.</h2>

				@csrf
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" id="username" autofocus required>
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" id="password" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
@endsection

