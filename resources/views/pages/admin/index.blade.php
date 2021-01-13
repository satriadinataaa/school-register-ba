<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form Pendaftaran</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-3 text-center">
                    <img src="{{ url('logo_yakasaba.png') }}" height="125">
                </div>
                <div class="col-md-6 text-center">
                   <h3>FORMULIR PENDAFTARAN SISWA BARU</h3>
                   <h3>SMP BUKIT ASAM</h3>
                   <h3>TAHUN PELAJARAN 2020/2021</h3>
                </div>
            </div>
        </div>
      </div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('home.store') }}" method="POST">
            @csrf
            <table class="table table-bordered"> 
                <!-- DATA SISWA -->
                <div> 
                <tr>
                    <th colspan="3">
                        A .Identitas Calon Siswa
                    </th>
                </tr>
                <tr>
                    <td>
                        1.
                    </td>
                    <th width="30%">
                       Nama Lengkap Calon Siswa
                    </th>
                    <td >
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        2.
                    </td>
                    <th width="30%">
                       Jenis Kelamin
                    </th>
                    <td >
                        <input type="text" class="form-control" name="gender" value="{{ $student->gender }}" disabled>
                           

                    </td>
                </tr>
                <tr>
                    <td>
                        3.
                    </td>
                    <th width="30%">
                       NIK
                    </th>
                    <td >
                        <input type="text" class="form-control" name="nik" value="{{ $student->nik }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        4.
                    </td>
                    <th width="30%">
                       Tempat, Tanggal Lahir
                    </th>
                    <td >
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="birth_place" value="{{ $student->birth_place }}" disabled>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="birth_date" value="{{ $student->birth_date }}" disabled>
                        </div>
                    </div> 
                    </td>
                </tr>
                <tr>
                    <td>
                        5.
                    </td>
                    <th width="30%">
                       Asal Sekolah
                    </th>
                    <td >
                        <input type="text" class="form-control" name="school_origin" value="{{ $student->school_origin }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        6.
                    </td>
                    <th width="30%">
                       Agama / Kepercayaan
                    </th>
                    <td >
                        <input type="text" class="form-control" name="religion" value="{{ $student->religion }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                       7.
                    </td>
                    <th width="30%">
                       Tinggal Bersama
                    </th>
                    <td >
                        <input type="text" class="form-control" name="live_with" disabled value="{{ $student->live_with }}"/>
                           
                    </td>
                </tr>
                <tr>
                    <td>
                       8.
                    </td>
                    <th width="30%">
                       Telepon yang dapat dihubungi
                    </th>
                    <td >
                        <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                       9.
                    </td>
                    <th width="30%">
                       Jumlah Saudara
                    </th>
                    <td >
                        <input type="number" class="form-control" name="sibling" value="{{ $student->sibling }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                       10.
                    </td>
                    <th width="30%">
                       Tinggi Badan
                    </th>
                    <td >
                        <input type="number" class="form-control" name="height" value="{{ $student->height }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                       11.
                    </td>
                    <th width="30%">
                       Berat Badan
                    </th>
                    <td >
                        <input type="number" class="form-control" name="weight" value="{{ $student->weight }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                       12.
                    </td>
                    <th width="30%">
                      Hobi
                    </th>
                    <td >
                        <input type="text" class="form-control" name="hobby" value="{{ $student->hobby }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                      13.
                    </td>
                    <th width="30%">
                       Cita-cita
                    </th>
                    <td >
                        <input type="text" class="form-control" name="ambition" value="{{ $student->ambition }}" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                      14.
                    </td>
                    <th width="30%">
                       Prestasi
                    </th>
                    <td >
                        <input type="text" class="form-control" name="achievment1" value="{{ $student->achievment1 }}" disabled>
                        <input type="text" class="form-control mt-2" name="achievment2" value="{{ $student->achievment2 }}" disabled>
                    </td>
                </tr>
                </div>
                <!-- DATA ORTU -->
                <div> 
                    <tr>
                        <th colspan="3">
                            B .Identitas Orang Tua
                        </th>
                    </tr>
                    <tr>
                        <td>
                            1.
                        </td>
                        <th width="30%">
                           Nama Ayah
                        </th>
                        <td >
                            <input type="text" class="form-control" name="father_name" value="{{ $student->father_name }}" disabled>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            2.
                        </td>
                        <th width="30%">
                           Tempat, Tanggal Lahir
                        </th>
                        <td >
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="father_birth_place" value="{{ $student->father_birth_place }}" disabled>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="father_birth_date" value="{{ $student->father_birth_date }}" disabled>
                            </div>
                        </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <th width="30%">
                           Pendidikan Terakhir
                        </th>
                        <td >
                            <input type="text" class="form-control" name="father_last_education" disabled value="{{ $student->father_last_education }}">
                               
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.
                        </td>
                        <th width="30%">
                           Pekerjaan
                        </th>
                        <td >
                            <input type="text" class="form-control" name="father_job" value="{{ $student->father_job }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.
                        </td>
                        <th width="30%">
                           Jumlah Penghasilan Perbulan
                        </th>
                        <td >
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="Rp" disabled>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="father_salary" value="{{ $student->father_salary }}" disabled>
                                </div>
                            </div>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.
                        </td>
                        <th width="30%">
                           Alamat Lengkap
                        </th>
                        <td >
                            <input type="text" class="form-control" name="father_address" value="{{ $student->father_address }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.
                        </td>
                        <th width="30%">
                           Nama Ibu
                        </th>
                        <td >
                            <input type="text" class="form-control" name="mother_name" value="{{ $student->mother_name }}" disabled>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            8.
                        </td>
                        <th width="30%">
                           Tempat, Tanggal Lahir
                        </th>
                        <td >
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="mother_birth_place" value="{{ $student->mother_birth_place }}" disabled>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="mother_birth_date" value="{{ $student->mother_birth_date }}" disabled>
                            </div>
                        </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.
                        </td>
                        <th width="30%">
                           Pendidikan Terakhir
                        </th>
                        <td >
                            <input type="text" class="form-control" name="mother_last_education" disabled value="{{ $student->mother_last_education }}"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10.
                        </td>
                        <th width="30%">
                           Pekerjaan
                        </th>
                        <td >
                            <input type="text" class="form-control" name="mother_job" value="{{ $student->mother_job }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11.
                        </td>
                        <th width="30%">
                           Jumlah Penghasilan Perbulan
                        </th>
                        <td >
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="Rp" disabled>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="mother_salary" value="{{ $student->mother_salary }}" disabled>
                                </div>
                            </div>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            12.
                        </td>
                        <th width="30%">
                           Alamat Lengkap
                        </th>
                        <td >  
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="RT" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="rt" value="{{ $student->rt }}" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="RW" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="rw" value="{{ $student->rw }}" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="Dusun" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dusun" value="{{ $student->dusun }}" disabled>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="Desa" disabled>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="desa" value="{{ $student->desa }}" disabled>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" value="Kecamatan" disabled >
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="kecamatan" value="{{ $student->kecamatan }}" disabled>
                                </div>
                            </div>
                        </td>
                    </tr>
                </div>
                <!-- Data Wali -->
                <div>
                    <tr>
                        <th colspan="3">
                           C. Identitas Wali
                        </th>
                    </tr>
                    <tr>
                        <td>
                            1.
                        </td>
                        <th width="30%">
                           Nama Wali
                        </th>
                        <td >
                            <input type="text" class="form-control" name="wali_name" value="{{ $student->wali_name }}" disabled>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            2.
                        </td>
                        <th width="30%">
                           Tempat, Tanggal Lahir
                        </th>
                        <td >
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="wali_birth_place" value="{{ $student->wali_birth_place }}" disabled>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="wali_birth_date" value="{{ $student->birth_date }}" disabled>
                            </div>
                        </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <th width="30%">
                           Pendidikan Terkahir
                        </th>
                        <td >
                            <input type="text" class="form-control" name="wali_last_education" disabled value="{{ $student->wali_last_education }}"> 
                             
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.
                        </td>
                        <th width="30%">
                           Pekerjaan
                        </th>
                        <td >
                            <input type="text" class="form-control" name="wali_job" value="{{ $student->wali_job}}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.
                        </td>
                        <th width="30%">
                           Alamat
                        </th>
                        <td >
                            <input type="text" class="form-control" name="wali_address" value="{{ $student->wali_address }}" disabled>
                        </td>
                    </tr>
                </div>
            </table>
          </form>
    </div>
    <footer class="section-footer mt-5 mb-4 border-top">
       
        <div class="container-fluid">
          <div
            class="row border-top justify-content-center align-items-center pt-4"
          >
            <div class="col-auto text-gray-500 font-weight-light">
              2021 Copyright • CWL • 
            </div>
          </div>
        </div>
      </footer>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>