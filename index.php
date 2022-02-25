<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
</head>
<body>
    <div id="progressbar"></div>

    <!-- navbar - header -->

    <header>
        <div class="logo">
            <a href="index.html"><img src="./img/logo1.png" alt="logo"></a>
            <a href="#" class="header_logo">Tii</a>
        </div>
        <nav class="nav" id="nav-menu"> 
            <ion-icon name="close" class="header_close" id="close-menu"></ion-icon>
             <!-- facebook -->
           
            <!-- navbar -->
            <ul class="nav_list">
                <li class="nav_item"><a href="#about" class="nav_link">ទំព័រដេីម</a></li>
                <li class="nav_item"><a href="#" class="nav_link">ចង់ទិញស្រាបៀលឬក៏ទាក់ទង</a></li>
                <li class="nav_item"><a href="#" class="nav_link">លក់ស្រាបៀល</a></li>
                <li class="nav_item"><a href="#" class="nav_link">BN</a></li>
                <li class="nav_item"><a href="#" class="nav_link">kJ</a></li>
                <li class="nav_item"><a href="#content" class="nav_link">Content Us</a></li>
                <img src="./img/moon.png" id="icon">           
            </ul>
        </nav>
        <!-- menu-nabar --> 
        <ion-icon name="menu" class="header_toggle" id="toggle-menu"></ion-icon>
    </header>
    <div class="about" id="about"> 

    </div>

    <!-- contact form -->

    <div class="container" id="content">
        <form action="" method="post">
            <h3>Get Comments</h3>
            <input type="text" name="name" id="name" placeholder = "Your Name" required>
            <input type="email"name="email" id="email" placeholder="Email id" required>
            <input type="text" name="phone" id="phone" placeholder="Phone no." required>
            <textarea id="message" name="message" rows="4" placeholder="How can we help you?"></textarea>
            <button type="submit" name="post">Post Comments</button>
        </form>
    </div>




<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$text = $_POST["message"];
$post = $_POST["post"];


if($post) {
    $write = fopen("publie.txt", "a+");
    fwrite ($write, "<u><b> $name</b></u><br>$email<br>$phone<br>$message<br>");
    fclose ($write);

    $read = fopen ("publie.txt", "r+t");
    echo "All comments:<br>";
    while (!feof ($read)) {
    echo fread ($read, 1024);
}

fclose($read);

}



else {
    $read = fopen ("publie.txt", "r+t");
    echo "All comments:<br>";
    while (!feof ($read)) {
    echo fread ($read, 1024); 
}

fclose($read);

}

?>



    <!-- javascrpit -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
    
    <!-- javascrpit text -->

<script>
var icon2 = document.getElementById ("icon");
icon.onclick = function(){
   document.body.classList. toggle("dark-theme");
   if(document.body.classList.contains ("dark-theme")){
       icon.src = "img/sun.png";
   }else{
       icon.src = "img/moon.png";
   }
}              
</script>

<script>
$(window).scroll(function(){
    var scroll = $(window).scrollTop(),
    dh = $(document).height(),
    wh = $(window).height();
    scrollPercent = (scroll / (dh-wh)) * 100;
    $('#progressbar').css('height', scrollPercent + '%');
})    
</script>


<script>
const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('toggle-menu'),
    closeMenu = document.getElementById('close-menu')

toggleMenu.addEventListener('click',() => {
    navMenu.classList.toggle('show')
})

closeMenu.addEventListener('click',() => {
    navMenu.classList.remove('show')
})
</script>
</body>
</html>