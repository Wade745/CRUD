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
      <h2 style="text-align:center;">Edit Form
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="/" class="btn btn-link">Home</a>
      </h2>
      
    </div>
    <hr>

        <form method="post" action="{{action('PassportController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$passport->name}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Date:</label>
              <input type="date" class="date form-control" name="date" value="{{$passport->date}}">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$passport->email}}">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$passport->number}}">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>



