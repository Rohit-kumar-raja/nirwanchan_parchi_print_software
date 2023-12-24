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
                <form id="form_data" action="{{ route('app-users.store') }}" method="POST">
                    <div class="row">
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">name</label>
                                <input required type="text" class="form-control" placeholder="Enter Type Name"
                                    name="name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">gender</label>
                                <input required type="text" class="form-control" placeholder="Enter Type Id"
                                    name="gender">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">mobile</label>
                                <input required type="text" class="form-control" placeholder="Enter All Id"
                                    name="mobile">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">email</label>
                                <input required type="text" class="form-control" placeholder="Enter Title"
                                    name="email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">dob</label>
                                <input required type="text" class="form-control" placeholder="Enter Title"
                                    name="dob">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">blood_group</label>
                                <input required type="text" class="form-control" placeholder="Enter Title"
                                    name="blood_group">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="optional"> dob</label>
                                <textarea type="text" class="form-control" placeholder="Enter name" name="message"></textarea>
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
