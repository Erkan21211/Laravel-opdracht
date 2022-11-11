<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .line {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 4px;
        background-color: black;
        border-top: 4px solid black;
      }
    </style>
</head>
<body>
  <div class="container">
    <form class="center">
        <div class="form-group">
          <label for="exampleInputEmail1">naam</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer je naam in...">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">achternaam</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer je achternaam in...">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer je email in...">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">telefoon nummer</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer je telefoon nummer in...">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="line"></div>
</body>
</html>