<html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-dark bg-primary">
            <div class="navbar-header">
                <div class="navbar-title" href="{{ URL::to('/') }}">
                    <b>MANAJEMEN MAHASISWA</b>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/') }}">Daftar Mahasiswa</a>
                </li>                
            </ul>
        </nav>
    </div>
</body>
</html>