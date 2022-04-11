<div class="alert alert-{{ $class }} alert-dismissible fade show" role="alert">
    <h4 class="alert-heading"><u>{{ $title }}</u></h4>
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>