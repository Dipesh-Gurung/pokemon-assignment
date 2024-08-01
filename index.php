<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">
  <div class="container">
    <div class="mt-4 mb-5 d-flex justify-content-between align-items-center">
      <h1 class="text-white">Get your Pokemon!</h1>
      <div>
        <button class="btn btn-primary">
          <i class="fa fa-sign-in"></i> Login</button>
      </div>
    </div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Species</th>
          <th scope="col">Description</th>
          <th scope="col">Weight</th>
          <th scope="col">Height</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png" alt="Bulbasaur"></td>
          <td>Bulbasaur</td>
          <td>Seed Pokémon</td>
          <td>Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun's rays, the seed grows progressively larger.</td>
          <td>6.9 kg</td>
          <td>0.7 m</td>
          <td><button class="btn btn-success">Catch</button></td>
        </tr>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
