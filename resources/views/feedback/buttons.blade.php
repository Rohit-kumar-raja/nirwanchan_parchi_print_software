<form class="text-center" id="edit{{ $item->id }}" action="{{ route($route . '.destroy', $item->id) }}">

    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="button" id="delete{{ $item->id }}"
        onclick="deleteRow('edit{{ $item->id }}','delete{{ $item->id }}')" class="btn btn-danger btn-sm tooltip1"><i
            class="fas fa-trash-alt"></i> <span> Delete {{ $page }} </span>
    </button>
    {{-- {{$route}} --}}
    <button type="button"
        onclick="changeStatus('{{ route($route . '.status', $item->id) }}','status{{ $item->id }}')"
        id="status{{ $item->id }}"
        class="btn {{ $item->status == 'active' ? 'btn-success' : 'btn-secondary' }}  btn-sm tooltip1">
        @if ($item->status == 'active')
            <i class="fas fa-check-circle"></i>
            <span> DeActivate {{ $page }} </span>
        @else
            <i class="fas fa-times-circle"></i>
            <span> Activate {{ $page }} </span>

        @endif
    </button>
</form>



