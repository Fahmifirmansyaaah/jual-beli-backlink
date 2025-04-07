@php
    $fiturList = $getState();

    if (is_string($fiturList)) {
        $fiturList = json_decode($fiturList, true);
    }

    if (!is_array($fiturList) || empty($fiturList)) {
        echo '<span>-</span>';
        return;
    }
@endphp

<ul class="list-disc pl-5 text-sm p-4 space-y-1">
    @foreach ($fiturList as $item)
        @php
            $text = $item['value'] ?? '';
            $isNegative = str_starts_with($text, '-');
            $icon = $isNegative ? '❌' : '✅';
            $class = $isNegative ? 'na' : '';
            $cleanText = ltrim($text, '-');
        @endphp
        <li class="{{ $class }}">
            {{ $icon }} <span>{{ $cleanText }}</span>
        </li>
    @endforeach
</ul>
