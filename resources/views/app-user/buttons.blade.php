<form class="text-center" id="show{{ $item->id }}" action="{{ route($route . '.destroy', $item->id) }}">

    <button type="button" class="btn btn-warning btn-sm tooltip1"
        onclick="editForm('{{ route($route . '.show', $item->id) }}', 'show_form')" data-toggle="modal" data-target="#show"  >
        <i class="fas fa-eye"></i> <span> View {{ $page }} </span>
    </button>

   

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
