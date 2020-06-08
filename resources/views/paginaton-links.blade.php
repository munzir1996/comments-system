@if ($paginator->hasPages())

<ul class="flex justify-between">

    @if ($paginator->onFirstPage())
    <li class="w-16 px2 py-1 text-center rounded border bg-gray-200">
        Prev
    </li>
    @else
    <li class="w-16 px2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="previousPage">
        Prev
    </li>
    @endif

    @foreach ($elements as $element)
        <div class="flex">
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="mx-2 w-10 px2 py-1 text-center rounded border shadow bg-blue-300 text-white cursor-pointer"
                    wire:click="gotoPage({{ $page }})">
                       {{ $page }}
                    </li>
                    @else
                        <li class="mx-2 w-10 px2 py-1 text-center rounded border shadow bg-white cursor-pointer"
                        wire:click="gotoPage({{ $page }})">
                        {{ $page }}
                        </li>
                    @endif
                @endforeach
            @endif
        </div>
    @endforeach


    @if ($paginator->hasMorePages())
    <li class="w-16 px2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="nextPage">
        Next
    </li>
    @else
    <li class="w-16 px2 py-1 text-center rounded border bg-gray-200">
        Next
    </li>
    @endif
</ul>

@endif
