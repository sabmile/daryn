<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{__('Дарын')}}</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('site.main') }}">{{__('content.main')}}</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('content.galery')}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('site.galeryVideo') }}">{{__('content.video')}}</a></li>
                        <li><a class="dropdown-item" href="#">{{__('content.photo')}}</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('content.gov-services')}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">{{__('Постановка в очередь')}}</a></li>
                        <li><a class="dropdown-item" href="#">{{__('Зачисление в ДДО')}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">{{__('Заключение ЭД')}}</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('content.about-us')}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('site.groups') }}">{{__('content.groups')}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('site.schedule') }}">{{__('content.schedule-name')}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('site.about') }}">{{__('content.history')}}</a></li>
                        <li><a class="dropdown-item" href="#">{{__('content.employees')}}</a></li>
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
                <button class="btn btn-outline-success" type="submit">{{__('content.find')}}</button>
            </form>
            
        </div>

    </div>
</nav>