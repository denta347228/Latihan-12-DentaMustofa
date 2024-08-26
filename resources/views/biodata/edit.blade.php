<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Edit Biodata</h1>

    <div class="container">


    <form action="{{route('biodata.update', $biodata->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="{{$biodata->nama_lengkap}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="nik">NIK</label>
        <input class="form-control" type="text" name="nik" value="{{$biodata->nik}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="umur">Umur</label>
        <input class="form-control" type="text" name="umur" value="{{$biodata->umur}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="alamat">Alamat</label>
        <input class="form-control" type="text" name="alamat" value="{{$biodata->alamat}}" required><br>
        <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--link boostrap  -->
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
</body>

</html>