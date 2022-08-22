<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="text-align:center;">
    <h1><mark>Create your task</mark></h1>
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <h3><div>
    <x-Alert/>
  </div></h3>
</div>
    <form action="/atgproject/public/todo/upload" method="post">
    @csrf
    <input type="text" name="task" id="">
    <button type="submit" class="btn btn-success">Create</button>
    </form>
    <a href="/atgproject/public/todo">Back</a>
</body>
</html>