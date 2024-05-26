<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Event Calendar Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="calender/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="calender/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="calender/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="calender/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Event Calendar <small>Responsive Event Calendar</small></h1>
</div>

<!-- Event Calendar - START -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="event">
                <div class="img">
                    <img alt="Event Image"src="http://www.prepbootstrap.com/Content/images/template/design/design1.jpg" />
                </div>
                <div class="desc">
                    <h3>Where does it come from?</h3>
                    <div class="social ">
                        <a class="facebook" href="#facebook"><span class="fa fa-facebook"></span></a>
                        <a class="twitter" href="#twitter"><span class="fa fa-twitter"></span></a>
                        <a class="google-plus" href="#google-plus"><span class="fa fa-google-plus"></span></a>
                    </div>
                    <a href="#website"><span class="fa fa-globe"></span>  Website</a> $28.00
                </div>
                <div class="date pull-right">
                    <div class="day">15</div>
                    <div class="month">Jul</div>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="event">
                <div class="img">
                    <img alt="Event Image"src="http://www.prepbootstrap.com/Content/images/template/design/design2.jpg" />
                </div>
                <div class="desc">
                    <h3>Why do we use it?</h3>
                    <div class="social ">
                        <a class="facebook" href="#facebook"><span class="fa fa-facebook"></span></a>
                        <a class="twitter" href="#twitter"><span class="fa fa-twitter"></span></a>
                        <a class="google-plus" href="#google-plus"><span class="fa fa-google-plus"></span></a>
                    </div>
                    <a href="#website"><span class="fa fa-globe"></span>  Website</a> $69.00
                </div>
                <div class="date pull-right">
                    <div class="day">30</div>
                    <div class="month">Jun</div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="event">
                <div class="img">
                    <img alt="Event Image"src="http://www.prepbootstrap.com/Content/images/template/design/design3.jpg" />
                </div>
                <div class="desc">
                    <h3>Where can I get some?</h3>
                    <div class="social ">
                        <a class="facebook" href="#facebook"><span class="fa fa-facebook"></span></a>
                        <a class="twitter" href="#twitter"><span class="fa fa-twitter"></span></a>
                        <a class="google-plus" href="#google-plus"><span class="fa fa-google-plus"></span></a>
                    </div>
                    <a href="#website"><span class="fa fa-globe"></span>  Website</a> $105.00
                </div>
                <div class="date pull-right">
                    <div class="day">22</div>
                    <div class="month">Jan</div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .event {
        display: inline-block;
        width: 100%;
        height: 150px;
        overflow: hidden;
        margin-bottom: 20px;
        border: 1px solid #607D8D;
        vertical-align: middle;
    }

        .event .date {
            display: inline-block;
            width: 150px;
            height: 150px;
            text-align: center;
            background-color: #607D8D;
            vertical-align: middle;
            overflow: hidden;
        }

            .event .date .day {
                font-size: 70px;
                color: #fff;
            }

            .event .date .month {
                font-size: 30px;
                color: #fff;
            }

        .event .img {
            display: inline-block;
            width: 150px;
            height: 150px;
            vertical-align: top;
            overflow: hidden;
        }

            .event .img img {
                width: 100%;
                height: auto;
                vertical-align: middle;
            }

        .event .desc {
            display: inline-block;
            padding-left: 20px;
            font-size: 15px;
            overflow: hidden;
            vertical-align: middle;
        }

        .event .social {
            font-size: 25px;
            overflow: hidden;
        }

            .event .social .si {
                display: inline-block;
                width: 100%;
                clear: both;
                vertical-align: middle;
                overflow: hidden;
            }

            .event .social .facebook {
                color: rgb(48, 88, 145) !important;
            }

            .event .social .twitter {
                color: rgb(79, 213, 248) !important;
            }

            .event .social .google-plus {
                color: rgb(221, 75, 57) !important;
            }

            .event .social .facebook:hover {
                color: #607D8D !important;
            }

            .event .social .twitter:hover {
                color: #607D8D !important;
            }

            .event .social .google-plus:hover {
                color: #607D8D !important;
            }

    @media screen and (max-width:640px) {
        .event .desc h3 {
            font-size: 15px;
        }

        .event {
            height: 100px;
        }

            .event .date {
                width: 100px;
                height: 100px;
            }

                .event .date .day {
                    font-size: 20px;
                }

            .event .img {
                width: 100px;
                height: 100px;
            }

            .event .social {
                font-size: 16px;
            }
    }

    @media screen and (max-width:480px) {
        .event .img {
            display: none;
        }
    }
</style>

<!-- Event Calendar - END -->

</div>

</body>
</html>