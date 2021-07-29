@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
    <div class="row clearfix progress-box">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="bg-white pd-20 box-shadow border-radius-5 height-50-p">
                <div class="project-info clearfix">
                    <div class="project-info-left">
                        <div class="icon box-shadow bg-blue text-white">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <p class="weight-400 font-18">Kelas</p>
                        <span class="no text-blue weight-500 font-24">{{ $kelas }}</span>
                    </div>
                </div>
                {{-- <div class="project-info-progress">
                    <div class="row clearfix">
                        <div class="col-sm-6 text-muted weight-500">Pengajar</div>
                        <div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="bg-white pd-20 box-shadow border-radius-5 height-50-p">
                <div class="project-info clearfix">
                    <div class="project-info-left">
                        <div class="icon box-shadow bg-light-green text-white">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <p class="weight-400 font-18">Paket</p>
                        <span class="no text-light-green weight-500 font-24">{{ $paket }}</span>
                    </div>
                </div>
                {{-- <div class="project-info-progress">
                    <div class="row clearfix">
                        <div class="col-sm-6 text-muted weight-500">Target</div>
                        <div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated"
                            role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="bg-white pd-20 box-shadow border-radius-5 height-50-p">
                <div class="project-info clearfix">
                    <div class="project-info-left">
                        <div class="icon box-shadow bg-light-orange text-white">
                            <i class="fa fa-list-alt"></i>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <p class="weight-400 font-18">Pengajar</p>
                        <span class="no text-light-orange weight-500 font-24">{{ $pengajar }}</span>
                    </div>
                </div>
                {{-- <div class="project-info-progress">
                    <div class="row clearfix">
                        <div class="col-sm-6 text-muted weight-500">Review</div>
                        <div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated"
                            role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-50-p">
                <div class="project-info clearfix">
                    <div class="project-info-left">
                        <div class="icon box-shadow bg-light-purple text-white">
                            <i class="fa fa-podcast"></i>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <p class="weight-400 font-18">Siswa</p>
                        <span class="no text-light-purple weight-500 font-24">{{ $siswa }}</span>
                    </div>
                </div>
                {{-- <div class="project-info-progress">
                    <div class="row clearfix">
                        <div class="col-sm-6 text-muted weight-500">Review</div>
                        <div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated"
                            role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
