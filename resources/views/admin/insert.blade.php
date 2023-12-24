<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page }}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="form_data" action="{{ route('admin.store') }}" method="POST">
                    <div class="row">
                        @csrf
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">Name</label>
                                <input required type="text" class="form-control" placeholder="Enter Category Name"
                                    name="name">
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">email</label>
                                <input required type="text" class="form-control" placeholder="Enter  email"
                                    name="email">

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">mobile</label>
                                <input required type="text" class="form-control" placeholder="Enter  mobile"
                                    name="mobile">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">password</label>
                                <input required type="password" class="form-control" placeholder="Enter  password"
                                    name="password">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">Confirmed Passoword</label>
                                <input required type="password" class="form-control"
                                    placeholder="Enter  Confirmed Passoword" name="password_confirmation">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">telephone</label>
                                <input required type="number" class="form-control" placeholder="Enter  telephone"
                                    name="telephone">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="optional"> Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter name" name="description"></textarea>
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
