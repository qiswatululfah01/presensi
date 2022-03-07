@extends('layouts.admin')



@section('content')


 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('siswa')}}" style="text-decoration:none">Siswa </a>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="row container bg-white md-5 p-5">

<ul class="nav">
    <li  class="scroll-to-section p-1"><a class="btn btn-danger btn-sm" href="{{url('siswa/create')}}">Tambah Data</a> </li>
    <li  class="scroll-to-section p-1"><a class="btn btn-warning btn-sm "> <i class="fas fa-fw fa-file-import"></i></a></li>
    <li  class="scroll-to-section p-1"><a class="btn btn-success btn-sm "> <i class="fas fa-fw fa-file-download"></i></a></li>
</ul>




@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>            
        @endforeach
    </ul>
</div>
@endif

@if (Session::has('success'))
<p class="alert alert-success">{{ Session::get('success')}}</p><br/>
@endif


    <table class="table table-bordered table-responsive table-hover mt-2" width="50%">
        <thead class="table-dark">
        <tr align="center" >
            <th width="5%">NO</th>
            <th width="45%">NAMA</th>
            <th width="15%">NTA</th>
            <th width="40%">FOTO</th>
            <th colspan="3" width="10%">AKSI</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($siswa as $item)
        <tr>
                <td align="center" ></td>
                <td>{{$item->nama_siswa}}</td>
                <td>{{$item->kelas}}</td>
                <td></td>
                <td align="right"><button class="btn btn-info" data-toggle="modal" data-target="#viewsiswa">Lihat</button></td>
                <td align="right">
                  <button class="btn btn-success" data-id="{{$item->id}}" data-kode="{{$item->siswa}}" data-nama="{{$item->ketegori}}" 
                    data-judul="{{$item->judul}}" data-foto="{{$item->foto}}" data-toggle="modal"  data-target="#editsiswa{{$item->kode_siswa}}">Edit
                  </button>
                </td>
                <td>
                    <form action="{{url('siswa/'.$item->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>

        @empty
        <tr>
          <td colspan="4" class="text-center">
            Data Kosong
          </td>
        </tr>

        @endforelse
        </tbody>
            
    </table>

</div>
    </div>

</div>



@endsection