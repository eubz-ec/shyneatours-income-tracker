<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
  

    <div class="container">
    <br />
    <div class="add_driver" style="margin-bottom: 10px;">
        <a href="{{action('DriverController@create')}}" class="btn btn-primary">Add Driver</a>
    </div>
    
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($drivers as $driver)

      <tr>
        <td>{{$driver['id']}}</td>
        <td>{{$driver['name']}}</td>      
        <td><a href="{{action('DriverController@edit', $driver['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('DriverController@destroy', $driver['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>