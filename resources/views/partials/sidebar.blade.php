<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo-custom.png" height="125" width="125" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="home">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{route('siswa.index')}}">
                                <i class="fa fa-user text-red"></i>Data Siswa</a>
                        </li>
                        <li>
                            <a href="{{route('guru.index')}}">
                                <i class="fa fa-user text-red"></i>Data Guru</a>
                        </li>

                        <li>
                            <a href="{{route('petugaspiket.index')}}">
                                <i class="fa fa-user text-red"></i>Petugas Piket</a>
                        </li>
                        <li>
                            <a href="{{route('absensisiswa.index')}}">
                                <i class="far fa-check-square"></i>Absensi Siswa</a>
                        </li>
                        <li>
                            <a href="{{route('absensiguru.index')}}">
                                <i class="far fa-check-square"></i>Absensi Guru</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        