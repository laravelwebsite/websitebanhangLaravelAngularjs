<!DOCTYPE html>
<html ng-app="my-app">
<head>
  <meta charset="UTF-8">
  <title>Simple login form</title>
  <base href="{{asset(' ')}}">
  <link rel="stylesheet" href="supadmin/login/css/style.css">
  
</head>

<body>
  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
      @if(count($errors)>0)
      <div class="alert alert-danger" style="color: red">
            <strong>Whoops!</strong>There were some problems with your input! <br><br>
            <ul>
            @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
            @endforeach
            </ul> 
      </div>
      @endif

       @if(session('thongbao'))
      <div class="alert alert-danger">
             <strong>{{session('thongbao')}}</strong>
      </div>
       @endif
      <form method="post" action="admin/login-admin" name="frmLogin">
      {{csrf_field()}}
        <input type="text" name="email" id="email" placeholder="Username" required="required" autofocus class="input-txt" />
        <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
            
            <button type="submit" class="btn btn--right">Sign in  </button>
    
          </div>
      </form>
  </div>
   
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <script src="app/lib/angular.min.js"></script>
  <script src="app/app.js"></script>

</div>
</body>
</html>
