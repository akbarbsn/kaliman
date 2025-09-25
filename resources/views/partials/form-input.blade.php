{{-- Standard Input Field --}}
@php
$id = $id ?? $name ?? '';
$type = $type ?? 'text';
$class = $class ?? 'form-control';
$placeholder = $placeholder ?? '';
$value = $value ?? old($name ?? '');
$required = $required ?? false;
@endphp

<div class="input-block mb-3">
    @if(isset($label))
    <label class="col-form-label" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input
        class="{{ $class }} @error($name ?? '') is-invalid @enderror"
        type="{{ $type }}"
        name="{{ $name ?? '' }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes ?? '' }}>
    @error($name ?? '')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>