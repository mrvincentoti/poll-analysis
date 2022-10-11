    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
        <div class="container-fluid">
            <a class="navbar-brand mx-lg-1 mr-0" href="/">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
            <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
                <a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                    <i class="fe fe-x"><span class="sr-only"></span></i>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <span class="ml-lg-2">Dashboard</span><span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pvc') }}" class="nav-link">
                            <span class="ml-lg-2">PVC Analysis</span><span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sentiments') }}" class="nav-link">
                            <span class="ml-lg-2">Sentiment Analysis</span><span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
            <form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="dark">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                        <i class="fe fe-grid fe-16"></i>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <i class="fe fe-bell fe-16"></i>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>