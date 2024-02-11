<!DOCTYPE html>
<html>

<head>
    <title>Image Gallery</title>
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .image-row {
            display: flex;
            justify-content: space-around;
            width: 80%;
            margin: 20px auto;
        }

        .image-row img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .image-row img:hover {
            transform: scale(1.1);
        }

        a {
            text-decoration: none;
            color: #ecf0f1;
            text-align: center;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    $image_src = [
        'https://static.zerochan.net/Todoroki.Shouto.full.2924096.jpg',
        'https://static.zerochan.net/Todoroki.Shouto.full.2916254.jpg',
        'https://static.zerochan.net/Takami.Keigo.full.3082965.jpg',
        'https://static.zerochan.net/Cross-Over.full.3202794.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.2417892.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051216.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051215.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051214.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051209.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051207.jpg',
        'https://static.zerochan.net/Todoroki.Shouto.full.2593587.jpg',
        'https://static.zerochan.net/Toga.Himiko.full.3311369.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051122.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051118.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051116.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051083.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051082.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051080.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051076.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051059.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051038.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051033.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.2857559.jpg',
        'https://static.zerochan.net/Boku.no.Hero.Academia.full.4051038.jpg'
    ];
    $image_rows = array_chunk($image_src, 4);

    foreach ($image_rows as $image_row):
    ?>
        <div class="image-row">
            <?php foreach ($image_row as $image): ?>
                <a href="<?php echo $image; ?>" target="_blank">
                    <img src="<?php echo $image; ?>" alt="Anime Image">
                </a>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</body>

</html>
