<div class="notification">
    <ul class="notification-list">
        @foreach ($items as $item)
        <li class="notification-list-item">
            <a href="{{ URL('/assets/docs/' . $item['filename'] . '.' . $item['ext']) }}" target="_blank">{{ $item['title'] }}</a>
        </li>
        @endforeach
    </ul>
</div>