<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url ?>index3.html" class="navbar-brand">
        <img src="<?php echo base_url ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>
              <li class="dropdown-divider"></li>
              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>
                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="<?php echo base_url ?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">Brad Diesel <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span></h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Calculator Section -->
  <div class="container mt-3">
    <h3>Calculator</h3>
    <input type="text" id="calc-display" class="form-control mb-2" disabled>
    <div class="btn-group d-flex flex-wrap">
      <button class="btn btn-primary" onclick="appendCalc('1')">1</button>
      <button class="btn btn-primary" onclick="appendCalc('2')">2</button>
      <button class="btn btn-primary" onclick="appendCalc('3')">3</button>
      <button class="btn btn-warning" onclick="appendCalc('+')">+</button>
      <button class="btn btn-primary" onclick="appendCalc('4')">4</button>
      <button class="btn btn-primary" onclick="appendCalc('5')">5</button>
      <button class="btn btn-primary" onclick="appendCalc('6')">6</button>
      <button class="btn btn-warning" onclick="appendCalc('-')">-</button>
      <button class="btn btn-primary" onclick="appendCalc('7')">7</button>
      <button class="btn btn-primary" onclick="appendCalc('8')">8</button>
      <button class="btn btn-primary" onclick="appendCalc('9')">9</button>
      <button class="btn btn-warning" onclick="appendCalc('*')">*</button>
      <button class="btn btn-primary" onclick="appendCalc('0')">0</button>
      <button class="btn btn-danger" onclick="clearCalc()">C</button>
      <button class="btn btn-success" onclick="calculateResult()">=</button>
      <button class="btn btn-warning" onclick="appendCalc('/')">/</button>
    </div>
  </div>

  <script>
    function appendCalc(value) {
      document.getElementById('calc-display').value += value;
    }
    function clearCalc() {
      document.getElementById('calc-display').value = '';
    }
    function calculateResult() {
      try {
        document.getElementById('calc-display').value = eval(document.getElementById('calc-display').value);
      } catch {
        document.getElementById('calc-display').value = 'Error';
      }
    }
  </script>