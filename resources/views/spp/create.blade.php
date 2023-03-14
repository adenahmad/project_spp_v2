@extends('layouts.master')
@section('content')
    @if(Auth::user()->role !='Admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center" style="margin-top:200px;">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="{{asset('dashboard')}}">&larr; Back to Dashboard</a>
        </div>

    </div>
    <!-- /.container-fluid -->               
    @endif

    @if(Auth::user()->role !='Petugas')
    @if(Auth::user()->role !='Siswa')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah SPP</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('spp.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    <br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('spp.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun</strong>
                    <input class="form-control" type="number" name="tahun" placeholder="Isi Tahun">          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nominal</strong>
                    <input class="form-control" type="text" name="nominal" placeholder="Isi Nominal">          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    @endsection
    @endif
    @endif
@section('title')
Siswa Create
@stop