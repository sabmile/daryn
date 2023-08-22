<main class="flex-grow-1 py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 d-none d-sm-block">
                <aside>
                    <ul class="nav d-flex flex-column align-items-center">
                        <li><a class="nav-link" href="{{ route('site.schedule') }}">{{__('content.nav.schedule')}}</a></li>
                        <li><a class="nav-link" href="{{ route('site.about') }}">{{__('content.nav.history')}}</a></li>
                        <li><a class="nav-link" href="{{ route('site.galeryVideo') }}">{{__('content.nav.video')}}</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</main>
