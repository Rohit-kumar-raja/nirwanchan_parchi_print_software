<form id="form_update" action="{{ route('specialization.update', $data->id) }}" method="POST">
    <div class="row">
        @csrf
        @method('PUT')
        <div class="col-sm-12">
            <div class="form-group">
                <label class="required">Name</label>
                <input required type="text" class="form-control" value="{{ $data->name }}"
                    placeholder="Enter Specialization Name" name="name">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label class="optional"> Description</label>
                <textarea  type="text" class="form-control" placeholder="Enter Description" name="description">{{ $data->description }}</textarea>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <button type="button" onclick="ajaxCall('form_update')" class="btn btn-primary mt-2">Update
                {{ $page }}</button>
        </div>
    </div>

</form>
