<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title></title>
</head>

<body>

    <div class="container">

        <h1 class="text-center">Daftar Hitam BRI</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama lengkap</th>
                    <th>NIK</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($biodata as $item)
                <tr>
                    <td> {{$item->nama_lengkap}} </td>
                    <td> {{$item->nik}} </td>
                    <td> {{$item->umur}} </td>
                    <td> {{$item->alamat}} </td>
                    <td> @isset($item->image_path)
                        <img src="{{asset('storage/' . $item->image_path)}}" alt="image"  w-30>
                    @endisset
                    </td>
                    <td>
                        <a href="{{ route('biodata.edit', $item->id)}}" class="btn btn-primary">edit</a>
                        <form action="{{ route('biodata.destroy', $item->id) }}" method="post" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                    </td>
                </tr>

            @endforeach
        </table>
        <a href="{{ route('biodata.create') }}" class="btn btn-success w-100">add new biodata</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--link boostrap  -->
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
</body>

</html>