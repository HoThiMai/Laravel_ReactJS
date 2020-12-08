<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <style>

        .body {
            font-family: 'Times New Roman', Times, serif;
        }
        input,button{
            outline: none;
        }
        .navbar-default {
            background-color: mistyrose;
        }

        .navbar-default>.container-fluid {
            background-color: mistyrose;
        }

        .carousel-inner>.item>img {
            height: 600px;
            width: 100%;
        }

        .container-fluid {
            margin-top: 30px;
            font-size: 16px;
        }

        .container-fluid>.navbar-right button {
            border: none;
            font-size: 16px;
            background-color: mistyrose;
        }

        .navbar-default {
            height: 80px;
        }

        .container-fluid>.row>.col-sm-4>h1 {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: sienna;
            /* font-family: Verdana, Geneva, Tahoma, sans-serif !important; */
        }

        .container-fluid>.row>.col-sm-4>.list-group>.list-group-item {
            color: olive;
            font-weight: bold;
            font-size: medium;
        }

        .container-fluid>.row>.col-sm-4>.list-group>.list-group-item>.form-check {
            color: slategrey;
            font-weight: normal;
            font-size: 13px;
            margin-left: 50px;
        }

        .container-fluid>.row>.col-sm-8>h1 {
            color: sienna;
            /* font-family: monospace; */
        }

        /*----------------------------*/

        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
            margin-bottom: 10px;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            left: 0;
            background-color: rgba(255, 255, 255, 0.7);
            top: -200px;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all 0.1s ease-out 0.5s;
            transition: all 0.1s ease-out 0.5s;
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            top: 0px;
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        .hovereffect img {
            display: block;
            position: relative;
            height: 280px;
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            -webkit-transition: all ease-in-out 0.1s;
            transition: all ease-in-out 0.1s;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect:hover h2 {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            margin: 50px 0 0 0;
            background-color: transparent;
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            color: #000;
            border: 1px solid #000;
            -webkit-transition: all ease-in-out 0.3s;
            transition: all ease-in-out 0.3s;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover a.info {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            box-shadow: 0 0 5px #000;
            color: #000;
            border: 1px solid #000;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        /*footer*/

        .site-footer {
            background-color: mistyrose;
            font-size: 15px;
            line-height: 24px;
            color: navy;
            position: relative;
            margin: auto;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5
        }

        .site-footer hr.small {
            margin: 20px 0
        }

        .site-footer h6 {
            color: rgba(0, 0, 0, 0.6);
            font-weight: bold;
            font-size: 20px;
            text-transform: uppercase;
            margin-top: 25px;
            letter-spacing: 2px;
            /* font-family: monospace; */
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none
        }

        .footer-links li {
            display: block
        }

        .footer-links a {
            color: #737373
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block
        }

        .site-footer .social-icons {
            text-align: right
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d
        }

        .copyright-text {
            margin: 0
        }

        @media (max-width:991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        @media (max-width:767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.dribbble:hover {
            background-color: #ea4c89
        }

        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }

        /* admin */
        .container>.row>table {
            border-color: darkred;
            text-align: center;

        }

        .container>.row>h1 {
            position: relative;
            margin: auto;
            text-align: center;
            color: darkred;
            /* font-family: cursive; */
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .container>.row>table>thead {
            background-color: darkred;
            color: whitesmoke;
            position: relative;
            margin: auto;
            text-align: center;
        }

        /*======================================*/
        #myCarousel {
            background: #000;
            text-align: center;
            position: relative
        }

        #myCarousel img {
            width: 100%;
            height: 600px;
        }

        #myCarousel:hover img {
            opacity: .5
        }

        #myCarousel .box-content {
            padding: 30px 10px 30px 0;
            background: rgba(0, 0, 0, .65);
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            opacity: 0;

        }

        #myCarousel:hover .box-content {
            top: 10px;
            left: 10px;
            bottom: 10px;
            right: 10px;
            opacity: 1
        }

        #myCarousel .title {
            font-weight: 700;
            color: #fff;
            line-height: 17px;
            margin: 5px 0;
            position: absolute;
            bottom: 55%
        }

        #myCarousel .icon li a {
            line-height: 35px;
            border-radius: 50%
        }

        #myCarousel .icon {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 50%
        }

        #myCarousel .icon li {
            display: inline-block;
            opacity: 0;
            transform: translateY(40px)
        }

        #myCarousel:hover .icon li {
            opacity: 1;
            transform: translateY(0)
        }

        #myCarousel:hover .icon li:first-child {
            transition-delay: .1s
        }

        #myCarousel:hover .icon li:nth-child(2) {
            transition-delay: .2s
        }

        #myCarousel .icon li a {
            display: block;
            width: 35px;
            height: 35px;
            background: #f39c12;
            font-size: 20px;
            color: #000;
            margin-right: 5px;
            transition: all .35s ease 0s
        }

        #myCarousel .icon a:hover {
            background: #fff
        }

        .welcome {
            background-color: #000;
            color: chartreuse;
            height: 80px;
        }

        /*admin danh muc*/
        .box-content h2 {
            /* font-family: cursive; */
            color: white;

        }

        .round {
            text-align: center;
            margin-top: 80px;

        }

        .round a {
            color: crimson;
            /* font-family: Helvetica; */
            text-transform: uppercase;
            font-size: 20px;
            text-decoration: none;
        }

        .round .button {
            display: inline-block;
            width: auto;
            height: 40px;
            line-height: 40px;
            margin: 20px;
            position: relative;
            overflow: hidden;
            border: 2px solid crimson;
            transition: color .5s;
        }



        .round .button:hover {
            color: #fff;
            background-color: crimson;
        }

        /*-------------------------------------*/
        .modal-header {
            text-align: center;
            /* font-family:sans-serif; */
            background-color: darkred;
            color: white;
        }

        .modal-footer {
            text-align: center;
        }

        .modal-footer button {
            height: 32px;
            padding: 0 15px;
            font-size: 14px;
            color: white;
            cursor: pointer;
            background-color: darkred;
            border: 1px solid crimson;
            border-radius: 4px;
            transition: all 0.2s ease-in-out;
        }

        .modal-footer button:hover {
            box-shadow: 1px 1px crimson, 2px 2px red, 3px 3px maroon;
            transform: translateX(-3px);
        }
    </style>
</head>

<body>
    @include('header')
    <div class="rev-slider">
        @yield('content')
    </div>
    <!-- slider -->
    @include('footer');
</body>

</html>