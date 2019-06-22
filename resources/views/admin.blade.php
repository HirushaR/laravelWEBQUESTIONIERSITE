@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#"></a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;">Python</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;">&nbsp;C Langauge</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;">&nbsp;WEB</a></li>
                </ul>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;">C#</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;">&nbsp;Java</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;">Link 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<div class="container" style="margin:40px">
    <p></p>
    <form method="post" action="{{route('insert')}}">
        @csrf
        <div class="form-group"><textarea class="form-control" id="summernote" name="editordata">add a question</textarea></div>
        <div class="form-group"><textarea class="form-control" id="summernote" name="editordata2">add a answer</textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(15,103,122);">Submit</button></div>
    </form>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend"></div>
</div>
<div class="input-group mb-3" style="margin-left: 80px;"></div>
<div class="projects-horizontal">
    <div class="container">
        <div class="intro"></div>
    </div>
</div>

@if($data == null)
    there are no question
    @else
    <section>
    <section class="shadow-none row m-3" id="container" style="filter: blur(0px);">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
            <a class="links" href="{{url('allAnswers')}}">
                <div class="card device-card">
                    <div class="card-device-status bg-success"></div>
                    <div class="card-body" style="margin-left: 80px;">
                        <h5 class="card-title">Quection number {!! $data->id !!}</h5>
                        <p class="card-text"> {!!$data->question!!}</p>
                        <div class="line-ellipse light"><span>{!!$data->answer!!}</span></div>
                        <p class="card-text-small">Created: {!! $data->created_at !!}<br></p>
                        <p class="card-text-small">card-catagary<br></p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="infopanel show" style="display:none">
            <div class="d-inline-block float-right mr-2 mt-1"><a class="close d-inline-block mr-2 mt-4" href="javascript:closeInfoPanel()" data-dismiss=".infopanel" aria-label="close"><span aria-hidden="true">x</span></a></div>
            <div class="clear p-2 ml-1 mb-2 bold"><span><br>Infopanel Title<br><br></span></div>
            <div class="clear p-2  "><span><br>{!!$data->question!!}<br><br></span></div>


        </div>
    </section>
</section>
@endif
@endsection
