<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-sm-12">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page }}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="form_data" action="{{ route('send-notifications.store') }}" method="POST">
                    <div class="row">
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">Type</label>
                                <select onchange="change_notification(this)" required class="form-control"
                                    type="text" name="type">
                                    <option selected disabled> -Select Type- </option>
                                    <option value="{{ 'sendSingleNotification' }}">{{ 'Single Notification' }} </option>
                                    <option value="{{ 'sendMultiNotification' }}"> {{ 'All User Notification' }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12" style="display: none" id="user_id">
                            <div class="form-group">
                                <label class="required"> Select User</label>
                                <select required type="text" class="form-control" id="user_id_select" placeholder="Enter Type Id"
                                    name="app_user_id">
                                    <option selected disabled> - Select User - </option>
                                    @foreach ($all_users as $user)
                                        <option value="{{ $user->id }}">{{ $user->mobile }} - {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">Title</label>
                                <input required type="text" class="form-control" placeholder="Enter Title"
                                    name="title">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required"> Message</label>
                                <textarea required type="text" class="form-control" placeholder="Enter name" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="button" onclick="ajaxCall('form_data')" class="btn btn-primary mt-2">Add
                                {{ $page }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- // model -->

<script>
    function change_notification(data) {
        if (data.value == "sendSingleNotification") {
            document.getElementById('user_id').style.display = "block";
            document.getElementById('user_id_select').setAttribute("required", "");

        }else{
            document.getElementById('user_id').style.display = "none";
            document.getElementById('user_id_select').removeAttribute("required", "");
        }
    }
</script>
