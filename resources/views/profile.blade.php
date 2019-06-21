@extends('layouts.app')
@section('content')
    <div></div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro"></div>
            <div class="row people" style="margin-left: 100px;margin-right: 0px;">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box" style="height: 0px;width: 278.325px;margin-left: 100px;background-color: rgba(255,255,255,0.05);"><img class="rounded-circle" src="assets/img/1.jpg" style="margin-top: 10px;">
                        <h3 class="name">{{Auth::user()->name}}</h3>
                        <p class="title">web designer</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box" style="height: 358px;width: 500px;margin-left: 100px;">
                        <h3 class="name"></h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"
                            style="margin-bottom: 0px;margin-top: 120px;"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="features-boxed">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features" style="margin-top: 10pxz;">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 323px;background-color: rgba(255,255,255,0);"><img class="border rounded-circle" src="assets/img/badge.png" style="width: 200px;">
                        <h3 class="name">Badge 01</h3>
                    </div>
                    <div class="box" style="height: 323px;background-color: rgba(255,255,255,0);"><img class="border rounded-circle" src="assets/img/badge.png" style="width: 200px;">
                        <h3 class="name">Badge 01</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 323px;background-color: rgba(255,255,255,0);"><img class="border rounded-circle" src="assets/img/badge.png" style="width: 200px;">
                        <h3 class="name">&nbsp;Badge 02</h3>
                    </div>
                    <div class="box" style="height: 323px;background-color: rgba(255,255,255,0);"><img class="border rounded-circle" src="assets/img/badge.png" style="width: 200px;">
                        <h3 class="name">&nbsp;Badge 02</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="text-break box" style="height: 323px;background-color: rgba(255,255,255,0);"><img class="border rounded-circle" src="assets/img/badge.png" style="width: 200px;">
                        <h3 class="name">Badge 03</h3>
                    </div>
                    <div class="text-break box" style="height: 323px;background-color: rgba(255,255,255,0);"><img class="border rounded-circle" src="assets/img/badge.png" style="width: 200px;">
                        <h3 class="name">Badge 03</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
