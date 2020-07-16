<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="tampil">
    <section class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Data Sampah</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form>
                        <div class="form-grup">
                            <button class="btn btn-info form-control" type="submit"><a href="/">Tambah</a></button>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 id="kategori_detail">Kertas HVS</h5>
                                <h5 id="kategori">Kertas</h5>
                                <h6 class="text-right"><a href="">Hapus</a></h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 id="kategori_detail">Plastik PET`</h5>
                                <h5 id="kategori">Plastik</h5>
                                <h6 class="text-right" id="btn_hapus"><a href="">Hapus</a></h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 id="kategori_detail">Plastik Kresek</h5>
                                <h5 id="kategori">Plastik</h5>
                                <h6 class="text-right"><a href="">Hapus</a></h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 id="kategori_detail">Baja Ringan</h5>
                                <h5 id="kategori">Logam</h5>
                                <h6 class="text-right"><a href="">Hapus</a></h6>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
