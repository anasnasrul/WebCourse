<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Daftar Riwayat Hidup</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>    

    {{ Html::style('assets/css/animate.min.css') }}

    {{ Html::style('assets/css/paper-dashboard.css') }}

    {{ Html::style('assets/css/font-awesome.min.css') }}    

    {{ Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') }}

    {{ Html::style('assets/css/themify-icons.css') }}

    {{ Html::style('assets/css/style.css') }}

    {{ Html::style('./assets/css/video-js.css') }}

    {{ Html::style('./assets/css/video-js.min.css') }}  

    {{ Html::style('./assets/css/indexvideo.css') }} 

    {{ Html::style('./assets/css/app.css') }}  

    {{ Html::style('assets/css/bg1.css') }}
</head>
<body>
@include('home.course.sololearn.python.sidebar5')
<div class="wrapper">
    <div class="main-panel">
        <div class="container">
            <div class="row">      
                <div class="col-md-12"> 
                    <div class="card">
                        <div class="header" align="center">
                                               
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                {{ Html::style('assets/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}
                @include('home.course.sololearn.python.details5')

            </div>
        </div>
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="list-group">                        
                        <li class="list-group-item list-group-item-primary">
                            Thanks to: <img src="/assets/img/bannerudemy.jpg" height="20px">&nbsp
                            <img src="/assets/img/banneryoutube.jpg" height="20px">&nbsp
                            <img src="/assets/img/sololearn.jpg" height="20px">                   
                        </li>                         
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , Created By <a href="/">Anas</a><i class="fa fa-heart heart"></i> 
                </div>
            </div>
        </footer>

    </div>
</div>

</body>

{{ Html::script('assets/js/jquery-1.10.2.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/bootstrap-4.0.0-dist/js/popper.min.js') }}
{{ Html::script('assets/js/script.js') }}
{{ Html::script('assets/js/kitfontawesome.js')}}
{{ Html::script('assets/js/videojs-ie8.min.js') }}

</html>
