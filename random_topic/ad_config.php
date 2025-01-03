<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
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
          <a class="button is-light">
            ออกจากระบบ
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

  <div class="container">
    <h1 class="title has-text-centered">การตั้งค่า</h1>
    <form action="ac_send.php" method="post">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">การตั้งค่าหัวข้อต่อกลุ่ม และ จำนวนกลุ่ม ทั้งหมด</label>
        </div>
        <div class="field-body">
          <div class="field is-grouped">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="หัวข้อต่อกลุ่ม">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="จำนวนกลุ่มทั้งหมด">
              <span class="icon is-small is-left">
                <i class="fas fa-users"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
      <center>
      <div class="field">
        <div class="field-body">
          <div class="control">
              <button class="button is-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>