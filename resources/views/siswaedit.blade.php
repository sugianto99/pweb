@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Siswa</a></li>
      <li class="breadcrumb-item active">{{$title}} </li>
   </ol>
</div>
 <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
            <div class="card card-primary card-outline">
                <h3 class="card-title"><i class="fa big-icon fas fa-edit"></i> Form {{$title}}</h3>
              <form role="form" action="{{url('siswa/update/'.$siswa->siswa_id)}}" method="post">
                  {{method_field('PUT')}}
                  {{csrf_field()}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIS</label>
                        <input value="{{$siswa->nis}}" required type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">NISN</label>
                        <input value="{{$siswa->nisn}}" required type="text" name="nisn" class="form-control" id="exampleInputPassword1" placeholder="Masukan NISN">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Nama Siswa</label>
                        <input value="{{$siswa->nama_siswa}}" required type="text" name="nama_siswa" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Siswa">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input value="{{$siswa->alamat}}" required type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Kelas</label>
                        <select required name="id_kelas" class="form-control kelas">
                           <option value="{{$siswa->kelas_id}}">{{@$siswa->kelas->nama_kelas}}</option>
                           @foreach($kelas as $row)
                           <option value="{{$row->kelas_id}}">{{$row->nama_kelas}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input value="" disabled type="text" class="form-control" id="exampleInputPassword1" placeholder="Silahkan Pilih Kelas">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jenis Kelamin</label><br>
                        <div class="custom-control custom-radio">
                          <input value="L" <?php if($siswa->jk == 'L'){ echo "checked"; } ?> class="custom-control-input" type="radio" name="jk" value="L" id="customRadio2" name="customRadio" checked>
                          <label for="customRadio2" class="custom-control-label">Laki-laki</label>
                        </div>    
                        <div class="custom-control custom-radio">
                          <input value="P" <?php if($siswa->jk == 'P'){ echo "checked"; } ?> class="custom-control-input" type="radio" name="jk" value="P" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Perempuan</label>
                        </div>
                                         
                     </div>
                  </div>
                <div class="card-footer">
                <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('jenjang-pendidikan/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
              </form>
              
            </div>
            </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
