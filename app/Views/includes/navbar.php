
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home"><img style="width: 25%;" src="../public/image/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../app/views/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=URLROOT?>AdminController/statistics">statistics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard">dashboard</a>
        </li>
        <li class="nav-item">
          <?php if(AdminController::isLogged()): ?>

            <a class="nav-link" href="<?=URLROOT?>AdminController/logout">LogOut</a>
            
            <?php else: ?>
              <a class="nav-link" href="<?=URLROOT?>AdminController/login">Login</a>

              

            <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>