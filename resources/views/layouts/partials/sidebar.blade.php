<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" style="background-color: #edeefd;">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <img src="{{ url('/storage/images/logo1.png') }}" width="90%" height="90%">
                @if(auth()->user()->ImageFile)
                <div class="sb-sidenav-menu-heading">PROFILE PHOTO</div>
                <center>
                <img src="{{ asset('/storage/'.auth()->user()->ImageFile) }}" width="50" height="50">
                </center>
                @endif
                <div class="sb-sidenav-menu-heading">Tarikh : {{ date('d-m-Y H:i:s') }}</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="far fa-user"></i></div>
                    Pengurusan Profil
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('my-profile') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                            Profil
                        </a>
                        <a class="nav-link" href="{{ route('my-profile-password')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div>
                            Tukar Kata Laluan
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCode" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-code"></i></div>
                    Pengurusan Kod
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCode" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('state.senarai') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-flag"></i></div>
                            Senarai Wilayah / State
                        </a>
                     </nav>
                </div>
                <div class="collapse" id="collapseCode" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('institusi.senarai') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-graduation-cap"></i></div>
                            Senarai Institusi
                        </a>
                     </nav>
                </div>
                <div class="collapse" id="collapseCode" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('tajaan.senarai') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-university"></i></div>
                            Senarai Penaja
                        </a>
                     </nav>
                </div>
                @if (auth()->user()->KodLogin <> 'BPK')
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCode1" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-map-marker"></i></div>
                    Wilayah Liputan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCode1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('liputan.senarai') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-flag"></i></div>
                            Senarai Wilayah
                        </a>
                     </nav>
                </div>
                <div class="collapse" id="collapseCode1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-graduation-cap"></i></div>
                            Senarai Institusi
                        </a>
                     </nav>
                </div>
                @endif
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCode2" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
                    Laporan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCode2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-ul"></i></div>
                            Laporan 1
                        </a>
                     </nav>
                </div>
                <div class="collapse" id="collapseCode2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-ul"></i></div>
                            Laporan 2
                        </a>
                     </nav>
                </div>
                <div class="collapse" id="collapseCode2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-ul"></i></div>
                            Laporan 3
                        </a>
                     </nav>
                </div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Carian Pelajar
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer"  style="background-color: #edeefd;" >
            <div class="small">Logged in as: {{ auth()->user()->NamaPegMSD }}</div>
            <div class="small">Logged as: {{ auth()->user()->KodLogin }}</div>
        </div>
    </nav>
