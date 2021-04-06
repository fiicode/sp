@if($paginator->hasPages())
    <div class="centered">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div>
            <h6 class="d-inline-block pagination">Un instant<br>
                <a class="pagination__next-menu" href="{{ $paginator->nextPageUrl() }}"></a>
            </h6>
        </div>
    </div>
@endif