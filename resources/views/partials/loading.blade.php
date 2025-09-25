{{-- Loading Overlay --}}
<div class="loading-overlay d-none" id="loadingOverlay">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

@push('styles')
<style>
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loading-overlay.show {
        display: flex !important;
    }
</style>
@endpush

@push('scripts')
<script>
    function showLoading() {
        document.getElementById('loadingOverlay').classList.remove('d-none');
        document.getElementById('loadingOverlay').classList.add('show');
    }

    function hideLoading() {
        document.getElementById('loadingOverlay').classList.add('d-none');
        document.getElementById('loadingOverlay').classList.remove('show');
    }

    // Show loading on form submit
    $(document).ready(function() {
        $('form').on('submit', function() {
            showLoading();
        });
    });
</script>
@endpush