{{-- Submit Button --}}
@php
$text = $text ?? 'Submit';
$class = $class ?? 'btn btn-primary account-btn';
$type = $type ?? 'submit';
@endphp

<div class="input-block mb-3 text-center">
    <button class="{{ $class }}" type="{{ $type }}" {{ $attributes ?? '' }}>
        {{ $text }}
    </button>
</div>