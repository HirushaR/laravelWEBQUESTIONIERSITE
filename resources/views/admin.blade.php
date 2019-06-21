<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Panel-Element-1.css">
    <link rel="stylesheet" href="assets/css/Panel-Element-2.css">
    <link rel="stylesheet" href="assets/css/Panel-Element-3.css">
    <link rel="stylesheet" href="assets/css/Panel-Element.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/TextEditor.css">
</head>

<body>

    @include('layouts.nav')

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
        <form action="{{url('insert')}}" method="post">
            @csrf
            <div class="form-group"><textarea class="form-control" id="summernote" name="editordata"></textarea></div>
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
    <section>
        <section id="amihub-elemnt-menubar">
            <div class="top-menu-wrapper shadow">
                <div class="row pt-1 pb-1 pl-3 pr-3 align-items-center top-menu-wrapper" style="background-color: rgba(255,255,255,0);">
                    <div class="col col-lg-2 col-sm-12 col-space"><button class="btn btn-primary shadow-none btn btn-outline-info btn-block" type="button" data-toggle="modal" data-target="#addSensorModal" style="margin-left: 80px;"><i class="fa fa-plus mr-2"></i>&nbsp;Add Quection</button></div>
                    <div
                        class="col col-lg-10 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <div class="input-group-append"></div>
                        </div>
                </div>
            </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="addSensorModal" aria-labelledby="addSensorModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header"><i class="fa fa-plus icon-dashboard"></i>
                            <h4 class="modal-title">Add Quection</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group"><label>details:</label><input class="form-control" type="text" id="fieldNameDashboard" placeholder="Quection"></div>
                            </form>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" id="btnModelCloseAddDashboard" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary btn btn-outline-info btn-block" type="button">Add</button></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-none row m-3" id="container" style="filter: blur(0px);">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <a class="links" href="javascript:openInfoPanel()">
                    <div class="card device-card">
                        <div class="card-device-status bg-success"></div>
                        <div class="card-body" style="margin-left: 80px;">
                            <h5 class="card-title">python</h5>
                            <p class="card-text" ></p>
                            <div class="line-ellipse light"><span>
                                    {!!$data->question!!}
                                    </span></div>
                            <div class="line-ellipse light"><span>Local:</span></div>
                            <p class="card-text-small">Last activity: 23m ago<br></p>
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
                {!!$data->question!!}
            </div>
        </section>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="assets/js/Panel-Element-1.js"></script>
    <script src="assets/js/Panel-Element.js"></script>
   
</body>

</html>
