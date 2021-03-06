<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="main.js"></script>

    <style>
           .box{
            margin-top:140px;
           }
           .bg{
            background-color:#ecebeb;
           }
           .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-facebook {
            background: #3B5998;
            color: white;
            }

            .fa-twitter {
            background: #55ACEE;
            color: white;
            }

            .fa-google {
            background: #dd4b39;
            color: white;
            }

            .fa-linkedin {
            background: #007bb5;
            color: white;
            }

            .fa-youtube {
            background: #bb0000;
            color: white;
            }

            .fa-instagram {
            background: #125688;
            color: white;
            }

            .fa-pinterest {
            background: #cb2027;
            color: white;
            }

            .fa-snapchat-ghost {
            background: #fffc00;
            color: white;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }

            .fa-skype {
            background: #00aff0;
            color: white;
            }

            .fa-android {
            background: #a4c639;
            color: white;
            }

            .fa-dribbble {
            background: #ea4c89;
            color: white;
            }

            .fa-vimeo {
            background: #45bbff;
            color: white;
            }

            .fa-tumblr {
            background: #2c4762;
            color: white;
            }

            .fa-vine {
            background: #00b489;
            color: white;
            }

            .fa-foursquare {
            background: #45bbff;
            color: white;
            }

            .fa-stumbleupon {
            background: #eb4924;
            color: white;
            }

            .fa-flickr {
            background: #f40083;
            color: white;
            }

            .fa-yahoo {
            background: #430297;
            color: white;
            }

            .fa-soundcloud {
            background: #ff5500;
            color: white;
            }

            .fa-reddit {
            background: #ff5700;
            color: white;
            }

            .fa-rss {
            background: #ff6600;
            color: white;
            }
    </style>

</head>
<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="font-family: 'Kanit', sans-serif;">
            <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            ตลาดซื้อขาย-ออนไลน์  
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <form class="form-inline my-2 my-lg-0 ">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">เข้าสู่ระบบ</button> &nbsp;
                <a class="nav-link disabled" href="#">หรือ</a>&nbsp;
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">สมัครสมาชิก</button>
                 
            </form>
           </div>
    </nav>

    <div class="container">
       <div class="box">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    {{-- ขาย --}}
                    <div style="width: 14rem;">
                        <a href="#" ><img data-toggle="modal" data-target="#myModal" style="width: 20rem;" src="/img/aaa.PNG" alt="Card image cap"></a>
                     </div>
                </div>
                <div class="col-sm" style="margin-top:55px;">
                    {{-- ซื้อ --}}
                     <div style="width: 26rem;">
                        <a href="/buy"><img class="card-img-top" src="/img/bbb.PNG" alt="Card image cap"></a>
                     </div>
                </div>
                <div class="col-sm">
                
                </div>

                
            </div>
       </div>
    </div>
    

    <div class="container mt-3">
         <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">สมัครสมาชิก</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <center><h6>สมัครสมาชิก Kaidee ง่ายๆ เพื่อช่วยให้คุณใช้งานสะดวกยิ่งขึ้น</h6></center><br><br>
                <center><a href="/datasell"><button type="button" class="btn btn-primary">Login with Facebook</button></a></center><br><br>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>

    

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>