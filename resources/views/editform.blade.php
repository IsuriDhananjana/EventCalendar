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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- boostrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form action="{{url('/event@update/'.$id)}}" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <div class="jumbotron" style="margin-top: 5%;">
            <h2 class="grey-text text-center"><strong>Update Event Data</strong></h2>
            <div class="card" >
            <div class="row">
                <div class="col-md-8 col-md-offset-2" ><br/><br/>
              
             
              <input type="hidden" name="_method" value="UPDATE"/>
                <div class="form-group">
                <div class="col-md-8  col-md-offset-2">
                
                  <label><h5 class="blue-grey-text"><strong>Name of Event:</strong></h5></label>
                  <input type="text" class="form-control" name="title" placeholder="Enter Name" value="{{$events->title}}">
                  </div>
                </div>
                    <div class="form-group">
                    <div class="col-md-8  col-md-offset-2">
                      <label><h5 class="blue-grey-text"><strong>Event Color:</strong></h5></label>
                      <input type="color" class="form-control" name="color" placeholder="Enter Color" value="{{$events->color}}">
                      </div>
                    </div>
                        <div class="form-group">
                        <div class="col-md-8  col-md-offset-2">
                          <label><h5 class="blue-grey-text"><strong>Start Date of Event:</strong></h5></label>
                          <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date" value="{{$events->start_date}}">
                          </div>
                        </div>
                            <div class="form-group">
                            <div class="col-md-8  col-md-offset-2">
                               <label><h5 class="blue-grey-text"><strong>End Date of Event:</strong></h5></label>
                               <input type="date" class="form-control" name="end_date" placeholder="Enter End Date" value="{{$events->end_date}}">
                               </div>
                            </div>
                               {{ method_field('PUT')}}
                               <button type="submit" name="submit" class="btn btn-success">Update</button>
                              
               </div> 
               </div>
               </div>              
            </div>
        </div>
    </form>
    

 
</body>
</html>