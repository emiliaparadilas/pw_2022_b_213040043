<?php 

require 'functions.php';
// mendapatkan id obat daru url
$id = $_GET["id"];
$obats = query ("SELECT * FROM obat WHERE kode_obat =$id");

// tombol cari ditekan
if (isset($_GET["cari"])) {
    $obats = cari($_GET["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
    <section class="kontent">
    <div class="container">
    <h1>Details</h1>

       <div class="row">
       <?php foreach($obats as $obat) :?>
           <div class="col-md-6">
               <img src="img/<?php echo $obat["gambar"]; ?>"alt="" class="img-responsive" width="500" height="auto">
           </div>

           
        <div class="col-md-6">
            <h2><?php echo $obat["nama_obat"] ?></h2>
            <h5 class="mt-5">harga:</h5>
            <h5 ><?php echo $obat["harga"] ?></h5>
            <h5 class="mt-5">bentuk:</h5>
            <h5><?php echo $obat["bentuk"] ?></h5>
            <h5 class="mt-5">stok:</h5>
            <h5><?php echo $obat["stok"] ?></h5>
            <h5 class="mt-5">manfaat:</h5>
            <h5><?php echo $obat["manfaat"] ?></h5>
            <h5 class="mt-5">konsumen:</h5>
            <h5><?php echo $obat["konsumen"] ?></h5>
            <?php endforeach; ?>

           
            
            
              <form method="post">
                <div class="form-grup">
                    <div class="input-group">
                    </div>
                </div>

            </form>
        </div>
       </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>