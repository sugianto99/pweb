@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> <b>Tenaga Pendidik</b></a></li>
      <li class="breadcrumb-item active"><b>{{$title}}</b></li>
    </ol>
  </div> 
   <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
            <div class="card  card-primary card-outline">
              <h3 class="card-title"><i class="fa big-icon fas fa-graduation-cap"></i> {{$title}}</h3>
              </div>
              <form role="form" action="{{url('wali-kelas/store')}}" method="post">
                  {{csrf_field()}}        
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Kelas</label>
                        <select required name="kelas_id" class="form-control">
                           <option>Pilih Kelas</option>
                           @foreach($kelas as $k)
                           <option value="{{$k->kelas_id}}">{{$k->nama_kelas}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Guru</label>
                        <select required name="guru_id" class="form-control">
                           <option>Pilih Guru</option>
                           @foreach($guru as $g)
                           <option value="{{$g->guru_id}}">{{$g->nama_lengkap}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <br>
                <div class="card-footer">
                  <button class="btn btn-danger bg-gradient-danger btn-sm" onclick="location(href:'blabla')"><i class="fa fa-chevron-circle-left"></i> Kembali</button>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
              </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection