<html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-dark bg-primary">
            <div class="navbar-header">
                <div class="navbar-title" href="{{ URL::to('app') }}">
                    <b>MANAJEMEN MAHASISWA</b>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('app') }}">Daftar Mahasiswa</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <h2>Data Baru Mahasiswa</h2>

        {{ Html::ul($errors->all()) }}

        {{ Form::open(['url' => 'app', 'method' => 'POST']) }}
        <div class="form-group col-sm-5">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">NIM</div>
                </div>
                {{ Form::text('nim', Input::old('nim'), array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="form-group col-sm-5">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">NAMA</div>
                </div>
                {{ Form::text('nama', Input::old('nama'), array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="form-group col-sm-5">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">JURUSAN</div>
                </div>
                {{ Form::select('jurusan', array('TI' => 'Teknik Informatika', 'MI' => 'Manajemen Informatika', 'SI' => 'Sistem Informasi'), Input::old('jurusan'), array('class' => 'form-control')) }}
            </div>
        </div>

        {{ Form::submit('Simpan', array('class' => 'btn btn-primary col-sm-5')) }}
        {{ Form::close() }}
    </div>
</body>
</html>