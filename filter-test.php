<?php
  require 'php-db-projekt7.php';
?>
<!DOCTYPE html>
<html lang="da" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Ølkassen.dk</title>
    <link href="./css/stylesheet.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/oelkassen-logo.png" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <section class="test">
      <div id="q1_hidden" class="test-wrapper">
        <img class="logo" src="images/logouflasker.png" alt="Ølkassens logo">
        <?php
          $sql="SELECT question FROM table_questions
          WHERE questionID = 1";
          $result=$conn->query($sql);
          while($row=$result->fetch_assoc()){
        ?>
        <h1 class="question-header"><?php echo $row['question'] ?></h1>
          <div class="button-form-wrapper">
            <a href="index.php" class="quiz-button quiz-button1 quiz-buttonx4">Tilbage</a>
            <div class="question-answers">
              <?php
                $sql="SELECT answer, img FROM table_test
                WHERE questionID = 1";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
              ?>
              <label class="product_check answers">
                <input type="radio" name="radio1" value="<?= $row['answer']; ?>" id="answer1">
                <div class="answer-border">
                  <img alt="Svarmulighed billede" src=" <?php echo $row['img']; ?> ">
                  <p><?= $row['answer'] ?></p>
                </div>
              </label>
            <?php } } ?>
            </div>
            <button id="q2" class="quiz-button quiz-button2 quiz-buttonx4" onclick="plusSpg(1)">Næste</button>
          </div>
          <?php
            $sql="SELECT img FROM table_questions
            WHERE questionID = 1";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
              echo '<img alt="Progress flasker" class="progress-bar" src="' . $row['img'] . '">';
            }
          ?>
        </div>

        <div id="q2_hidden" class="test-wrapper-hidden test-wrapper">
          <img class="logo" src="images/logouflasker.png" alt="Ølkassens logo">
          <?php
            $sql="SELECT question FROM table_questions
            WHERE questionID = 2";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
          ?>
          <h1 class="question-header"><?php echo $row['question'] ?></h1>
            <div class="button-form-wrapper">
              <button id="backQ1" class="quiz-button quiz-button1 quiz-buttonx4" onclick="plusSpg(-1)">Tilbage</button>
              <div class="question-answers">
                <?php
                  $sql="SELECT answer, img FROM table_test
                  WHERE questionID = 2";
                  $result=$conn->query($sql);
                  while($row=$result->fetch_assoc()){
                ?>
                <label class="product_check answers">
                  <input type="radio" name="radio2" value="<?= $row['answer']; ?>" id="answer2">
                  <div class="answer-border">
                    <img alt="Svarmulighed billede" src=" <?php echo $row['img']; ?> ">
                    <p><?= $row['answer'] ?></p>
                  </div>
                </label>
              <?php } } ?>
              </div>
              <button id="q3" class="quiz-button quiz-button2 quiz-buttonx4" onclick="plusSpg(1)">Næste</button>
            </div>
            <?php
              $sql="SELECT img FROM table_questions
              WHERE questionID = 2";
              $result=$conn->query($sql);
              while($row=$result->fetch_assoc()){
                echo '<img alt="Progress flasker" class="progress-bar" src="' . $row['img'] . '">';
              }
            ?>
          </div>

          <div id="q3_hidden" class="test-wrapper-hidden test-wrapper">
            <img class="logo" src="images/logouflasker.png" alt="Ølkassens logo">
            <?php
              $sql="SELECT question FROM table_questions
              WHERE questionID = 3";
              $result=$conn->query($sql);
              while($row=$result->fetch_assoc()){
            ?>
            <h1 class="question-header"><?php echo $row['question'] ?></h1>
            <div class="button-form-wrapper">
              <button id="backQ2" class="quiz-button quiz-button1 quiz-buttonx4" onclick="plusSpg(-1)">Tilbage</button>
              <div class="question-answers">
                <?php
                  $sql="SELECT answer, img FROM table_test
                  WHERE questionID = 3";
                  $result=$conn->query($sql);
                  while($row=$result->fetch_assoc()){
                ?>
                <label class="product_check answers">
                  <input type="radio" name="radio3" value="<?= $row['answer']; ?>" id="answer3">
                  <div class="answer-border">
                    <img alt="Svarmulighed billede" src=" <?php echo $row['img']; ?> ">
                    <p><?= $row['answer'] ?></p>
                  </div>
                </label>
              <?php } } ?>
              </div>
              <button id="q4" class="quiz-button quiz-button2 quiz-buttonx4" onclick="plusSpg(1)">Næste</button>
            </div>
            <?php
              $sql="SELECT img FROM table_questions
              WHERE questionID = 3";
              $result=$conn->query($sql);
              while($row=$result->fetch_assoc()){
                echo '<img alt="Progress flasker" class="progress-bar" src="' . $row['img'] . '">';
              }
            ?>
          </div>

          <div id="q4_hidden" class="test-wrapper-hidden test-wrapper">
            <img class="logo" src="images/logouflasker.png" alt="Ølkassens logo">
            <?php
              $sql="SELECT question FROM table_questions
              WHERE questionID = 4";
              $result=$conn->query($sql);
              while($row=$result->fetch_assoc()){
            ?>
            <h1 class="question-header"><?php echo $row['question'] ?></h1>
            <div class="button-form-wrapper">
              <button id="backQ3" class="quiz-button quiz-button1 quiz-buttonx4" onclick="plusSpg(-1)">Tilbage</button>
              <div class="question-answers">
                <?php
                  $sql="SELECT answer, img FROM table_test
                  WHERE questionID = 4";
                  $result=$conn->query($sql);
                  while($row=$result->fetch_assoc()){
                ?>
                <label class="product_check answers">
                  <input type="radio" name="radio4" value="<?= $row['answer']; ?>" id="answer4">
                  <div class="answer-border">
                    <img alt="Svarmulighed billede" src=" <?php echo $row['img']; ?> ">
                    <p><?= $row['answer'] ?></p>
                  </div>
                </label>
              <?php } } ?>
            </div>
            <button id="showResult" class="quiz-button quiz-button2 quiz-buttonx4">Afslut</button>
          </div>
          <?php
            $sql="SELECT img FROM table_questions
            WHERE questionID = 4";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
              echo '<img alt="Progress flasker" class="progress-bar" src="' . $row['img'] . '">';
            }
          ?>
        </div>
      </section>
      <section class="result-wrapper"id="result-section">
        <?php include 'includes/animation.php' ?>
        <?php include 'includes/header.php' ?>
        <h1>Her er dit perfekte match</h1>
        <div id="result-page">
          <div class="beer-wrapper">
            <div id="result"></div>
          </div>
        </div>
        <div class="add-all">
            <div class="add-all-text">
                <p>Køb hele den personlige kasse og spar 10%</p>
            </div>
            <div class="input-button">
                <div class="input-calc">
                    <button>&#8722;</button>
                    <input placeholder="0">                    
                    <button>&#43;</button>
                </div>
            </div>
            <button class="add-all-button">Læg alle i kurv</button>
        </div>
        <footer>
          <?php include 'includes/footer.php' ?>
        </footer>
      </section>
      <script src="./script/filter.js"></script>
      <script src="./script/showhide.js"></script>
  </body>
</html>
