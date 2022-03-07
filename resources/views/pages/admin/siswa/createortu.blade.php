@extends('layouts.admin')



@section('content')


 <div class="container-fluid ">



<div class="alert alert-warning text-right " role="alert">
<a  href="{{url('siswa')}}" style="text-decoration:none">Siswa / </a>
<a  href="{{url('siswa/create')}}" style="text-decoration:none">Tambah Data </a>
</div>



<div class="card">
  <div class="card-header d-block p-2 bg-dark text-white">

  
        <a  href="{{url('siswa')}}" class="btn btn-dark" style="text-decoration:none">Data Diri </a>
        <a  href="{{url('siswa/createortu')}}" class="btn btn-dark" style="text-decoration:none">Orang Tua/ Wali </a>

        <div class="btn-group dropright">
        <a  href="#" class="btn btn-dark dropdown-toggle" style="text-decoration:none" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Riwayat Kepramukaan</a>
        
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{url('siswa/createsku')}}">SKU</a>
    <a class="dropdown-item" href="{{url('siswa/createskk')}}">SKK</a>
    <a class="dropdown-item" href="{{url('siswa/creategaruda')}}">GARUDA</a>
    <a class="dropdown-item" href="{{url('siswa/createkegiatan')}}">KEGIATAN</a>
    <a class="dropdown-item" href="{{url('siswa/createjuara')}}">KEJUARAAN</a>
  </div>
</div>

     
</div>


  <div class="card-body">
  <div class="alert alert-light" role="alert"> Data Orang Tua </div>

      <div class="card-body">

      <form action="{{url('siswa.store')}}" method="post">
          @csrf
          <div class="form-group">
              <table border="0" width="100%">
              <tr>
                  <td width="15%"> <label for="kode_siswa">NIK Ayah</label></td>
                  <td width="85%"><input type="text" class="form-control" name="kode" value="{{old('kode')}}" ></td>
              </tr>
              <tr>
                  <td width="15%"><label for="nta">Nama</label></td>
                  <td width="85%"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="nama_siswa">Tempat Lahir</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="nama_siswa" value="{{old('nama_siswa')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="tempat_lahir">Tanggal Lahir</label></td>
                  <td width="85%"> <input type="date" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="tanggal_lahir">Pendidikan</label></td>
                  <td width="85%" >
                      <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">SD/ MI Sederajat</option>
                          <option value="Perempuan">SMP/ MTS Sederajat</option>
                          <option value="Laninya">SMA/ SMK/ MA Sederajat</option>
                          <option value="Laninya">Lainnya</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="15%"> <label for="jenis_kelamin">Pekerjaan</label></td>
                  <td width="85%" >
                      <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laninya">Laninya</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="15%"> <label for="agama">Penghasilan</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="alamat">Alamat</label></td>
                  <td width="85%"> <textarea class="form-control" id="message-text" name="alamat"></textarea></td>
              </tr>
             
              </table>
          </div>
  </div>


      <div class="card-body">

      <form action="{{url('siswa.store')}}" method="post">
          @csrf
          <div class="form-group">
              <table border="0" width="100%">
              <tr>
                  <td width="15%"> <label for="kode_siswa">NIK Ibu</label></td>
                  <td width="85%"><input type="text" class="form-control" name="kode" value="{{old('kode')}}" ></td>
              </tr>
              <tr>
                  <td width="15%"><label for="nta">Nama</label></td>
                  <td width="85%"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="nama_siswa">Tempat Lahir</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="nama_siswa" value="{{old('nama_siswa')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="tempat_lahir">Tanggal Lahir</label></td>
                  <td width="85%"> <input type="date" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="tanggal_lahir">Pendidikan</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="jenis_kelamin">Pekerjaan</label></td>
                  <td width="85%" >
                      <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laninya">Laninya</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="15%"> <label for="agama">Penghasilan</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"></td>
              </tr>
              
             
              </table>
          </div>
    
  </div>

  <div class="alert alert-light" role="alert"> Data Wali </div>

      <div class="card-body">

      <form action="{{url('siswa.store')}}" method="post">
          @csrf
          <div class="form-group">
              <table border="0" width="100%">
              <tr>
                  <td width="15%"> <label for="kode_siswa">NIK Wali</label></td>
                  <td width="85%"><input type="text" class="form-control" name="kode" value="{{old('kode')}}" ></td>
              </tr>
              <tr>
                  <td width="15%"><label for="nta">Nama</label></td>
                  <td width="85%"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="nama_siswa">Tempat Lahir</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="nama_siswa" value="{{old('nama_siswa')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="tempat_lahir">Tanggal Lahir</label></td>
                  <td width="85%"> <input type="date" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="tanggal_lahir">Pendidikan</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="jenis_kelamin">Pekerjaan</label></td>
                  <td width="85%" >
                      <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laninya">Laninya</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="15%"> <label for="agama">Penghasilan</label></td>
                  <td width="85%"> <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="15%"> <label for="alamat">Alamat</label></td>
                  <td width="85%"> <textarea class="form-control" id="message-text" name="alamat"></textarea></td>
              </tr>
             
              </table>
          </div>


<!-- 
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      </div>
      </div>
    </div>
  </div> -->
  




</div>
<div class="p-3 ">
  <button float="right" type="submit" class="btn btn-primary">Simpan</button>
  <button align="right" type="reset" class="btn btn-primary">Batal</button>
</div> 
  </div>
</div>
</div>
<br>

@endsection