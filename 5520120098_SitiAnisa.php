<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="background:pink">
        <h1>Hello, world!</h1>

    <div class="row">
        <div class="col-6 col-md-3" style="background:gold">
            col-4
        </div>
        <div class="col-6 col-md-3" style="background:orange">
            col-4
        </div>
        <div class="col-6 col-md-3" style="background:brown">
            col-4
        </div>
        <div class="col-6 col-md-3" style="background:grey">
            col-4
        </div>
    </div>

    <div class="tableresponsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Kolom</th>
                <th>Kolom</th>
                <th>Kolom</th>
                <th>Kolom</th>
                <th>Kolom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
            </tr>
            <tr>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
            </tr>
            <tr>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
                <th>Contoh Kolom</th>
            </tr>
        </tbody>

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
        <form class="row g-3>">
        <div class="col-auto">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>
            <div class="col-auto">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <form class="form-horizontal">
        <div class="mb-3 row">
                <label for="exampleInputEmail1" class="form-label col-md-2">Email address</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            <div class="mb-3 row">
                <input type="checkbox" class="form-label col-md-2" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <select class='form-control'>
            <option>one</option>
            <option>two</option>
            <option>three</option>
        </select>
        <textarea class="form-control" row="3"></textarea>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>