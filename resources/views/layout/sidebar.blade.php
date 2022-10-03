<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

       

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-header">DASHBOARD</li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('dashboard*') ? 'active' : ''}}">
                        <i class="fas fa-yin-yang"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                
                    <li class="nav-header">MASTER</li>
                    <li class="nav-item">
                        <a href="{{ route('guru.index') }}" class="nav-link {{ request()->is('guru*') ? 'active' : ''}}">
                            <i class="fas fa-user-alt"></i>
                            <p>
                                Guru
                               
                            </p>
                        </a>

                   
                    <li class="nav-item">
                        <a href="{{ route('kelas.index') }}" class="nav-link {{ request()->is('kelas*') ? 'active' : ''}}">
                            <i class="fas fa-school"></i>
                            <p>
                                Kelas
                               
                            </p>
                        </a>

                    
                    <li class="nav-item">
                        <a href="{{ route('mapel.index') }}" class="nav-link {{ request()->is('mapel*') ? 'active' : ''}}">
                            <i class="fas fa-book-open"></i>
                            <p>
                                Mapel
                               
                            </p>
                        </a>

                    
                    <li class="nav-item">
                        <a href="{{ route('siswa.index') }}" class="nav-link {{ request()->is('siswa*') ? 'active' : ''}}">
                            <i class="fa fa-user-graduate"></i>
                            <p>
                                Siswa
                               
                            </p>
                        </a>

            </ul>
        </nav>

    </div>

</aside>