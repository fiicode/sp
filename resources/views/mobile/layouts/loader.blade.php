@if($paginator->hasPages())
    <div class="">
        <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-warning text-center pagination__next" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Chargement...
        </a>
    </div>
@endif