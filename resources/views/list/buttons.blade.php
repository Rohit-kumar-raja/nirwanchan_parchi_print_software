<form class="text-center" id="edit{{ $item->id }}" action="{{ route($route . '.destroy', $item->id) }}">


    <a href="{{ route('generate.print', $item->id) }}" target="blank" class="btn btn-success btn-sm tooltip1">
        <i class="fas fa-print"></i> <span> Print {{ $item->nirwachan_name }} </span>
    </a>


</form>
