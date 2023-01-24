<nav class="navbar navbar-expand-md bg-dark">

  <a class="navbar-brand fs-3 ms-3" href="home"><img class="imgcircel" style="width: 12%;" src="../public/image/logo.png" alt="logo"></a>


  <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
    <i class="bx bx-menu bx-md text-white"></i>
  </button>
  <div class="collapse navbar-collapse ul-bg" id="btn">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link mx-3 text-white fs-4" aria-current="page" href="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-3 text-white fs-4" aria-current="page" href="<?= URLROOT ?>dashboardController/gallery">gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-3 text-white fs-4" href="<?= URLROOT ?>dashboardController/statistics">statistics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-3 text-white fs-4" href="<?= URLROOT ?>dashboardController/dashboard">dashboard</a>
      </li>
      <li class="nav-item">
        <?php if (AdminController::isLogged()) : ?>

          <a class="nav-link mx-3 text-white fs-4" href="<?= URLROOT ?>AdminController/logout">LogOut</a>

        <?php else : ?>
          <a class="nav-link mx-3 text-white fs-4" href="<?= URLROOT ?>AdminController/login">Login</a>



        <?php endif; ?>
      </li>
    </ul>
  </div>

</nav>