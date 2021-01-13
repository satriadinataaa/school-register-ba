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
    <center>
        <img src="<?= url('logo_yakasaba.png') ?>" height="125">
        <h3>FORMULIR PENDAFTARAN SISWA BARU</h3>
        <h3>SMP BUKIT ASAM</h3>
        <h3>TAHUN PELAJARAN 2020/2021</h3>
    </center>
   
    <div style="margin-top:10px">
       
        
            <table class="table table-bordered"> 
                <!-- DATA SISWA -->
                 
                <tr>
                    <td colspan="3">
                        A .Identitas Calon Siswa
                    </td>
                </tr>
                <tr>
                    <td>
                        1.
                    </td>
                    <td width="30%">
                       Nama Lengkap Calon Siswa
                    </td>
                    <td >
                        <?= $student->name ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        2.
                    </td>
                    <td width="30%">
                       Jenis Kelamin
                    </td>
                    <td >
                        <?= $student->gender ?>
                           

                    </td>
                </tr>
                <tr>
                    <td>
                        3.
                    </td>
                    <td width="30%">
                       NIK
                    </td>
                    <td >
                        <?= $student->nik ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        4.
                    </td>
                    <td width="30%">
                       Tempat, Tanggal Lahir
                    </td>
                    <td >
                   
                            <?= $student->birth_place ?>, <?= $student->birth_date ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        5.
                    </td>
                    <td width="30%">
                       Asal Sekolah
                    </td>
                    <td >
                       <?= $student->school_origin ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        6.
                    </td>
                    <td width="30%">
                       Agama / Kepercayaan
                    </td>
                    <td >
                        <?= $student->religion ?>
                    </td>
                </tr>
                <tr>
                    <td>
                       7.
                    </td>
                    <td width="30%">
                       Tinggal Bersama
                    </td>
                    <td >
                       <?= $student->live_with ?>
                           
                    </td>
                </tr>
                <tr>
                    <td>
                       8.
                    </td>
                    <td width="30%">
                       Telepon yang dapat dihubungi
                    </td>
                    <td >
                        <?= $student->phone ?>
                    </td>
                </tr>
                <tr>
                    <td>
                       9.
                    </td>
                    <td width="30%">
                       Jumlah Saudara
                    </td>
                    <td >
                        <?= $student->sibling ?>
                </tr>
                <tr>
                    <td>
                       10.
                    </td>
                    <td width="30%">
                       Tinggi Badan
                    </td>
                    <td >
                    <?= $student->height ?>
                    </td>
                </tr>
                <tr>
                    <td>
                       11.
                    </td>
                    <td width="30%">
                       Berat Badan
                    </td>
                    <td >
                        <?= $student->weight ?>
                    </td>
                </tr>
                <tr>
                    <td>
                       12.
                    </td>
                    <td width="30%">
                      Hobi
                    </td>
                    <td >
                       <?= $student->hobby ?>
                    </td>
                </tr>
                <tr>
                    <td>
                      13.
                    </td>
                    <td width="30%">
                       Cita-cita
                    </td>
                    <td >
                        <?= $student->ambition ?>
                    </td>
                </tr>
                <tr>
                    <td>
                      14.
                    </td>
                    <td width="30%">
                       Prestasi
                    </td>
                    <td >
                        <ul>
                        <li><?= $student->achievment1 ?></li>
                        <li><?= $student->achievment2 ?></li>
                        </ul>
                    </td>
                </tr>
                </div>
                <!-- DATA ORTU -->
                
                    <tr>
                        <td colspan="3">
                            B .Identitas Orang Tua
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.
                        </td>
                        <td width="30%">
                           Nama Ayah
                        </td>
                        <td >
                           <?= $student->father_name ?>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            2.
                        </td>
                        <td width="30%">
                           Tempat, Tanggal Lahir
                        </td>
                        <td >
                        
                               <?= $student->father_birth_place ?>, <?= $student->father_birth_date ?>
                           
                       
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <td width="30%">
                           Pendidikan Terakhir
                        </td>
                        <td >
                        <?= $student->father_last_education ?>
                               
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.
                        </td>
                        <td width="30%">
                           Pekerjaan
                        </td>
                        <td >
                           <?= $student->father_job ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.
                        </td>
                        <td width="30%">
                           Jumlah Penghasilan Perbulan
                        </td>
                        <td >
                          
                                   Rp     <?= $student->father_salary ?>
                                  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.
                        </td>
                        <td width="30%">
                           Alamat Lengkap
                        </td>
                        <td >
                           <?= $student->father_address ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.
                        </td>
                        <td width="30%">
                           Nama Ibu
                        </td>
                        <td >
                           <?= $student->mother_name ?>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            8.
                        </td>
                        <td width="30%">
                           Tempat, Tanggal Lahir
                        </td>
                        <td >
                        
                              <?= $student->mother_birth_place ?>, <?= $student->mother_birth_date ?>
                            
                        </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.
                        </td>
                        <td width="30%">
                           Pendidikan Terakhir
                        </td>
                        <td >
                           <?= $student->mother_last_education ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10.
                        </td>
                        <td width="30%">
                           Pekerjaan
                        </td>
                        <td >
                          <?= $student->mother_job ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11.
                        </td>
                        <td width="30%">
                           Jumlah Penghasilan Perbulan
                        </td>
                        <td >
                        
                                 Rp   <?= $student->mother_salary ?>
                               
                            </div>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            12.
                        </td>
                        <td width="30%">
                           Alamat Lengkap
                        </td>
                        <td >  
                           <ul>
                               <li>RT:   <?= $student->rt ?></li>    
                               <li>RW:  <?= $student->rw ?></li>
                               <li>Dusun:    <?= $student->dusun ?></li>
                               <li>Desa:  <?= $student->desa ?></li>
                               <li>Kecamatan: <?= $student->kecamatan ?> </li>  
                           </ul>
                        </td>
                    </tr>
                
                <!-- Data Wali -->
            
                    <tr>
                        <td colspan="3">
                           C. Identitas Wali
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.
                        </td>
                        <td width="30%">
                           Nama Wali
                        </td>
                        <td >
                           <?= $student->wali_name ?>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            2.
                        </td>
                        <td width="30%">
                           Tempat, Tanggal Lahir
                        </td>
                        <td >
                       
                             <?= $student->wali_birth_place ?>, <?= $student->birth_date ?>
                            
                        </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <td width="30%">
                           Pendidikan Terkahir
                        </td>
                        <td >
                          <?= $student->wali_last_education ?>
                             
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.
                        </td>
                        <td width="30%">
                           Pekerjaan
                        </td>
                        <td >
                        <?= $student->wali_job?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.
                        </td>
                        <td width="30%">
                           Alamat
                        </td>
                        <td >
                           <?= $student->wali_address ?>
                        </td>
                    </tr>
                
            </table>
        
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