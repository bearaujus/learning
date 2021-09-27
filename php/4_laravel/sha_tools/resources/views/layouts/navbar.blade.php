<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" style="margin-left: 10%">
        <a class="navbar-brand" href="/">SHA TOOLS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                {{-- Home --}}
                <li class="nav-item">
                    <a class="nav-link {{($title === __('home/form.title')) ? 'active' : ''}}"
                        href="/home">{{__('home/form.title')}}</a>
                </li>
            </ul>
            @auth
            <ul class="navbar-nav">

                {{-- Encrypt --}}
                <li class="nav-item">
                    <a class="nav-link {{($title === __('encrypt/form.title')) ? 'active' : ''}}"
                        href="/encrypt">{{__('navbar.encryptor')}}</a>
                </li>

                {{-- Decrypt --}}
                <li class="nav-item">
                    <a class="nav-link {{($title === __('decrypt/form.title')) ? 'active' : ''}}"
                        href="/decrypt">{{__('navbar.decryptor')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" style="margin-right: 10%">

                {{-- Language --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" data-bs-toggle="dropdown"
                        aria-expanded="false">{{strtoupper(config('app.locale')) . ' (' . strtoupper(config('app.alias_lang')[config('app.locale')]) . ')'}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                style="display: {{config('app.locale') == 'id' ? 'none' : 'block'}}"
                                href="/{{'id' . $_SERVER['REQUEST_URI']}}">ID
                                (INDONESIA)</a></li>
                        <li><a class="dropdown-item"
                                style="display: {{config('app.locale') == 'en' ? 'none' : 'block'}}"
                                href="/{{'en' . $_SERVER['REQUEST_URI']}}">EN
                                (ENGLISH)</a></li>
                    </ul>
                </li>

                {{-- Settings --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" data-bs-toggle="dropdown"
                        aria-expanded="false">{{strtoupper(auth()->user()->name)}} </a>
                    <ul class="dropdown-menu">

                        {{-- Profile --}}
                        <li><a class="dropdown-item" href="/profile">{{__('navbar.profile')}}</a></li>
                        <hr class="dropdown-divider">

                        {{-- About --}}
                        <li><a class="dropdown-item" href="/about">{{__('navbar.about')}}</a></li>

                        {{-- Logout --}}
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">{{__('navbar.logout')}}</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="navbar-nav">

                {{-- Login --}}
                <li class="nav-item">
                    <a class="nav-link {{($title === __('login/form.title')) ? 'active' : ''}}"
                        href="/login">{{__('navbar.login')}}</a>
                </li>

                {{-- Register --}}
                <li class="nav-item">
                    <a class="nav-link {{($title === __('register/form.title')) ? 'active' : ''}}"
                        href="/register">{{__('navbar.register')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" style="margin-right: 10%">

                {{-- Language --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" data-bs-toggle="dropdown"
                        aria-expanded="false">{{strtoupper(config('app.locale')) . ' (' . strtoupper(config('app.alias_lang')[config('app.locale')]) . ')'}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                style="display: {{config('app.locale') == 'id' ? 'none' : 'block'}}"
                                href="/{{'id' . $_SERVER['REQUEST_URI']}}">ID
                                (INDONESIA)</a></li>
                        <li><a class="dropdown-item"
                                style="display: {{config('app.locale') == 'en' ? 'none' : 'block'}}"
                                href="/{{'en' . $_SERVER['REQUEST_URI']}}">EN
                                (ENGLISH)</a></li>
                    </ul>
                </li>

                {{-- About --}}
                <li class="nav-item">
                    <a class="nav-link {{($title === __('about/form.title')) ? 'active' : ''}}"
                        href="/about">{{__('navbar.about')}}</a>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>