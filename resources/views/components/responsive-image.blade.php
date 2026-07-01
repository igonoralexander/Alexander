@php
// Usage: @include('components.responsive-image', ['path' => 'frontend/images/slider/slide.jpg', 'alt'=>'Alt text', 'class'=>'img-fluid', 'sizes'=>'100vw', 'lazyload'=>true])
// For paths like 'frontend/images/slider/image.jpg', converts to WebP with -360, -768, -1200 variants
$path = $path ?? '';
$alt = $alt ?? '';
$imgClass = $class ?? '';
$sizes = $sizes ?? '100vw';
$loading = $loading ?? 'lazy';
$lazyload = $lazyload ?? false; // Set true for lazyload with data-src
$extraAttrs = $extraAttrs ?? ''; // Any additional attributes like data attributes

if (!$path) {
    echo '<!-- responsive-image: missing path -->';
    return;
}

$ext = pathinfo($path, PATHINFO_EXTENSION);
$base = preg_replace('/\.' . preg_quote($ext, '/') . '$/i', '', $path);
$widths = [1200, 768, 360];
$webpSrcsetParts = [];
foreach ($widths as $w) {
    $webpPath = $base . '-' . $w . '.webp';
    if (file_exists(public_path($webpPath))) {
        $webpSrcsetParts[] = asset($webpPath) . " {$w}w";
    }
}
$webpSrcset = implode(', ', $webpSrcsetParts);
$fallbackSrc = asset($path);
$lazyloadClass = $lazyload ? 'lazyload' : '';
$imgClass = trim($lazyloadClass . ' ' . $imgClass);
if ($lazyload) {
    $imgAttrs = trim("class=\"{$imgClass}\" alt=\"" . e($alt) . "\" loading=\"{$loading}\" decoding=\"async\" data-src=\"{$fallbackSrc}\" src=\"{$fallbackSrc}\" {$extraAttrs}");
} else {
    $imgAttrs = trim("class=\"{$imgClass}\" alt=\"" . e($alt) . "\" loading=\"{$loading}\" decoding=\"async\" {$extraAttrs}");
}
@endphp
<picture>
@if(!empty($webpSrcset))
    <source type="image/webp" srcset="{{ $webpSrcset }}" sizes="{{ $sizes }}">
@endif
    <img src="{{ $fallbackSrc }}" {!! $imgAttrs !!}>
</picture>
