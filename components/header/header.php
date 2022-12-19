<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="./assets/css/styles.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Attorly</title>
</head>
<body>

<div class="main-header border-bottom">
    <div class="container-wide">
        <div class="header-content d-flex align-items-center justify-content-between">
            <div class="logo-menu-area d-flex align-items-center">
                <div class="brand-logo">
                    <a href="http://localhost/attorly">
                        <img src="https://attorly-demo.pbminfotech.com/demo1/wp-content/uploads/sites/2/2022/11/logo.svg" alt="" class="brand-img">
                    </a>
                </div>
                <div class="nav-menu">
                    <ul class="nav nav-menu">
                        <?php foreach ($menu->nav as $key=>$value):?>
                            <li class="nav-link subnav">
                                <a href="#" class="text-dark text-decoration-none"><?php echo $value->title;?></a>
                                <div class="subnav-content">
                                    <?php foreach($value->dropdown as $item):?>
                                        <a href="#" class="text-dark text-decoration-none"><?php echo $item?></a>
                                        <?php endforeach;?>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


    
