<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7 No.4 ✨</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $image_src = [
        'https://i.pinimg.com/564x/1a/84/35/1a8435b262f70dc441a52bf15a9c620d.jpg',
        'https://i.pinimg.com/564x/84/ae/a8/84aea8fdc3a37c1ca15a417ad2af2084.jpg',
        'https://i.pinimg.com/564x/32/82/8a/32828a1554ad31ff44c5d4bd948cfdd7.jpg',
        'https://i.pinimg.com/564x/f4/be/c3/f4bec35e7810ecb6ceedffd7386d191f.jpg',
        'https://i.pinimg.com/564x/10/c9/c0/10c9c02224ae9c08ba781bae2a856675.jpg',
        'https://i.pinimg.com/564x/ed/f5/b2/edf5b2ec2be1e629d94faf11f2723dad.jpg',
        'https://i.pinimg.com/564x/9d/ab/bd/9dabbd19f363aa4224759d63c96fa464.jpg',
        'https://i.pinimg.com/736x/42/83/41/428341ff7d1d7a097ba51f21fb1612d3.jpg',
        'https://i.pinimg.com/736x/1f/3b/1c/1f3b1c241cb3bc80a9496b53ebf12092.jpg',
        'https://i.pinimg.com/564x/4b/d9/eb/4bd9eb62307cc92b30e905e0bcd67097.jpg',
        'https://i.pinimg.com/564x/48/cb/ab/48cbab35fdf32adbf7cdd1fc0ad12b79.jpg',
        'https://i.pinimg.com/564x/92/a5/d3/92a5d3fe0b2cd5c68ba6697c8f0e544f.jpg',
        'https://i.pinimg.com/564x/0e/82/df/0e82dfb7563fd0b2fe2f3c927f1dfe0c.jpg',
        'https://i.pinimg.com/736x/bf/9e/88/bf9e88731306c766750286a7b6bf6668.jpg',
        'https://i.pinimg.com/564x/07/dc/e6/07dce6e189a2775320a8cb5622b01bd2.jpg',
        'https://i.pinimg.com/564x/c5/66/66/c56666e631c86b3e50000543afd2a101.jpg',
        'https://i.pinimg.com/564x/96/56/07/96560718fb1d03db5090988bdb13da68.jpg',
        'https://i.pinimg.com/564x/da/45/ba/da45ba5346b5d7f63dcdb22dbbc57a68.jpg',
        'https://i.pinimg.com/564x/da/45/ba/da45ba5346b5d7f63dcdb22dbbc57a68.jpg',
        'https://i.pinimg.com/564x/fa/98/a1/fa98a1e33256c9ac80a4ab6c665d9811.jpg',
        'https://i.pinimg.com/564x/ea/2a/fd/ea2afd921d7c3595a8ad7d6d31188e55.jpg',
        'https://i.pinimg.com/564x/1a/25/54/1a255439ca1010f79ac09cb445e0c13b.jpg',
        'https://i.pinimg.com/564x/9a/5c/90/9a5c909725ffcd1fe5b42088f57526c1.jpg',
        'https://i.pinimg.com/564x/dd/10/75/dd1075d628d3b12f205a1325ae8b298a.jpg'
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
