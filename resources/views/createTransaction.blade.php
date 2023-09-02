<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-dark navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Transaksi</a>
        </div>
    </nav>

    <div class="container mt-3">

        <form action="/transaction/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="kode_transaksi" class="form-label">Kode Transaksi</label>
                <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi">
            </div>
            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
            <div class="mb-3">
                <label for="kode_peminjam" class="form-label">Kode peminjam</label>
                <input type="text" class="form-control" id="kode_peminjam" name="kode_peminjam">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
