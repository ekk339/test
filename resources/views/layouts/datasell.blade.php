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
    <a class="navbar-brand" href="/" style="font-family: 'Kanit', sans-serif;">
        <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
           ตลาดซื้อขาย-ออนไลน์  
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0 ">
               
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    test   test
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">ประกาศของฉัน</a>
                    <a class="dropdown-item" href="#">ดูและแก้ไขข้อมูลส่วนตัว</a>
                    <a class="dropdown-item" href="#">ออกจากระบบ</a>
                </div>
            </div>
        </form>
        
        
    </div>
    </nav>

    <div class="container">
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    รายละเอียดสินค้า
                </div>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                       <div style="margin: auto; width: 60%">
                            <form>
                                    <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">เลือกหมวด</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option>คอมพิวเตอร์</option>
                                                      <option>กีฬา</option>
                                                      <option>กระเป๋า</option>
                                                      <option>นาฬิกา</option>
                                                      <option>รองเท้า</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                              
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">หัวข้อสินค้าที่คุณต้องการลงขาย</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อสินค้า เช่น ไอโฟ 6 32GB">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                    </div>
                                   <div class="row">
                                       <div class="col-sm">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ระบุราคาที่เหมาะสม</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="ระบุราคาเต็มของสินค้า   ">
                                            </div>
                                       </div>
                                       <div class="col-sm"></div>
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputFile">เพิ่มรูปภาพ</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleTextarea">รายละเอียดสินค้า</label>
                                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">เบอร์โทรติดต่อ</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="เบอร์ดทรที่สามารถติดต่อได้">
                                    </div>
                                    <a href="/declare"><button type="button" class="btn btn-primary">บันทึก</button></a>
                                    
                            </form>
                       </div>
                </blockquote>
                </div>
            </div>
           
    </div>

    
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>