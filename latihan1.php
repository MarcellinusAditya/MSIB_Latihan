<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <style>
      body{
      background: rgb(222,64,86);
      background: radial-gradient(circle, rgba(222,64,86,1) 0%, rgba(210,160,98,1) 100%);
      }
      .data-diri{
        margin-top: 150px;
      }
      .perk{
        margin-top: 150px;
      }
      .judul{
        font-size: 75px;
      }
      
    </style>
  </head>
  <body class=" mt-5 text-white ">
    
    <div class="row text-center  mb-5">
        <div class="col perk">
          <h1 class="judul">Perkenalan</h1>
        </div>
    </div>
     
    <div class="container">
      <div class="row text-center data-diri">
        <div class="col bg-danger p-3 me-3 shadow-lg">
          <h2><?php echo"Nama: <br>Marcellinus Aditya"?></h2>
        </div>
        <div class="col bg-danger p-3 me-3 shadow-lg">
          <h2><?php echo"Hobi: <br>Game"?></h2>
        </div>
        <div class="col bg-danger p-3 me-3 shadow-lg">
          <h2><?php echo"Jurusan: <br>Informatika"?></h2>
        </div>
        <div class="col bg-danger p-3 me-3 shadow-lg">
          <h2><?php echo"Universitas: <br>UPN Veteran Jawa Tmur"?></h2>
        </div>
      </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
