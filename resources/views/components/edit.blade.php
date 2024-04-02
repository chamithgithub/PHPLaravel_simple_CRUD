<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
   <form action="{{route('useredit',$task->id)}}" method="post" enctype="multipart/form-data" class="row g-3">
      @csrf
      <div class="row-mb-3">
         <label for="inputName" class="form-label">Name</label>
         <input type="text" class="form-control" id="inputName" name="name">
      </div>
      <div class="row-mb-3">
         <label for="inputName" class="form-label">Age</label>
         <input type="text" class="form-control" id="inputAge" name="age">
      </div>
      <div class="row-mb-3">
         <button type="submit" class="btn btn-primary">Edit</button>
      </div>
   </form>
</body>

</html>