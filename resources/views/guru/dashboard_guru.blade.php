@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4 style="text-transform: capitalize;">Dasboard {{ Auth::user()->username }}</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" style="text-transform: capitalize;">{{Request::segment(1)}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">{{Request::segment(2)}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row clearfix progress-box">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
            <div class="project-info clearfix">
                <div class="project-info-left">
                    <div class="icon box-shadow bg-blue text-white">
                        <i class="fa fa-briefcase"></i>
                    </div>
                </div>
                <div class="project-info-right">
                    <span class="no text-blue weight-500 font-24"></span>
                    <p class="weight-400 font-18">Data Siswa</p>
                </div>
            </div>
            <!-- <div class="project-info-progress">
                <div class="row clearfix">
                    <div class="col-sm-6 text-muted weight-500">Siswa</div>
                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
                </div>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
            <div class="project-info clearfix">
                <div class="project-info-left">
                    <div class="icon box-shadow bg-light-green text-white">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                </div>
                <div class="project-info-right">
                    <span class="no text-light-green weight-500 font-24"></span>
                    <p class="weight-400 font-18">Kegiatan</p>
                </div>
            </div>
            <!-- <div class="project-info-progress">
                <div class="row clearfix">
                    <div class="col-sm-6 text-muted weight-500">Target</div>
                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
                </div>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> -->
        </div>
    </div>

    @endsection