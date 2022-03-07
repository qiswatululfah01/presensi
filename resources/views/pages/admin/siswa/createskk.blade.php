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

<div class="form-group p-4">
              <table border="0" width="100%">
                  <tr>
                      <td width="10%"><label for="nta">Tingkat</label></td>
                      <td width="30%" colspan="3">
                      <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">Purwa</option>
                          <option value="Perempuan">Madya</option>
                          <option value="Laninya">Utama</option>
                      </select>    
                      </td>
                      <td width="10%"></td>
                      <td width="10%"></td>
                      <td width="10%"><label for="nama_siswa">Tempat</label></td>
                      <td width="30%" colspan="3"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
                  </tr>

                  <tr>
                      <td width="10%"><label for="nta">Hari</label></td>
                      <td width="30%" colspan="3"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
                      <td width="10%"></td>
                      <td width="10%"></td>
                      <td><label for="nama_siswa">Pembina</label></td>
                      <td width="30%" colspan="3"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
                  </tr>

                  <tr>
                  <td width="10%"><label for="nama_siswa">Tanggal</label></td>
                      <td width="30%" colspan="3"><input type="date" class="form-control" name="nta" value="{{old('nta')}}"></td>
                      <td width="10%"></td>
                      <td width="10%"></td>
                      <td><label for="nama_siswa">Foto</label></td>
                      <td colspan="3">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foto" id="foto">
                          <label class="custom-file-label" for="validatedCustomFile"></label>
                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                      </div>
                  </td>
                  </tr>
                 
</table>
<div class="p-3 ">
<button float="right" type="submit" class="btn btn-primary">Simpan</button>
                <button align="right" type="reset" class="btn btn-primary">Batal</button>
</div>
<br>
<div class="card-body">
  <p class="text-uppercase text-center"><strong>PELANTIKAN SKU</strong><br><strong>(Syarat Kecakapan Umum)</strong></p>
<div class="row bg-white p-4">

<table class="table table-bordered" width="100%">
  <thead>
  <tr>
      <th scope="col" width="5%">NO</th>
      <th scope="col" width="10%">Tingkat</th>
      <th scope="col" width="10%">Hari</th>
      <th scope="col" width="15%">Tanggal</th>
      <th scope="col" width="10%">Sertifikat</th>
      <th scope="col" width="15%">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>
          <a href=""><i class="fas fa-eye btn btn-info"></i></a>
          <a href=""><i class="fas fa-edit btn btn-warning"></i></a> 
          <a href=""><i class="fas fa-trash btn btn-danger"></i></a>
    </td>
    </tr>
    
  </tbody>
</table>

</div>
</div>


</div>

</div>

  </div>
</div>
</div>


@endsection