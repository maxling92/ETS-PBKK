<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IANM NET</title>
    <link rel="stylesheet" href="_Layout.css" />
    <link rel="stylesheet" href="site.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="border-bottom box-shadow fixed-top bg-light cont-head">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light">
                <div class="container">
                    <div >
                        <a ><img class="nav-logo" src="img/IANMNet.svg"/></a>
                    </div>
                    <div class="nav-right">
                        <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                            <ul class="navbar-nav flex-grow-1">
                                <li class="nav-item px-2">
                                    <a class="nav-link text-dark" href="/">Beranda</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link text-dark" href="profil">Profil</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link text-dark" href="perusahaan">Perusahaan</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link text-dark" href="layanan">Layanan</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link text-dark" href="team">Team</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link text-dark" href="qna">QnA</a>
                                </li>
                            </ul>
                            <div><a class="btn-link nav-link text-white" href="login" style="font-weight: bold; font-size: 14px">Login</a></div>
                        </div>
                    </div>
                </div>
            </nav>
        </div> 
    </header>
    <main role="main" class="">
        @yield('container')
    </main>
    
    <footer>
        <div class="btm-wrapper border-top">
            <div class="container">
                <div class="btm">
                    <div class="btm-list">
                        <div class="btm-item">
                            <div class="contact">
                                <h6 class="btm-head">Kontak kami</h6>
                                    <p class="pfoot"><i class="fa-solid fa-map-location"></i> Keputih Perintis IV no 5B, Surabaya</p>  
                                    <p class="pfoot"><i class="fa-solid fa-square-phone"></i> +62953-9878-0271</p>
                                    <p class="pfoot"><i class="fa-solid fa-envelope"></i> ianm@gmail.com</p>
                            </div>                 
                        </div>
                        <div class="btm-item">
                            <div class="menu">
                                
                                <h6 class="btm-head">Menu</h6>
                                <ul>
                                    <li>
                                        Profile
                                    </li>
                                    <li>
                                        Perusahaan
                                    </li>
                                    <li>
                                        Layanan
                                    </li>
                                    <li>
                                        Team
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="btm-item">
                            <div class="sosmed">
                                <h6 class="btm-head">Media sosial</h6>
                                <div class="sosmed-list">
                                    <div class="sosmed-icon">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </div class="sosmed-icon">
                                    <div class="sosmed-icon">
                                        <i class="fa-brands fa-instagram-square"></i>
                                    </div>
                                    <div class="sosmed-icon">
                                        <i class="fa-brands fa-twitter-square"></i>
                                    </div>
                                    <div class="sosmed-icon">
                                        <i class="fa-brands fa-facebook-square"></i>
                                    </div>
        
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        
        </div>
        <div class="border-top footer text-muted container">
            <p>Copyright &copy; IANM Indonesia 2018 - 2022</p>
            <a href="/q1"><img class="footer-logo" src="img/IANMNet.svg"/></a>
            
               
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>