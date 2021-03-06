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
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
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
                        <select class="form-control" name="gender" value="{{ old('gender') }}">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

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
                        <input type="text" class="form-control" name="nik" value="{{ old('nik') }}">
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
                            <input type="text" class="form-control" name="birth_place" value="{{ old('birth_place') }}">
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}">
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
                        <input type="text" class="form-control" name="school_origin" value="{{ old('school_origin') }}">
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
                        <input type="text" class="form-control" name="religion" value="{{ old('religion') }}">
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
                        <select class="form-control" name="live_with" value="{{ old('live_with') }}">
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Wali">Wali</option>
                            <option value="Pondok">Pondok</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                        </select>
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
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
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
                        <input type="number" class="form-control" name="sibling" value="{{ old('sibling') }}">
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
                        <input type="number" class="form-control" name="height" value="{{ old('height') }}">
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
                        <input type="number" class="form-control" name="weight" value="{{ old('weight') }}">
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
                        <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
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
                        <input type="text" class="form-control" name="ambition" value="{{ old('ambition') }}">
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
                        <input type="text" class="form-control" name="achievment1" value="{{ old('achievment1') }}">
                        <input type="text" class="form-control mt-2" name="achievment2" value="{{ old('achievment2') }}">
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
                            <input type="text" class="form-control" name="father_name" value="{{ old('father_name') }}">
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
                                <input type="text" class="form-control" name="father_birth_place" value="{{ old('father_birth_place') }}">
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="father_birth_date" value="{{ old('father_birth_date') }}">
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
                            <select class="form-control" name="father_last_education" value="{{ old('father_last_education') }}">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana">Sarjana</option>
                            </select>
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
                            <input type="text" class="form-control" name="father_job" value="{{ old('father_job') }}">
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
                                    <input type="text" class="form-control" name="father_salary" value="{{ old('father_salary') }}">
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
                            <input type="text" class="form-control" name="father_address" value="{{ old('father_address') }}">
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
                            <input type="text" class="form-control" name="mother_name" value="{{ old('mother_name') }}">
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
                                <input type="text" class="form-control" name="mother_birth_place" value="{{ old('mother_birth_place') }}">
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="mother_birth_date" value="{{ old('mother_birth_date') }}">
                            </div>
                        </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.
                        </td>
                        <th width="30%">
                           Pendidikan Terkahir
                        </th>
                        <td >
                            <select class="form-control" name="mother_last_education" value="{{ old('mother_last_education') }}">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana">Sarjana</option>
                            </select>
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
                            <input type="text" class="form-control" name="mother_job" value="{{ old('mother_job') }}">
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
                                    <input type="text" class="form-control" name="mother_salary" value="{{ old('mother_salary') }}">
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
                                    <input type="text" class="form-control" name="rt" value="{{ old('rt') }}">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="RW" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="rw" value="{{ old('rw') }}">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="Dusun" disabled>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dusun" value="{{ old('dusun') }}">
                                </div>
                            </div>   
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="Desa" disabled>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="desa" value="{{ old('desa') }}">   
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" value="Kecamatan" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}">
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
                            <input type="text" class="form-control" name="wali_name" value="{{ old('wali_name') }}">
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
                                <input type="text" class="form-control" name="wali_birth_place" value="{{ old('wali_birth_place') }}">
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="wali_birth_date" value="{{ old('wali birth_date') }}">
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
                            <select class="form-control" name="wali_last_education" value="{{ old('wali_last_education') }}">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana">Sarjana</option>
                            </select>
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
                            <input type="text" class="form-control" name="wali_job" value="{{ old('wali_job') }}">
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
                            <input type="text" class="form-control" name="wali_address" value="{{ old('wali_address') }}">
                        </td>
                    </tr>
                </div>
            </table>
           
            <button type="submit" class="btn btn-primary w-100">Submit</button>
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