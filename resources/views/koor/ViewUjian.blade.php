<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/home.css">


    <title>SIKP | KOORDINATOR </title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
    <nav class="navbar navbar-dark navbar-expand-lg  bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/koor/home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
              
                </li>
            
            
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
              
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/koor/verifikasiPraKp">Verifikasi Pra KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/verifikasiSuratKet">Verifikasi SK</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/verifikasiKp">Verifikasi  KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Daftar Registrasi KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/batas">Batas KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/BatasKp">Lihat Batas KP</a>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="/koor/jadwalUjian">Jadwal UJian </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/ViewUjian">Lihat UJian </a>
                    <div class="dropdown-divider"></div>
                   
                </div>
            </ul>
         
            </div>
         
            </div>    
                </div>
        </nav>
    </header>



               <h4>Jadwal Ujian</h4><hr>
                    <table class="table table-hover">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Ujian</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Judul KP</th>
                        <th scope="col">Penguji</th>
                        <th scope="col">Ruang</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Action</th>
                      </tr>
                        <tbody>

                        @foreach($ju as $no=> $j )
                 <tr>
                        <th scope="row"><?php echo ++$no ?></th>
                        <td>
                              {{ date('d F Y', strtotime($j->tanggal)) }}
                                </td>
                                <td>{{ $j->nim }}</td>
                                <td>{{ $j->judul_kp }}</td>

                            <td>{{ $j->penguji }}</td>
                            <td>{{ $j->ruang}}</td>  
                            <td>{{ $j->jam }}</td> 
                            <td>
                            <a href="/koor/ViewUjian/editUjian/{{$j->id}}" class="btn btn-success" data-toggle="tooltip" title="edit" >Edit</i></a> 
                            </td>
                            @endforeach

                    </tbody>
                  </table>
            </div>
                
    </main>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>