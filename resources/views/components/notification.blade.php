<div class="notification">
    <ul class="notification-list">
        @foreach ($items as $item)
        <li class="notification-list-item">
            <a href="{{ URL('/assets/docs/' . $item['filename'] . '.' . $item['ext']) }}">{{ $item['title'] }}</a>
        </li>
        @endforeach
    </ul>
</div>