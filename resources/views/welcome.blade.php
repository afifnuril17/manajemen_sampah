<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <section class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Input Sampah</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col align-self-center">
                    <form>
                        <div class="form-group">
                            <label for="nama">Kategori Sampah</label>
                            <select class="form-control">
                                <option>Kategori</option>
                                <option>Kertas</option>
                                <option>Plastik</option>
                                <option>Logam</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Sampah</label>
                            <input type="text" class="form-control" placeholder="Nama Sampah">
                        </div>
                        <div class="form-grup">
                            <button class="btn btn-info form-control" type="submit"> <a href="/tampil">Simpan</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
