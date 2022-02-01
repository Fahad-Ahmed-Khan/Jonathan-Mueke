<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>

</head>
<body>
@include('layouts.navbar')
<div class="banner-container bg-light" id="section-1">
    <div class="banner">
        <div class="bg-banner">
            <p class="text-white ms-5" style="position:relative;top:100px;width:261px;font-weight:800;font-size:24px;">
                Jonathan Mueke</p>
            <p class="text-white" style="position:relative;top:100px;width:378px;font-weight:900;font-size:54px;">
                Gallery</p>
        </div>

        <div class="mueke">
            <div class="socials">

            </div>
        </div>
    </div>
</div>

<section class="" id="sermons">
    <div class="container ">
        <div class="row no-gutter" id="">
            <!--Album Start-->
            @foreach($galleries as $key => $gallery)
                <div class="item col-md-4 col-md-4 mt-3 mb-3">
                    <a class="item fancybox mb-5 mt-5" href="storage/{{$gallery->images[0]->image}}"
                       data-fancybox="gallery{{$key}}">
                        <div class="overlay-content">
                            <img class="img-fluid rounded" src="storage/{{$gallery->images[0]->image}}" alt="...">
                        </div>
                        <h2 class="text-center text-dark">{{$gallery->title}}</h2>
                        @foreach($gallery->images as $key => $image)
                            <a class="item fancybox" href="storage/{{$image->image}}"
                               data-fancybox="gallery{{$key}}"></a>
                        @endforeach
                    </a>
                    <!--Album End-->

                </div>
            @endforeach
        </div>
</section>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
