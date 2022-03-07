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
  <div class="row container bg-white md-5 p-5">

<div class="col-sm-6">
      <form action="{{url('siswa.store')}}" method="post">
          @csrf
          <div class="form-group">
              <table border="0" width="100%">
              <tr>
                  <td width="30%"> <label for="kode_siswa">Kode</label></td>
                  <td width="80%"><input type="text" class="form-control" name="kode" value="{{old('kode')}}" readonly></td>
              </tr>
              <tr>
                  <td width="30%"><label for="nta">NTA
                  <label class="text-danger">*</label>
                  </label></td>
                  <td width="80%"><input type="text" class="form-control" name="nta" value="{{old('nta')}}"></td>
              </tr>
              <tr>
                  <td width="30%"> <label for="nama_siswa">Nama</label></td>
                  <td width="80%"> <input type="text" class="form-control" name="nama_siswa" value="{{old('nama_siswa')}}"></td>
              </tr>
              <tr>
                  <td width="30%"> <label for="tempat_lahir">Tempat Lahir</label></td>
                  <td width="80%"> <input type="text" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="30%"> <label for="tanggal_lahir">Tanggal Lahir</label></td>
                  <td width="80%"> <input type="date" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"></td>
              </tr>
              <tr>
                  <td width="30%"> <label for="jenis_kelamin">Jenis Kelamin</label></td>
                  <td width="80%" >
                      <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laninya">Laninya</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="30%"> <label for="agama">Agama</label></td>
                  <td width="80%" >
                      <select class="custom-select my-1 mr-sm-2" id="agama" name="agama">
                          <option selected>Pilih...</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Protestan">Protestan</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="30%"> <label for="alamat">Alamat</label></td>
                  <td width="80%"> <textarea class="form-control" id="message-text" name="alamat"></textarea></td>
              </tr>
              <tr>
                  <td width="30%"> <label for="golongan">Golongan</label></td>
                  <td width="80%" >
                      <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
                          <option selected>Pilih...</option>
                          <option value="Pembina">Pembina</option>
                          <option value="Pembntu Pembina">Pembantu Pembina</option>
                          <option value="Dewan Galang">Dewan Galang</option>
                          <option value="Penggalang Ramu">Penggalang Ramu</option>
                          <option value="Penggalang Rakit">Penggalang Rakit</option>
                          <option value="Penggalang Terap">Penggalang Terap</option>
                      </select>
                  </td> 
              </tr>
              <tr>
                  <td width="30%"> <label for="golongan">Jabatan</label></td>
                  <td width="80%" >
                      <select class="custom-select my-1 mr-sm-2" id="jabatan" name="jabatan">
                          <option selected>Pilih...</option>
                          <option value="Kamabigus">Kamabigus</option>
                          <option value="Pembina Utama">Pembina Utama</option>
                                <option value="Pelatih Lapangan">Pelatih Lapangan</option>
                          <option value="Pelatih Lapangan">Pratama Putra</option>
                          <option value="Pelatih Lapangan">Pratama Putri</option>
                          <option value="Pelatih Lapangan">Pemimpin Regu</option>
                          <option value="Pelatih Lapangan">Wakil Pemimpin Regu</option>
                          <option value="Sekretaris">Sekretaris</option>
                          <option value="Bendahara">Bendahara</option>
                          <option value="Operator">Operator</option>
                          <option value="Tenaga IT">Tenaga IT</option>
                          <option value="Lainnya">Lainnya</option>
                      </select>
                  </td> 
              </tr>
              </table>
          </div>
</div> 
   
<div class="col-sm-6">
    <div class="form-group">
              <table border="0" width="100%">
              <tr>
                  <td width="20%" height="5"> <label for="Foto">Foto</label></td>
                  <td width="20%"> <td width="50%" rowspan="2">
                      <img src="{{url('frontend/template/assets/images/pramukapeduli.jpeg')}}" width="100%" height="100%" alt="...">
                  </td>
              </tr>
              <tr>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foto" id="foto">
                          <label class="custom-file-label" for="validatedCustomFile"></label>
                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                      </div>
                  </td>
              </tr> 
              <tr>
                  <td width="30%" class="-5"><label for="pangkalan">Pangkalan</label></td>
                  <td width="80%" colspan="2"><input type="text" class="form-control" name="pangkalan" value="SMPN 43 Semarang" readonly></td>
              </tr>
              <tr>
                  <td> <label for="kwarda">Kwarda</label></td>
                  <td width="80%" colspan="2"><input type="text" class="form-control" name="kwarda" value="Jawa Tengah" readonly></td>
              </tr>
              <tr>
                  <td>  <label for="kwarcab">Kwarcab</label></td>
                  <td width="80%" colspan="2"><input type="text" class="form-control" name="kwarcab" value="Kota Semarang" readonly></td>
              </tr>
                  <tr>
                  <td > <label for="kwarran">Kwarran</label></td>
                  <td width="80%" colspan="2"><input type="text" class="form-control" name="kwarran" value="Genuk" readonly></td>
              </tr>
              </table>
      </div>
</div>

<div class="p-3 ">
  <button float="right" type="submit" class="btn btn-primary">Simpan</button>
  <button align="right" type="reset" class="btn btn-primary">Batal</button>
</div> 

</div>

  </div>
</div>
</div>


@endsection