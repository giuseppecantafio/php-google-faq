<?php 

include 'dati.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Google FAQ</title>
</head>
<body>
<header>
    <div class="top d-flex justify-content-between px-3">
        <div class="left d-flex align-items-end">
            <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo" class="logo px-2">
            <a href="#" class="text-logo">Privacy e Termini</a>
        </div>
        <div class="right d-flex align-items-end px-2">
            <a href="#" class="text-logo"><i class="fa-solid fa-apple-whole px-3"></i></a>
            <a href="#"><img src="https://thumbs.dreamstime.com/b/rainbow-colored-hand-fist-raised-up-gay-pride-lgbt-conc-rainbow-colored-hand-fist-raised-up-gay-pride-lgbt-concept-125615221.jpg" alt="User image" class="rounded-circle user-img"></a>
        </div>

    </div>
    <div class="bottom px-3">
        <ul class="d-flex align-items-end px-2">
        <?php foreach ($nav as $v){ ?>
            <li class="text-center <?php if ($v['active']) echo 'active'; ?>"><?php echo $v['nome'];?></li>
        <?php }; ?>
        </ul>
    </div>
</header>
<main>
    <div class="container text-justify">
        <?php foreach($faqdb as $faq){ ?>
            <div class="pt-2"><?php echo $faq['domanda']; ?></div>
            <div class="pt-4"><?php echo $faq['risposta']; ?></div>
        <?php }; ?>
    </div>
</main>
</body>
</html>