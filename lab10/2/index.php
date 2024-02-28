<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Lab10 No.1 ✨</title>
</head>
<body>
    <?php include 'db.php'; ?>
    <?php
        if ($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET['id'])) :
            header('Refresh: 0; url=./?id=1');
        else:
            $id = $_GET['id'];
            $res = $db->query("SELECT * FROM `questions` WHERE QID = $id;");
            $row = $res->fetchArray(SQLITE3_ASSOC);
    ?>
    <?php if ($row) : ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?php echo $id. '. ' . $row['Stem']; ?></h3>
            </div>
            <form class="card-body">
                <div class="form-check ">
                    <input type="radio" id="choice1" name="choice" value="A" class="form-check-input">
                    <label for="choice1" class="form-check-label "><?php echo $row['Alt_A']; ?></label>
                </div>
                <div class="form-check ">
                    <input type="radio" id="choice2" name="choice" value="B" class="form-check-input">
                    <label for="choice2" class="form-check-label "><?php echo $row['Alt_B']; ?></label>
                </div>
                <div class="form-check ">
                    <input type="radio" id="choice3" name="choice" value="C" class="form-check-input">
                    <label for="choice3" class="form-check-label "><?php echo $row['Alt_C']; ?></label>
                </div>
                <div class="form-check ">
                    <input type="radio" id="choice4" name="choice" value="D" class="form-check-input">
                    <label for="choice4" class="form-check-label "><?php echo $row['Alt_D']; ?></label>
                </div>
            </form>
            <div class="btn-group">
                <a href="./?id=<?php echo $id-1; ?>"><Button class="btn-secondary">Previous</Button></a>
                <?php if ($id < 10) : ?>
                <button onclick="<?php echo 'nextQuestion('. $id . ')'; ?>" class="btn-primary">Next</button>
                <?php else : ?>
                <Button onclick="submit()" class="btn-primary">Submit</Button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php else : ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Not Found</h1>
            </div>
            <div class="card-body">
                <p class="card-text">Question not found.</p>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <script src="./script.js"></script>
    <script>
        const ans = JSON.parse(localStorage.getItem('answers'))
        if (ans) {
            const choice = ans[<?php echo $id-1; ?>]
            document.querySelector(`input[value="${choice}"]`).checked = true
        }
    </script>
</body>
</html>
