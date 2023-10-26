<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav id="navbar_top" class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="#">
                        <span>Д</span><span>а</span><span>р</span><span>ы</span><span>н</span>
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('site.main') }}">{{__('content.nav.main')}}</a>
                            </li>
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('content.nav.galery')}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('site.galeryVideo') }}">{{__('content.nav.video')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.galleryPhoto') }}">{{__('content.nav.photo')}}</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('content.nav.gov-services.name')}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ URL('/assets/nav/1.pdf') }}" target="_blank">{{__('content.nav.gov-services.que')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ URL('/assets/nav/3.pdf') }}" target="_blank">{{__('content.nav.gov-services.direction')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ URL('/assets/nav/6.pdf') }}" target="_blank">{{__('content.nav.gov-services.receive')}}</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('content.nav.about-us')}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('site.groups') }}">{{__('content.nav.groups')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.schedule') }}">{{__('content.nav.schedule')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.about') }}">{{__('content.nav.history')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{__('content.nav.employees')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.notification') }}">{{__('content.nav.notification')}}</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('content.lang')}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('setLocale', ['lang' => 'kz']) }}">{{__('content.kz')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('setLocale', ['lang' => 'ru']) }}">{{__('content.ru')}}</a></li>
                                </ul>
                            </li>

                        </ul>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">{{__('content.nav.find')}}</button>
                        </form>
                        
                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>