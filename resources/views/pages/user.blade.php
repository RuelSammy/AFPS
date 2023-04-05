<!DOCTYPE html>
<html>
<head>
    <title>AFPS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body> 
   
  <div class="container">
    <h2>Logout</h2>
    <div class="card">
      <div class="card-header">Do you want to Logout ?</div>
      <div class="card-body"><div class="col-md-12 text-center">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-primary"> Logout</button>
              </form>
          </div></div> 
    </div>
  </div>

</body>
</html>