<!DOCTYPE html>
<html lang="en">
<head>
     <!-- mdboostrap link -->
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <!-- Google Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
     <!-- Bootstrap core CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
     <!-- Material Design Bootstrap -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
     <!-- JQuery -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Bootstrap tooltips -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
     <!-- Bootstrap core JavaScript -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <!-- MDB core JavaScript -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

   <!-- boostrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    

</head>
<body> 
   <br/>
   <br/>
    <div class="container">
        <div class="jumbotron blue-grey lighten-5">
        <h2 class="grey-text text-center"><strong> Add Event to Calendar</strong></h2>
         <div class="card" >
            <div class="row">
                <div class="col-md-8  col-md-offset-2">
                    <div class="panel panel-default">
                            <div class="panel-body"><br/><br/>
                            <div class="col-md-8  col-md-offset-2">
                                <form method="POST" action="{{url('/add') }}">
                                  {{ csrf_field() }}
                                  <label for=""><h5 class="blue-grey-text"><strong>Enter Event Name:</strong></h5></label>
                                  <input type="text" class="form-control" name="title" placeholder="Enter the Name"><br/><br/>   
                                  <label for=""><h5 class="blue-grey-text"><strong>Enter Color:</strong></h5></label>
                                  <input type="color" class="form-control" name="color" placeholder="Enter the color"><br/><br/>
                                  <label for=""><h5 class="blue-grey-text"><strong>Enter Start Date:</strong></h5></label>  
                                  <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="Enter Start date"><br/><br/>
                                  <label for=""><h5 class="blue-grey-text"><strong>Enter End Date:</strong></h5></label>  
                                  <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Enter End date"><br/>
                                  <input type="submit" name="submit" class="btn btn-blue-grey" value="Add Event">
                                </form>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>