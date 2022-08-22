<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO Edit</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
</head>
<body style="text-align:center;">
    <h1><mark>Edit your task </mark></h1>
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <h3><div><x-Alert/></div></h3>
</div>
    <form action="/atgproject/public/todo/update" method="post">
    @csrf
    @method('patch')
    <input type="text" name="task" value='{{$task ->task}}'>
    <input style="display:none;" type="number" name="id" value='{{$task->id}}'>
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
    </form>
    <a href="/atgproject/public/todo">Back</a>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8b10df9746.js" crossorigin="anonymous"></script>
</body>
</html>