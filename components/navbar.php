

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>

      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->


      </ul>
    </nav>
    <!-- /.navbar -->

    <?php if (isset($_SESSION['message'])) { ?>
          <p style="display: none;" id="message"><?= $_SESSION['message'] ?></p>
          <p style="display: none;" id="type"><?= $_SESSION['type'] ?></p>
          <p style="display: none;" id="title"><?= $_SESSION['title'] ?></p>
        <?php } ?>
        <?php
        unset($_SESSION['message']);
        unset($_SESSION['type']);
        unset($_SESSION['title']);
        ?>
    <!-- Navbar