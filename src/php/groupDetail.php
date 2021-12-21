<?php
try{
  require_once("./connectAccount.php");

  //查照片
    $sql = "select  gp.gpt_pt from igroup g JOIN gro_pt gp ON  g.gro_id = gp.gro_id  where g.gro_id = 9487001;"; 
    $groupPics = $pdo->query($sql);

}catch(PDOException $e){
    echo $e->getMessage();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/groupDetail.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./js/owl.carousel.min.js" async></script>


    <title>印度料理&水煙</title>
</head>

<body>
    @@include('./layout/login.html')
    @@include('./layout/header.html')
    <div class="container">
        <div class="slider">
            <div class="owl-carousel owl-theme">
                <?php
                while($picRows = $groupPics->fetch(PDO::FETCH_ASSOC)){
                    
                }
                ?>
    
                <div class="item">
                    <img src="<?=$picRows['gpt_pt']?>">
                </div>
            </div>
        </div>
    </div>
    <script src="js/groupDetail.js" async></script>

    <!-- content -->
    <div class="container main">
        <article>
            <div class="desc">
                <div class="title">
                    <h2>印度料理&水煙</h2>
                </div>
                <div class="content">
                    <p>
                        我和閨蜜想一起吃個晚餐<br>
                        喝點小酒+抽水煙<br>
                        <br>
                        有沒有人剛好有空可以參加
                    </p>
                </div>
            </div>
            <div class="plan">
                <div class="title">
                    <h2>行程資訊</h2>
                </div>
                <ul class="timeline">
                    <li class="day">Day 1</li>
                    <li class=" item">
                        <div class="node">
                            <span>20:00</span>
                        </div>
                        <p>你好嗎餐酒館</p>
                    </li>

                    <li class="item">
                        <div class="node">
                            <span>22:30</span>
                        </div>
                        <p>回家</p>
                    </li>
                </ul>
            </div>
            <hr>
            <section class="sub-info">
                <div class="block">
                    <img src="./images/icon/loc.png" alt="">
                    <span>台北</span>
                </div>
                <div class="block">
                    <img src="./images/icon/tag.png" alt="">
                    <span>美食</span>
                </div>
                <div class="block">
                    <img src="./images/icon/group.png" alt="">
                    <span>4人成團</span>
                </div>
                <div class="block">
                    <img src="./images/icon/money.png" alt="">
                    <span>各付各的</span>
                </div>
            </section>
            <hr>
            <!-- 留言區 -->
            <section class="comment">
                <h2>留言區</h2>
                <ul class="wrap">
                    <li class="wrap-item">
                        <div class="user">
                            <div class="pic smCircle">
                                <img class="circle" src="https://picsum.photos/50/50/?random=1">
                            </div>
                            <span id="userName">劉炎鵟</span>
                        </div>
                        <p>這地方好吃嗎</p>
                    </li>

                </ul>

                <div class="leave-comment">
                    <form action="">
                        <textarea placeholder="請輸入留言" name="" id="" cols="30" rows="3"></textarea>
                        <div class="btn-pos">
                            <button class=" btnBlue">送出</button>
                        </div>
                    </form>
                </div>
            </section>
        </article>

        <!-- 側邊攔 -->
        <aside>
            <div class="info">
                <div class="info-wrap">
                    <div class="header">
                        <h3>印度料理&水煙</h3>
                        <button id="info-toggle">
                            <img src="./images/icon/down.png" alt="收起資訊">
                        </button>
                    </div>
                    <div class="main-info">
                        <div class="info-item">
                            <div class="pic">
                                <img src="./images/icon/loc.png">
                            </div>
                            <p>
                                你好嗎餐酒館
                                <small>台北市松山區南京東路三段303巷8弄11號</small>
                            </p>
                        </div>

                        <div class="info-item">
                            <div class="pic">
                                <img src="./images/icon/date.png">
                            </div>
                            <p>
                                11/22 20:00 星期五
                                <small>(最後審核11/22 20:00 星期五)</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <p class="registered">0位已報名</p> -->
                <div class='sign-up'>
                    <div class="pic">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>
                    <button class='btnBlue'>報名</button>
                </div>
            </div>
        </aside>
    </div>

    <!-- 類似活動 -->
    <div class="container">
        <section>
            <h2>類似活動</h2>
            <div class="similar">
                <div class="card">
                    <div class="iSave">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>

                    <div class="pic">
                        <a href="groupDetail.html">
                            <img src="https://picsum.photos/400/300/?random=1">
                        </a>
                    </div>
                    <!-- 在外面多用一層 party_text 包 -->
                    <div class="party_text">
                        <div class="main">
                            <h3> <a href="groupDetail.html">印度料理&水菸印度料理&水印度料理&水菸印度料理&水</a></h3>
                            <p>你好嗎餐酒館</p>
                            <time>12-08(五) 19:00</time>
                        </div>
                        <div class="sub">
                            <div class="author">
                                <div class="pic smCircle">
                                    <img class="circle" src="https://picsum.photos/50/50/?random=1">
                                </div>
                                <span>林小妹</span>
                            </div>
                            <div class="hot">
                                <div class="pic">
                                    <img src="./images/icon/fire.png">
                                </div>
                                <span>12345</span>
                            </div>
                        </div>
                        <!-- 新增 see_more  -->
                        <div class="see_more">
                            <a href="groupDetail.html">
                                <button class="btnYellow">詳細資訊</button>
                            </a>
                            <button class="btnBlue">立即報名</button>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="card">
                    <div class="iSave">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>

                    <div class="pic">
                        <a href="groupDetail.html">
                            <img src="https://picsum.photos/400/300/?random=1">
                        </a>
                    </div>
                    <!-- 在外面多用一層 party_text 包 -->
                    <div class="party_text">
                        <div class="main">
                            <h3> <a href="groupDetail.html">印度料理&水菸印度料理&水印度料理&水菸印度料理&水</a></h3>
                            <p>你好嗎餐酒館</p>
                            <time>12-08(五) 19:00</time>
                        </div>
                        <div class="sub">
                            <div class="author">
                                <div class="pic smCircle">
                                    <img class="circle" src="https://picsum.photos/50/50/?random=1">
                                </div>
                                <span>林小妹</span>
                            </div>
                            <div class="hot">
                                <div class="pic">
                                    <img src="./images/icon/fire.png">
                                </div>
                                <span>12345</span>
                            </div>
                        </div>
                        <!-- 新增 see_more  -->
                        <div class="see_more">
                            <a href="groupDetail.html">
                                <button class="btnYellow">詳細資訊</button>
                            </a>
                            <button class="btnBlue">立即報名</button>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="card">
                    <div class="iSave">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>

                    <div class="pic">
                        <a href="groupDetail.html">
                            <img src="https://picsum.photos/400/300/?random=1">
                        </a>
                    </div>
                    <!-- 在外面多用一層 party_text 包 -->
                    <div class="party_text">
                        <div class="main">
                            <h3> <a href="groupDetail.html">印度料理&水菸印度料理&水印度料理&水菸印度料理&水</a></h3>
                            <p>你好嗎餐酒館</p>
                            <time>12-08(五) 19:00</time>
                        </div>
                        <div class="sub">
                            <div class="author">
                                <div class="pic smCircle">
                                    <img class="circle" src="https://picsum.photos/50/50/?random=1">
                                </div>
                                <span>林小妹</span>
                            </div>
                            <div class="hot">
                                <div class="pic">
                                    <img src="./images/icon/fire.png">
                                </div>
                                <span>12345</span>
                            </div>
                        </div>
                        <!-- 新增 see_more  -->
                        <div class="see_more">
                            <a href="groupDetail.html">
                                <button class="btnYellow">詳細資訊</button>
                            </a>
                            <button class="btnBlue">立即報名</button>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="card">
                    <div class="iSave">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>

                    <div class="pic">
                        <a href="groupDetail.html">
                            <img src="https://picsum.photos/400/300/?random=1">
                        </a>
                    </div>
                    <!-- 在外面多用一層 party_text 包 -->
                    <div class="party_text">
                        <div class="main">
                            <h3> <a href="groupDetail.html">印度料理&水菸印度料理&水印度料理&水菸印度料理&水</a></h3>
                            <p>你好嗎餐酒館</p>
                            <time>12-08(五) 19:00</time>
                        </div>
                        <div class="sub">
                            <div class="author">
                                <div class="pic smCircle">
                                    <img class="circle" src="https://picsum.photos/50/50/?random=1">
                                </div>
                                <span>林小妹</span>
                            </div>
                            <div class="hot">
                                <div class="pic">
                                    <img src="./images/icon/fire.png">
                                </div>
                                <span>12345</span>
                            </div>
                        </div>
                        <!-- 新增 see_more  -->
                        <div class="see_more">
                            <a href="groupDetail.html">
                                <button class="btnYellow">詳細資訊</button>
                            </a>
                            <button class="btnBlue">立即報名</button>
                        </div>
                        <!--  -->
                    </div>
                </div>

            </div>
        </section>
        <section class="similar-activitis">
            <h2>相同地點</h2>
            <div class="same-loc">
                <div class="card">
                    <div class="iSave">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>

                    <div class="pic">
                        <a href="groupDetail.html">
                            <img src="https://picsum.photos/400/300/?random=1">
                        </a>
                    </div>
                    <!-- 在外面多用一層 party_text 包 -->
                    <div class="party_text">
                        <div class="main">
                            <h3> <a href="groupDetail.html">印度料理&水菸印度料理&水印度料理&水菸印度料理&水</a></h3>
                            <p>你好嗎餐酒館</p>
                            <time>12-08(五) 19:00</time>
                        </div>
                        <div class="sub">
                            <div class="author">
                                <div class="pic smCircle">
                                    <img class="circle" src="https://picsum.photos/50/50/?random=1">
                                </div>
                                <span>林小妹</span>
                            </div>
                            <div class="hot">
                                <div class="pic">
                                    <img src="./images/icon/fire.png">
                                </div>
                                <span>12345</span>
                            </div>
                        </div>
                        <!-- 新增 see_more  -->
                        <div class="see_more">
                            <a href="groupDetail.html">
                                <button class="btnYellow">詳細資訊</button>
                            </a>
                            <button class="btnBlue">立即報名</button>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="card">
                    <div class="iSave">
                        <img id="saveActivity" src="./images/icon/unsave.png" title="收藏活動" alt="">
                    </div>

                    <div class="pic">
                        <a href="groupDetail.html">
                            <img src="https://picsum.photos/400/300/?random=1">
                        </a>
                    </div>
                    <!-- 在外面多用一層 party_text 包 -->
                    <div class="party_text">
                        <div class="main">
                            <h3> <a href="groupDetail.html">印度料理&水菸印度料理&水印度料理&水菸印度料理&水</a></h3>
                            <p>你好嗎餐酒館</p>
                            <time>12-08(五) 19:00</time>
                        </div>
                        <div class="sub">
                            <div class="author">
                                <div class="pic smCircle">
                                    <img class="circle" src="https://picsum.photos/50/50/?random=1">
                                </div>
                                <span>林小妹</span>
                            </div>
                            <div class="hot">
                                <div class="pic">
                                    <img src="./images/icon/fire.png">
                                </div>
                                <span>12345</span>
                            </div>
                        </div>
                        <!-- 新增 see_more  -->
                        <div class="see_more">
                            <a href="groupDetail.html">
                                <button class="btnYellow">詳細資訊</button>
                            </a>
                            <button class="btnBlue">立即報名</button>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    @@include('./layout/footer.html')
    <script src="./js/loginLightbox.js"></script>
</body>

</html>