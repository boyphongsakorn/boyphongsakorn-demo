<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สุ่ม หัวข้อ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <center>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      <!--img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"-->
      สุ่ม Topic
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/">
        หน้าแรก
      </a>

      <a class="navbar-item">
        เอกสารการใช้งาน
      </a>

      <!--div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div-->
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <!--a class="button is-primary">
            <strong>Sign up</strong>
          </a-->
          <a class="button is-light" href="ad_config.php">
            Admin Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<table class="table is-bordered">
  <tr>
    <th>หัวข้อ</th>
    <th>คนที่ได้หัวข้อนี้</th>
  </tr>
<?php
while ( $row = mysqli_fetch_array($com_sa_re, MYSQLI_ASSOC) ) {
    ?>

  <tr>
    <td><?php print($row["title"]); ?></td>
    <td><?php print($row["bywho"]); ?></td>
  </tr>
    <?php
}


  ?>
</table>
<form action="action_page.php" method="post">
    <?php
  if (mysqli_num_rows($com_co_re) == 0) {
      echo "หัวข้อครบแล้วครับ";
    }else{
  ?>
  <div class="field">
  <label class="label">ชื่อหัวหน้ากลุ่ม หรือ ชื่อตัวแทนในกลุ่ม</label>
  <div class="control">
  <input class="input" type="text" id="name" name="name" placeholder="ชื่อหัวหน้ากลุ่ม หรือ ชื่อตัวแทนในกลุ่ม">
    <!--input class="input" type="text" placeholder="Text input"-->
  </div>
  </div>
  <!--label for="fname">ชื่อหัวหน้ากลุ่ม หรือ ชื่อตัวแทนในกลุ่ม</label><br>
  <input type="text" id="name" name="name"><br-->
  <input type="submit" value="Submit">
  <?php
  }
  ?>
</form> 

  </body>
</html>