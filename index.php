<?php
    require 'functions.php';
    $menu=query("SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b0f29e9bfe.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="img/menantea.png" class="logo"></a>
            
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="admin.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>It's not just Tea <br>It's <span>Menantea</span></h2>
                <p>
                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere voluptatem incidunt quia aperiam vitae excepturi tempora soluta consequatur, dicta deserunt, necessitatibus ipsum quisquam quo id aliquam sint, labore numquam. Libero architecto molestiae facere vel consequuntur laboriosam ducimus quas alias officiis doloremque, omnis quisquam eveniet eum modi labore ma -->
                    “Menantea” is  a modern fusion tea brand in Indonesia, was founded by 5 people with their each expertise on FnB industry and digital marketing. 3 of which is Hendy Setiono (founder of BabaRafi Enterprise), Sylvia Surya (founder of Kopisoe), and Bisma Adi Putra (F&B Consultant Masakin Group), and the remaining 2 is manager-talent brothers: Jehian Panangian Sijabat and Jerome Polin Sijabat. With its various tea menus, like modern fruit tea, cheese cream tea, and more, Menantea wants to revolutionize how Indonesians enjoy tea beverages.
                    
                </p>
                <a href="#">Learn More</a>
            </div>
            <div class="imgBox">
                <img src="img/menantea1.png" class="menantea">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="img/menantea1.png" onclick="imgSlider('img/menantea1.png')"></li>
            <li><img src="img/menantea2.png" onclick="imgSlider('img/menantea2.png')"></li>
            <li><img src="img/menantea3.png" onclick="imgSlider('img/menantea3.png')"></li>
            <li><img src="img/menantea4.png" onclick="imgSlider('img/menantea4.png')"></li>
        </ul>
    </section>

    <div class="menu" id="menu">
        <div class="section-title">
            <h2>Our Menu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, eum!</p>
        </div>
        
        <div class="menus">
            <?php foreach ($menu as $row):?>
                <div class="single-menu">
                    <img src="img/<?php echo $row["gambar"]; ?>" alt="">
                    <div class="menu-content">
                        <h5><?= $row["nama"]; ?></h5>
                        <p><?= $row["deskripsi"]; ?></p>
                        <h4><span>Rp. <?= $row["harga"]; ?></span></h4>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    
    <footer>
        <div class="copyright">
            &copy; 2022. <b>HAW.</b> All Rights Reserved.
        </div>
    </footer>

    <script type="text/javascript">
        function imgSlider(anything) {
            document.querySelector('.menantea').src = anything;
        }
    </script>
    
</body>
</html>