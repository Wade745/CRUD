<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel CRUD Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    
    <div class="container">

    <div class="form-group">
      <h2 style="text-align:center;">Create User 
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="/" class="btn btn-link">Home</a>
      
      </h2>
      
    </div>
    
    <hr>
      <form method="post" action="{{url('passports')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Date:</strong>  
            <input class="date form-control"  type="date" name="date" required>   
         </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email" required>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Phone Number:</label>
              <input type="text" class="form-control" name="number" required>
            </div>
          </div>
        
        
         
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            
          </div>
        </div>
      </form>
    </div>
  </body>
</html>