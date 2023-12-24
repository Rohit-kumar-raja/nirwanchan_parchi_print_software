<form id="form_update" action="{{ route('send-notifications.update', $data->id) }}" method="POST">
    <div class="row">
        @csrf
        @method('PUT')

        <div class="col-sm-12">
            <div class="form-group">
                <label class="required">Type</label>
                {{-- <input required type="text" class="form-control" placeholder="Enter Type Name"
                    name="type" value="{{ $data->type }}"> --}}
                    <select required class="form-control" type="text" name="type">
                        <option selected disabled> -Select Type- </option>
                        <option value="{{ 'sendSingleNotification' }}">{{ 'Single Notification' }} </option>
                        <option value="{{ 'sendMultiNotification' }}"> {{ 'Multi Notification' }}
                        </option>
                    </select>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label class="required">Type ID</label>
                <input required type="text" class="form-control" placeholder="Enter Type Id"
                    name="type_id" value="{{ $data->type_id }}">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label class="required">All ID</label>
                <select required class="form-control" placeholder="Enter All Id" name="all_id">
                    <option {{ $data->all_id == '1' ? 'selected' : '' }} value="1">Yes</option>
                    <option {{ $data->all_id == '0' ? 'selected' : '' }} value="0">No</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label class="required">Title</label>
                <input required type="text" class="form-control" placeholder="Enter Title"
                    name="title" value="{{ $data->title }}">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label class="optional"> Message</label>
                <textarea type="text" class="form-control" placeholder="Enter Message for the notification" name="message">{{ $data->message }}</textarea>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <button type="button" onclick="ajaxCall('form_update')" class="btn btn-primary mt-2">Update
                {{ $page }}</button>
        </div>
    </div>

</form>
