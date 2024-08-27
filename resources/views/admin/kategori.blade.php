@extends ('layouts.app')

@section('content')

@auth
    <h1 class="text-center">hi saya {{auth()->user()->name}}</h1>
<br>
    <div class="container">
    <table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Nama Kategori</th>
            <th>Unique ID</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategori as $itemk)
        <tr>
            <td>{{ $itemk['namaKategori'] }}</td>
            <td>{{ $itemk['uniqueID'] }}</td>
            <td>{{ $itemk['created_at'] }}</td>
            <td>{{ $itemk['updated_at'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Nama Kategori</th>
            <th>Unique ID</th>
            <th>Kategori ID</th>
            <th>Harga</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Harga seteleh diskon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $item)
        <tr>
            <td>{{ $item['namaKategori'] }}</td>
            <td>{{ $item['uniqueID'] }}</td>
            <td>{{ $item['kategori_id'] }}</td>
            <td>{{ $item['harga'] }}</td>
            <td>{{ $item['created_at'] }}</td>
            <td>{{ $item['updated_at'] }}</td>
            <td>{{ $item['potongan'] }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>


 @endauth

@guest
    <h1>halo tolong login dahulu</h1>
@endguest

<div class="col-6">
    @include ('admin.formkategori')
</div>

@endsection