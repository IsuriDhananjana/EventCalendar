<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Mdboostrap links -->
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
    

    <!-- Full Calendar srs and links -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>
<body>
   <br>
   <br>
 <div class="container">
   <div class="jumbotron  blue-grey lighten-5">
     <h2 class="grey-text text-center"><strong>Event Calendar</strong></h2>
        <div class="card" >
            <div class="row">
                <div class="col-md-11 col-md-offset-2" ><br/><br/>
                   <!-- Add Event button -->
                  <a href="/addeventurl"  class=" btn btn-blue-grey"> <strong >Add Event</strong> </a>
                  <!-- Edit Event button -->
                  <a href="/displaydata" class="btn btn-light-blue"> <strong>Edit Event </strong></a>
                  <!-- Delete Event button -->
                  <a href="/deleteeventurl" class="btn btn-yellow"><strong> Delete Event </strong></a>
                </div>
            </div><br/>
            
            <div class="col-md-11 col-md-offset-2" >    
            <div class="row">
            
            <!-- Session State -->
              @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                </div>
              @endif
              @if(\Session::has('success'))
                    <div class="alert alert-success">
                      <p>{{ \Session::get('success') }}</p>
                    </div>
              
              @endif
              </div>    
                      
                          <div class="col-md-11 col-md-offset-2" >
                            <div class="panel panel-default">
                                    <!-- Calendar Code -->
                                        <div class="panel-body" style="center">
                                        <div class="col-md-18 col-md-offset-2" >
                                           {!! $calendar->calendar() !!}
                                           {!! $calendar->script() !!}
                                        </div>  
                                        </div>
                            </div>
                         </div>
             </div>
        </div>
    </div>

</body>
</html>