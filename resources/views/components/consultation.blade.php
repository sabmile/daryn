<div class="consultation">
    <ul class="consultation-list">
    @foreach($items as $item)
        <li class="consultation-list-item">
            <a href="{{ URL('/assets/docs/' . $item['filename'] . '.' . $item['ext']) }}" target="_blank">{{ $item['title'] }}</a>
        </li> 
    @endforeach
    </ul>
</div>