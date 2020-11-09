<!DOCTYPE html>
<html lang="en">
<head>



<!-- boostrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>Document</title>

</head>
<body>
 <br>
 <br>
    >
    <div class="container">
            <div class="jumbotron  blue-grey lighten-5">
           <div class="card" >  
         
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead">
                    <tr class="warning">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Color</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>   
              @foreach($events as $event)
                        <tbody>
                            <tr>
                                <td>{{ $event->id}}</td>
                                <td>{{ $event->title}}</td>
                                <td>{{ $event->color}}</td>  
                                <td>{{ $event->start_date}}</td>  
                                <td>{{ $event->end_date}}</td>   
                                 <!-- Edit button -->
                                <th><a href="{{url('/event@edit/'.$event['id'])}}" class="btn btn-success"> Edit</a></th> 
                                <th>
                                    <form method="DELETE" action="{{url('/event@destroy/'.$event['id'])}}">
                                       {{ csrf_field() }}
                                       <input type="hidden" name="_method" value="DELETE"/>
                                       <button type="submit" class="btn btn-danger">Delete</button>
                                    <form>   
                                </th>
                            </tr> 
                         </tbody>     
                @endforeach
           </table>
        
        </div>
    </div>
</div>
</body>
</html>