<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>Default</h2>
        <form>
            <div class="mb-3 col-md-6">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </form>

        <h2>Inline</h2>
        <form class="row g-3">
            <div class="col-auto">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="col-auto">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </form>

        <h2>Horizontal</h2>
        <form class="form-horizontal">
            <div class="mb-3 row">
              <label for="exampleInputEmail1" class="form-label col-md-2">Email address</label>
              <div class="col-md-10">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="exampleInputPassword1" class="form-label col-md-2">Password</label>
              <div class="col-md-10">
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
            </div>
        </form>

        <select class="form-control">
            <option>One</option>
            <option>Two</option>
            <option>Three</option>
        </select>

        <textarea class="form-control" rows="3"></textarea>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault">
            <label class="form-check-label" for="flexRadioDefault">Default radio</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="flexRadioChecked" checked>
            <label class="form-check-label" for="flexRadioChecked">Checked radio</label>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>DATA NAMA KSR </th>
                        <th> JABATAN </th>
                        <th>JURUSAN</th>
                        <th>ANGKATAN</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>LUTFIAH</td>
                        <td>KETUA</td>
                        <td>FEBI</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>NADA</td>
                        <td>HUKUM</td>
                        <td>BENDAHARA</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>DELIMA</td>
                        <td>PASTER</td>
                        <td>WAKIL BENDAHARA</td>
                        <td>2020</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>