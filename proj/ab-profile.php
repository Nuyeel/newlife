<?php require __DIR__ . "/parts/connect_db.php" ?>

<?php
$pageName = 'ab-profile';
$title = '會員中心 - 來生投放所';



if ($_SESSION['member']['account'] == 'Admin') {
    header('location:ab-list.php');
    // exit;
} else if (!$_SESSION['member']['account']) {
    header('location:ab-login.php');
    // exit;
}

$sid = isset($_SESSION['member']['sid']) ? intval($_SESSION['member']['sid']) : 0;
$row = $pdo->query("SELECT * FROM member WHERE `sid`='$sid'")->fetch();

// $sql = "SELECT * FROM `member` WHERE `member`.`account` = '$account'";
// $row = $pdo->query($sql)->fetch();
// echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
// exit;

?>

<?php include __DIR__ . "/parts/html-head.php" ?>
<?php include __DIR__ . "/parts/navbar.php" ?>
<style>
    body {
        background-color: #69d0ff;
        background-image: linear-gradient(0deg, #69d0ff 0%, #ffa4e9 100%);
        background-position: 100%;
        background-repeat: no-repeat;
    }

    .format {
        font-size: 18px;
        font-weight: 600;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .format2 {
        font-size: 18px;
        font-weight: 600;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        color: #ebd367;
    }

    .pb-4 {
        background-color: rgba(255, 255, 255, 0.6);
        background-position: 100%;
        background-repeat: no-repeat;
    }

    .btn-primary {
        background-color: rgb(38, 106, 170);
    }

    .btn-primary:hover {
        background-color: #fff;
        color: rgb(38, 106, 170);
    }

    .btn-outline-primary {
        border-color: rgb(38, 106, 170);
        ;
        color: rgb(38, 106, 170);
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: rgb(38, 106, 170);
    }

    .row {
        margin-left: 15%;
        /* margin-right: 50%; */
    }

    .icon {
        text-decoration: none;
        font-size: 2.6rem;
        transition: .3s;
        color: rgb(38, 106, 170);
        color: rgb(38, 106, 170);
    }

    .icon:hover {
        color: #ebd367;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-2 d-flex">
                <div class="card" style="width: 20rem; font-size: 1.2rem;">
                    <ul class="list-group list-group-flush format">
                        <li class="list-group-item" style="background-color: #f0f0f0;"><a href="ab-profile.php" style="text-decoration: none; color: rgb(38, 106, 170);">會員中心總覽 </a></li>
                        <li class="list-group-item"><a href="ab-edit-profile.php" style="text-decoration: none; color: #212529">會員資料</a></li>
                        <li class="list-group-item"><a href="ab-place.php"style="text-decoration: none; color: #212529">訂單總覽</a></li>
                        <li class="list-group-item"><a href="ab-event.php" style="text-decoration: none; color: #212529">活動紀錄</a></li>
                        <li class="list-group-item"><a href="ab-showcase.php" style="text-decoration: none; color: #212529">衣櫥間</a></li>
                        <!--
                        <li class="list-group-item">常見問題</li>
                        <li class="list-group-item">我有問題</li> -->
                    </ul>
                </div>
                <div class="cards_out">
                    <div class="cards">
                        <div class="card" style="width: 100%; height: 50%">
                            <div class="card-body d-flex align-items-center">
                                <div class="card_pro"></div>
                                <div class="col-md-9 mb-md-0 p-md-4">
                                    <h5 class="card-title format">
                                        歡迎回來，<?php if (!empty($row['name'])) {
                                            echo htmlentities($row['name']);
                                        } else {
                                            echo htmlentities($row['account']);
                                        } ?>
                                    </h5>
                                    <p class="card-text" style="font-size: 1rem; color: #707070;">請點擊下方按鈕瀏覽您的資料</p>
                                </div>
                                <div class="col-md-9 mb-md-0 p-md-4 d-flex flex-row">
                                    <i class="fa-solid fa-user-check card-img-top" style="font-size: 2.8rem; color: rgb(38, 106, 170);"></i>
                                </div>
                            </div>
                            <!-- <div class="revise_btn"> -->
                            <a href="ab-edit-profile.php" class="btn btn-outline-primary stretched-link format">修改會員資料</a>
                            <!-- </div> -->
                        </div>
                        <div class="cards-2 d-flex justify-content-evenly align-items-center">
                            <div class="card d-flex justify-content-evenly align-items-center" style="width: 18rem;">
                                <div class="col-md-9 mb-md-0 p-md-4 d-flex flex-row justify-content-center">
                                    <a href="place.php"><i class="fa-solid fa-earth-asia icon"></i></a>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title format" style="text-align: center;">立即預訂下一份來生</h5>
                                    <p class="card-text" style="font-size: 1rem; color: #707070;">點擊查看當前熱門轉生地點 ...</p>
                                    <a href="place.php" class="btn btn-primary format">開始預約</a>
                                </div>
                            </div>
                            <div class="card d-flex justify-content-evenly align-items-center" style="width: 18rem;">
                                <div class="col-md-9 mb-md-0 p-md-4 d-flex flex-row justify-content-center">
                                    <a href="avatar.php"><i class="fa-solid fa-wand-magic-sparkles icon"></i></a>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title format" style="text-align: center;">打造您的下一份來生</h5>
                                    </h5>
                                    <p class="card-text" style="font-size: 1rem; color: #707070;">即刻為您的來生打造全新樣貌 ...</p>
                                    <a href="avatar.php" class="btn btn-primary format">開始創建</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($_SESSION['member']['account'])) {

                        $sid = $_SESSION['member']['sid'];
                        $t_sql = "SELECT `test_score` FROM `good_deed_test_record` WHERE `sid`= $sid";
                        $t_row = $pdo->query($t_sql)->fetch();
                        // $score =  $t_row['test_score'];

                        $account =  $_SESSION['member']['account'];
                        $name = $_SESSION['member']['name'];

                    ?>

                        <?php
                        if (!empty($t_row['test_score'])) {

                        ?>
                            <!-- 這邊我改用$t_row['test_score']讓沒分數的帳戶在該欄位留空，避開php error code顯示 -->

                            <!-- <div class="card" style="width: 18rem;"> -->
                            <div class="card">

                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h5 class="card-title format" style="text-align: center;">
                                        Hi <?= $_SESSION['member']['name'] ?> ！
                                        您目前的陰德值為：<?= $t_row['test_score'] ?? 0 ?>
                                    </h5>
                                    <p class="card-text" style="font-size: 1rem; color: #707070; text-align: center;">
                                        陰德值太少嗎？
                                        透過下列方式增加您的陰德值！
                                    </p>
                                    <div class="btn-2 d-flex justify-content-around">
                                        <a href="#" class="btn btn-primary format">
                                            響應慈善捐款
                                        </a>
                                        <a href="/mfee26-D-php/proj/xuan-event-manage/npo-list.php" class="btn btn-primary format">
                                            <!-- 這邊可以放容瑄的連結 -->

                                            參與慈善活動
                                        </a>
                                        <a href="./yun_gamespage.php" class="btn btn-primary format">
                                            遊玩慈善遊戲
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php } else { ?>
                            <!-- 沒有分數的話就做測驗 -->

                            <!-- <div class="card" style="width: 18rem;"> -->
                            <div class="card">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h5 class="card-title format" style="text-align:center;">
                                        Hi <?= $_SESSION['member']['name'] ? $_SESSION['member']['name'] : "" ?> ！
                                    </h5>
                                    <p class="card-text" style="font-size: 1rem; color: #707070; text-align:center;">
                                        想知道您目前擁有多少陰德值嗎？
                                        現在就測測看吧！
                                    </p>
                                    <a href="./test_page.php" class="btn btn-primary format d-flex justify-content-around" style="text-align:center;">
                                        陰德值測驗 Go！
                                    </a>
                                </div>
                            </div>

                    <?php
                        }
                    } else {

                        header('location:ab-login.php');
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include __DIR__ . '/parts/scripts.php' ?>

<script>
</script>


<?php include __DIR__ . "./parts/html-foot.php" ?>