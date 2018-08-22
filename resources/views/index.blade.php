<html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-dark bg-primary">
            <div class="navbar-header">
                <div class="navbar-title" href="{{ URL::to('/app') }}">
                    <b>MANAJEMEN MAHASISWA</b>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/app') }}">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/app/create') }}">Tambah Data</a>
                </li>
            </ul>
        </nav>

        <h1>DAFTAR MAHASISWA</h1>

        @if(Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <td>NIM</td>
                    <td>NAMA</td>
                    <td>JURUSAN</td>
                    <td>PILIHAN</td>
                </tr>
            </thead>
            <tbody>
                @foreach($listMahasiswa as $key => $value)
                <tr>
                    <td>{{ $value->nim }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->jurusan }}</td>
                    <td>
                        <div class="d-flex">
                            <button class="btn btn-small btn-warning mr-2" style="height: 40px"
                                    href="{{ URL::to('app/' . $value->nim . '/edit') }}">Ubah</button>
                            {{ Form::open( ['url' => 'app/' . $value->nim, 'method' => 'DELETE'] ) }}
                                {{ Form::submit('Hapus', ['class' => 'btn btn-danger', 'style' => 'height: 40px;']) }}
                            {{ Form::close() }}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>