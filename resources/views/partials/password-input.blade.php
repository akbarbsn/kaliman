{{-- Password Input Field with Toggle Visibility --}}
@php
$id = $id ?? $name ?? 'password';
$class = $class ?? 'form-control';
$placeholder = $placeholder ?? '';
$value = $value ?? '';
$required = $required ?? false;
$showForgotLink = $showForgotLink ?? false;
$forgotUrl = $forgotUrl ?? route('password.request');
@endphp

<div class="input-block mb-3">
    @if(isset($label) || $showForgotLink)
    <div class="row align-items-center">
        @if(isset($label))
        <div class="col">
            <label class="col-form-label" for="{{ $id }}">{{ $label }}</label>
        </div>
        @endif
        @if($showForgotLink)
        <div class="col-auto">
            <a class="text-muted" href="{{ $forgotUrl }}">
                Forgot password?
            </a>
        </div>
        @endif
    </div>
    @endif
    <div class="position-relative">
        <input
            class="{{ $class }} @error($name ?? '') is-invalid @enderror"
            type="password"
            name="{{ $name ?? 'password' }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            {{ $required ? 'required' : '' }}
            {{ $attributes ?? '' }}>
        <span class="fa fa-eye-slash toggle-password" data-target="#{{ $id }}"></span>
        @error($name ?? '')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.toggle-password').click(function() {
            const target = $($(this).data('target'));
            const type = target.attr('type') === 'password' ? 'text' : 'password';
            target.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    });
</script>
@endpush