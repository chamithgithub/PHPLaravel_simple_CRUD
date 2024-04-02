<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<a href="{{route('usercreate')}}">create a new user</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody> 
    @foreach ($tasks as $item=>$task)
    <tr>
      <th scope="row">{{++$item}}</th>
      <td>{{$task->name}}</td>
      <td>{{$task->age}}</td>
      <td><a href="{{route('userupdate',$task->id)}}">update</a></td>
      <td><a href="{{route('userdelete',$task->id)}}">delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>