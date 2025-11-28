<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #f5f7fa;
    }

    /* Styling NAV (tombol Home, Login, Register) */
    nav a, 
    .nav a,
    header a, 
    .header a {
        text-decoration: none;
        padding: 10px 15px;
        margin: 0 5px;

        /* Warna tombol */
        color: white;
        background: #1e90ff; /* Biru elegan */
        border-radius: 6px;
        display: inline-block;
        transition: 0.2s;
    }

    /* Hover */
    nav a:hover,
    .nav a:hover,
    header a:hover,
    .header a:hover {
        background: #0b74d1; /* Biru lebih gelap */
    }

    /* Area header/footer umum */
    header, .header {
        background: #2c3e50;
        color: white;
        padding: 15px 20px;
        text-align: center;
        font-size: 1.2rem;
    }

    footer, .footer {
        background: #2c3e50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        font-size: 0.9rem;
        margin-top: 40px;
    }

    main {
        padding: 40px;
        text-align: center;
    }

    main p {
        font-size: 1.4rem;
        background: white;
        padding: 20px;
        border-radius: 8px;
        max-width: 500px;
        margin: 0 auto;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
</style>


</head>
<body>
    <?php include "Layout/header.html" ?>
    
    <main>
        <p> Halo selamat datang di website kami </p>
    </main>

    <?php include "Layout/footer.html" ?>
</body>
</html>