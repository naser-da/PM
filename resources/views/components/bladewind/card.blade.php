@props([
    // title of the card
    'title' => null,
    // should the card be displayed with a shadow
    'has_shadow' => false,
    // for backward compatibility with Laravel 8
    'hasShadow' => false,
    // reduce padding within the card
    'reduce_padding' => false,
    // for backward compatibility with Laravel 8
    'reducePadding' => false,
    // content to display as card header
    'header' => null,
    // content to display as card footer
    'footer' => null,
    // additional css
    'class' => null,
])
@php
    // reset variables for Laravel 8 support
    $has_shadow = filter_var($has_shadow, FILTER_VALIDATE_BOOLEAN);
    $hasShadow = filter_var($hasShadow, FILTER_VALIDATE_BOOLEAN);
    $reduce_padding = filter_var($reduce_padding, FILTER_VALIDATE_BOOLEAN);
    $reducePadding = filter_var($reducePadding, FILTER_VALIDATE_BOOLEAN);
    if ( !$hasShadow ) $has_shadow = $hasShadow;
    if ( $reducePadding ) $reduce_padding = $reducePadding;
@endphp
<div class="bw-card bg-gray dark:bg-dark-900  @if($header === null && ! $reduce_padding) p-8 @elseif($reduce_padding) p-4 @else @endif  @if($has_shadow) shadow-2xl shadow-gray-200/40 dark:shadow-xl dark:shadow-dark-900 @endif {{ $class }}">
    @if($header)
        <div class="border-b border-gray-100/30 dark:border-dark-800/50">
            {{ $header }}
        </div>
    @endif
    @if($title && ! $header)
        <div class="uppercase tracking-wide text-xs text-gray-500/90 mb-2">{{ $title }}</div>
    @endif
    <div @if($title && ! $header) class="mt-6" @endif>
        {{ $slot }}
    </div>
    @if($footer)
        <div class="border-t border-gray-100/30 dark:border-dark-800/50">
            {{$footer}}
        </div>
    @endif
</div>
