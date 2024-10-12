<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="asset/style2.css">
    <link rel="stylesheet" href="asset/regStyle2.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title">Bincom Project</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="main">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">Delta State</span>
                    </a>
                </li>

                <li>
                   
                    <a href="javascript::void(0)">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">Enugu State</span>
                    </a>
                </li>

                <li>
                   
                    <a href="javascript::void(0)">

                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">Lagos State</span>
                    </a>
                </li>

                <li>
                    <a href="javascript::void(0)">
                         <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">FCT Abuja</span>
                    </a>
                </li>

                <li>
                    <a href="javascript::void(0)">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">Calabar State</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card" onclick="sec1Btn()">
                <div>
                    <div class="cardName" onclick="sec1Btn()">Polling Unit Display</div>
                </div>

                    
                </div>

                <div class="card" onclick="sec2Btn()">
                    <div>
                        <div class="cardName" onclick="sec2Btn()">View LGA Results</div>
                    </div>

                    
                </div>

              <div class="card" onclick="sec3Btn()">
                <div>
                    <div class="cardName" onclick="sec3Btn()">Create_Extra_Unit</div>
                </div>

                    
                </div>

            <div class="card" onclick="sec4Btn()">
                <div>
                  <div class="cardName" onclick="sec4Btn()">Extras</div>
                </div>

            </div>     
            </div>   
        

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Bincom Election Management Tool</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                 {{-- <img src={{'assets/imgs/adminImg1.jpg'}}> --}}
                 <section id="sec1">
                    @yield("content1")
                 </section>
                
                </div>


                <section id="sec2">
                    @yield("content2")
                 </section>
                
                </div>


                <section id="sec3">
                    @yield("content3")
                 </section>
                
                </div>


                

                <section id="sec4">
                    @yield("content4")
                 </section>
                
                </div>

                <!-- ================= New Customers ================ -->
                
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="asset/newjs.js"></script>


    

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
