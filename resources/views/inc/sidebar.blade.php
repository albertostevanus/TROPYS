@section('sidebar')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<nav id="sidebar">
    <div id="dismiss">
        <i class="glyphicon glyphicon-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <h3>TROPYS</h3>
    </div>

    <ul class="list-unstyled components">
        <p><a href="#">Dashboard</a></p>
        <li class="active">
            <a href="#masterSubmenu" data-toggle="collapse" aria-expanded="false">Master Property</a>  
            <ul class="collapse list-unstyled" id="masterSubmenu">
                <li><a href="#">Daftar Master Property</a></li>
                <li><a href="#">Buat Master Property</a></li>
            </ul>
        </li>
        <li>
            <a href="#transaksiSubmenu" data-toggle="collapse" aria-expanded="false">Transaksi</a>
            <ul class="collapse list-unstyled" id="transaksiSubmenu">
                <li><a href="#">Daftar Transaksi</a></li>
                <li><a href="#">Daftar Berkas</a></li>
                <li><a href="#">Buat Transaksi</a></li>
            </ul>
        </li>
        <li>
            <a href="#pembeliSubmenu" data-toggle="collapse" aria-expanded="false">Pembeli</a>
            <ul class="collapse list-unstyled" id="pembeliSubmenu">
                <li><a href="#">Daftar Pembeli</a></li>
                <li><a href="#">Buat Akun Pembeli</a></li>
            </ul>
        </li>
        <li>
            <a href="#agenSubmenu" data-toggle="collapse" aria-expanded="false">Agen</a>
            <ul class="collapse list-unstyled" id="agenSubmenu">
                <li><a href="#">Daftar Agen</a></li>
                <li><a href="#">Buat Akun Sales Agent</a></li>
            </ul>
        </li>
    </ul>
</nav>
