 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama_user'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li>
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('produk') ?>"><i class="fa fa-edit"></i> Produk</a></li>
            <li><a href="<?php echo base_url('kategori') ?>"><i class="fa fa-edit"></i> Kategori</a></li>
            <li><a href="<?php echo base_url('paket') ?>"><i class="fa fa-edit"></i> Paket</a></li>
            <li><a href="<?php echo base_url('harga') ?>"><i class="fa fa-edit"></i> Harga</a></li>
            <li><a href="<?php echo base_url('denda') ?>"><i class="fa fa-edit"></i> Denda</a></li>
            <li><a href="<?php echo base_url('customer') ?>"><i class="fa fa-edit"></i> Customer</a></li>
            <li><a href="<?php echo base_url('karyawan') ?>"><i class="fa fa-edit"></i> Karyawan</a></li>
            <!-- <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Diskon</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('booking') ?>"><i class="fa fa-edit"></i> Booking</a></li>
            <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Peminjaman</a></li>
            <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Pengembalian</a></li>
            <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Pembayaran</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('booking') ?>"><i class="fa fa-edit"></i> Booking</a></li>
            <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Peminjaman</a></li>
            <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Pengembalian</a></li>
            <li><a href="<?php echo base_url('blank') ?>"><i class="fa fa-edit"></i> Pembayaran</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('blank') ?>">
            <i class="fa fa-calendar"></i> <span>Ketersediaan</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url('auth/ubah_password') ?>">
            <i class="fa fa-lock"></i> <span>Change Password</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('auth/ubah_password') ?>">
            <i class="fa fa-lock"></i> <span>Manajemen User</span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">