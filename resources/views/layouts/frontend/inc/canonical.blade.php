@php
    $canonicalPath = request()->path() === '/' ? '' : request()->path();
    $canonicalUrl = rtrim(config('app.url'), '/') . ($canonicalPath ? '/' . ltrim($canonicalPath, '/') : '');
@endphp

<link rel="canonical" href="{{ $canonicalUrl }}">
