<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{ route('formdata') }}" method="POST">
    @csrf
    

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter phone" name="phone">
      </div>

      <div class="form-group">
        <label for="email">email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

      <div class="form-group">
        <label for="father name">Fathers Name:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Father Name" name="father_name">
      </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
