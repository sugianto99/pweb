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
    <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">            
            <div class="sparkline13-list">
                <h3 class="card-title"><i class="fa big-icon fas fa-edit"></i> Form {{$title}}</h3>
              <form role="form" action="{{url('jenjang-pendidikan/update/'.$jenjang_pendidikan->jp_id)}}" method="post">
                  {{csrf_field()}}
                    {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Jenjang Pendidikan</label>
                        <input value="{{$jenjang_pendidikan->jenjang_pendidikan}}" required type="text" name="jp" class="form-control" id="exampleInputEmail1" placeholder="Contoh : S1">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Detail Jenjang Pendidikan</label>
                        <input value="{{$jenjang_pendidikan->jenjang_pendidikan_detail}}" style="text-transform: capitalize;" required type="text" name="jpd" class="form-control" id="exampleInputPassword1" placeholder="Strata 1">
                     </div>
                  </div>
                <div class="card-footer">
                <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('jenjang-pendidikan/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
         </div>
      </div>
</div>
@endsection
