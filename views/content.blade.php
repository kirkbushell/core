@if (! $noJs) <noscript> @endif
<div class="Alert">
    <div class="container">
        @if ($noJs)
            {{ $translator->trans('core.basic.load_error_message') }}
        @else
            {{ $translator->trans('core.basic.javascript_disabled_message') }}
        @endif
    </div>
</div>

{!! $content !!}
@if (! $noJs) </noscript> @endif
