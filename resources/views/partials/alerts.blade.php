{{-- Error Notifications --}}
@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <h6 class="alert-heading">
        <i class="fas fa-exclamation-triangle me-2"></i>
        Whoops! Something went wrong.
    </h6>
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- Success Messages --}}
@if (session('success'))
<div class="alert alert-success" role="alert">
    <i class="fas fa-check-circle me-2"></i>
    {{ session('success') }}
</div>
@endif

{{-- Info Messages --}}
@if (session('info'))
<div class="alert alert-info" role="alert">
    <i class="fas fa-info-circle me-2"></i>
    {{ session('info') }}
</div>
@endif

{{-- Warning Messages --}}
@if (session('warning'))
<div class="alert alert-warning" role="alert">
    <i class="fas fa-exclamation-triangle me-2"></i>
    {{ session('warning') }}
</div>
@endif

{{-- Error Messages --}}
@if (session('error'))
<div class="alert alert-danger" role="alert">
    <i class="fas fa-times-circle me-2"></i>
    {{ session('error') }}
</div>
@endif