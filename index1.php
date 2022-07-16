<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>My Restaurant</title>
</head>

<body>
  <header>
    <h1>My Loco</h1>

  </header>

  <section class="menu-body container">

    <div class="menu-product">

      <div class="menu-info">
        <div class="menu-text">
          <h3>{{Product}}</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio nesciunt minus dolores, deleniti, illum odit quis suscipit, laudantium autem cum alias corporis earum adipisci inventore perspiciatis! Cumque expedita voluptates quisquam.</p>
        </div>
        <div class="menu-price">
          <h3>{{Price}}</h3>
          <h3>Cantidad: {{x}}</h3>
        </div>
      </div>

      <div class="menu-addsubstract">
        <button class="add">Add</button>
        <button class="substract">Sub</button>
      </div>
    </div>




  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>