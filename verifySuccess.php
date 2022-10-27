<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    h1{
      position: absolute;
			left: 100px;
			top: 55px;
			color: #E6CBA8;
      font-size:50px;
    }
  </style>
</head>
<body">

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 mt-5 pt-5">
        
        <div class="card" >
          <img src="img/login.jpg" class="card-img-top" alt="..." style="width:100%; height:11rem; opacity:0.8;">
          <h1>Verify token</h1>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <button class="btn btn-danger" disabled="disabled" style="width:100%;">ATTENTION</button>
              </div>
              <div class="mb-3">
                <span>
                Terdapat 60 soal dari setiap Jurusan yang diambil dalam bentuk teori, terdapat 3 pilihan jurusan yaitu Akuntansi dan Tata Niaga, Teknik Kendaraan Ringan (TKR), Teknik Komputer Jaringan (TKJ).
                </span>
                Processing time limit : <button disabled="disabled" class="badge bg-danger">70 minutes</button>
              </div>
              <div class="col mb-3">
                <button name="login" class="btn btn-success" style="width:100%;">Change Now</button>
              </div>
              <div class="col mb-3">
                <a href="verify.php" class="btn btn-danger" style="width:100%;">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>