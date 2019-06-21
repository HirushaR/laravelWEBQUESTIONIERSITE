<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Question1.html</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/TextEditor.css">
</head>

<body style="background-size: auto;background-position: 100%10%;background-repeat: no-repeat;background-image: url(&quot;assets/img/test4.png&quot;);">
@include('layouts.nav')
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-left: 10px;">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;filter: brightness(100%);color: #575957;">&nbsp; Python &nbsp;</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;margin-left: 0px;">&nbsp;C Language</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; WEB &nbsp;&nbsp;</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; &nbsp;C# &nbsp;</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; Java &nbsp;</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; Link&nbsp;</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
    <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Question:  {!! $question -> question !!}</p>
    <form>
        <div class="form-group" style="background-color: rgba(174,23,23,0);"><textarea class="form-control" id="summernote" name="editordata" style="height: 280px;width: 500px;margin-left: 50px;"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(15,103,122);">Submit</button></div>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

</body>

</html>
