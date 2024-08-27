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
    <h1 class="text-center">Create Biodata</h1>

    <div class="container">

    <form action="{{route('biodata.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label  class="form-label" for="nama_lengkap">Nama lengkap</label>
        <input class="form-control" type="text" name="nama_lengkap" value="{{old('nama_lengkap')}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="nik">NIK</label>
        <input class="form-control" type="text" name="nik" value="{{old('nik')}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="umur">Umur</label>
        <input class="form-control" type="text" name="umur" value="{{old('umur')}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="alamat">Alamat</label>
        <input class="form-control" type="text" name="alamat" value="{{old('alamat')}}" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="image">Image</label>
        <input class="form-control" type="file" name="image" value="{{old('image')}}" required><br>
        </div>
        <button class="btn btn-success w-100" type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--link boostrap  -->
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
</body>

</html>