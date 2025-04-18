</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
  <!-- Brand Logo -->
  <a href="<?php echo base_url ?>admin" class="brand-link bg-primary text-sm">
    <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
    <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
    <div class="os-padding">
      <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
          <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item dropdown">
                <a href="./" class="nav-link nav-home">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li> 
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=invoice" class="nav-link nav-invoice">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>Invoices</p>
                </a>
              </li>
              <li class="nav-header">Master List</li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=category" class="nav-link nav-category">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>Category List</p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=product" class="nav-link nav-product">
                  <i class="nav-icon fas fa-box"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=service" class="nav-link nav-service">
                  <i class="nav-icon fas fa-hands-helping"></i>
                  <p>Service List</p>
                </a>
              </li>
              <li class="nav-header">Settings</li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>Settings</p>
                </a>
              </li>
            </ul>

            <!-- Calculator -->
            <div class="sidebar-calculator mt-4 p-3 bg-dark text-white">
              <h6 class="text-center">Calculator</h6>
              <input type="text" id="calc-display" class="form-control mb-2" disabled>
              <div class="d-grid gap-1">
                <button class="btn btn-light btn-block" onclick="clearCalc()">C</button>
                <div class="row">
                  <button class="btn btn-secondary col" onclick="appendCalc('7')">7</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('8')">8</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('9')">9</button>
                  <button class="btn btn-warning col" onclick="appendCalc('/')">/</button>
                </div>
                <div class="row">
                  <button class="btn btn-secondary col" onclick="appendCalc('4')">4</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('5')">5</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('6')">6</button>
                  <button class="btn btn-warning col" onclick="appendCalc('*')">*</button>
                </div>
                <div class="row">
                  <button class="btn btn-secondary col" onclick="appendCalc('1')">1</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('2')">2</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('3')">3</button>
                  <button class="btn btn-warning col" onclick="appendCalc('-')">-</button>
                </div>
                <div class="row">
                  <button class="btn btn-secondary col" onclick="appendCalc('0')">0</button>
                  <button class="btn btn-secondary col" onclick="appendCalc('.')">.</button>
                  <button class="btn btn-success col" onclick="calculateResult()">=</button>
                  <button class="btn btn-warning col" onclick="appendCalc('+')">+</button>
                </div>
              </div>
            </div>
            <!-- End Calculator -->
          </nav>
        </div>
      </div>
    </div>
  </div>
</aside>

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
    } catch (error) {
      document.getElementById('calc-display').value = 'Error';
    }
  }

  $(document).ready(function(){
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
    var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
    page = page.split('/');
    page = page[0];
    if(s!='')
      page = page+'_'+s;

    if($('.nav-link.nav-'+page).length > 0){
      $('.nav-link.nav-'+page).addClass('active')
      if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
        $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
        $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
      }
      if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
        $('.nav-link.nav-'+page).parent().addClass('menu-open')
      }
    }
  });
</script>
