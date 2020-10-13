<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Web Prog II | Merancang Template Sederhana dengan CodeIgniter</title>
    <link rel="stylesheet" href="http://localhost/pustakabooking-5c-fariq/asset/css/stylebuku.css">
</head>
<body>
    <div id='wrapper'>
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Tempalate Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href='<?php echo base_url().'index.php/web' ?>'>Home</a></li>
                    <li><a href='<?php echo base_url().'index.php/web/about' ?>'>About</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class='clear'></div>
