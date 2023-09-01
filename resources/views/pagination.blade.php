@if ($paginator->hasPages())
    <div class="pagination">
   
        @if ($paginator->onFirstPage())
            <span class="paginateNext" disabled aria-hidden="true">&laquo;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
        @endif

        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="paginateNext">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active paginateNext">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" rel="prev">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
        @else
            <span class="paginateNext" disabled aria-hidden="true">&raquo;</span>
        @endif
    </div>
@endif

