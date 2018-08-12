<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    </style>

</head>
<body>
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
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">เข้าสู่ระบบ</button> &nbsp;
            <a class="nav-link disabled" href="#">หรือ</a>&nbsp;
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">สมัครสมาชิก</button>
        </form>
        
    </div>
    </nav>



    <div class="container">
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
              
            </div>
            
            {{-- ค้นหา --}}
            <div class="col-sm" style="margin-left:120px;">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาสินค้า" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
                </form>
            </div>

        </div>
        <br/>
        <center><h1 style="color:#018f99; font-family: 'Kanit', sans-serif;">ประเภทสินค้า</h1></center>
        <hr>
        <br/>
        <div class="row">
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/phone.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">มือถือ แท็บเล็ต</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    
                  <a href="/listproduct">
                  <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/sss.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">คอมพิวเตอร์</h6>
                    </button>
                  </a>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/ddd.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">เครื่องดนตรี</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/sport.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">กีฬา</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/c.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">จักรยาน</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
        </div>
        <br/>
        <div class="row">
        <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
        </div>
        <br/>
        <div class="row">
        <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h5>คอมพิวเตอร์</h5>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/as.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>คอมพิวเตอร์</h6>
                    </button>
                </center>
            </div>
        </div>
        <br/>
        
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>