@props(['sortDirection' => null, 'sortBy' => null, 'field' => null])


@if($sortBy === $field)



    @if($sortDirection === 'asc')
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex text-purple-500 icon icon-tabler icon-tabler-sort-ascending" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 6l7 0" />
            <path d="M4 12l7 0" />
            <path d="M4 18l9 0" />
            <path d="M15 9l3 -3l3 3" />
            <path d="M18 6l0 12" />
        </svg>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" class=" inline-flex text-purple-500 icon icon-tabler icon-tabler-sort-descending" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 6l9 0" />
            <path d="M4 12l7 0" />
            <path d="M4 18l7 0" />
            <path d="M15 15l3 3l3 -3" />
            <path d="M18 6l0 12" />
        </svg>
    @endif
@endif
