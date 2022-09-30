<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fuild">
      <h1>Hello, world!</h1>
    
      <div class="row">
        <div class="col-6 col-md-3" style="background:blue">
          1
        </div>
        <div class="col-6 col-md-3" style="background:pink">
          2
        </div>
        <div class="col-6 col-md-3" style="background:cyan">
          3
        </div>
        <div class="col-6 col-md-3" style="background:green">
          4
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>kolom</th>
              <th>kolom</th>
              <th>kolom</th>
              <th>kolom</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
            </tr>
            <tr>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
            </tr>
            <tr>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
              <td>contoh kolom</td>
            </tr>
            
          </tbody>
        </table>

        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        </form>

        <div class="input-group">
          <span class="input-group-text">First and last name</span>
          <input type="text" aria-label="First name" class="form-control">
          <input type="text" aria-label="Last name" class="form-control">
        </div>
        <br/>
        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
          <input type="text" class="form-control" aria-label="Text input with dropdown button ">
        </div>
        <select class="form-control">
          <option>one</option>
          <option>two</option>
          <option>theree</option>
        </select>
        <textarea class="form-control" rows="3"></textarea>
      </div>
    </div>

    <br/><br/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>