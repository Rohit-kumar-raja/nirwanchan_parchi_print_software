
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page }}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="form_data" method="POST" action="{{ route('feedback.store') }}">
                    <div class="row">
                        @csrf
                        <div class="col-sm-12">
                            <label>Subject</label>
                            <input type="text" class="form-control" placeholder="Enter Subject" name=" subject">
                        </div>

                        <div class="col-sm-12">
                            <label>Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                        </div>

                        <div class="col-sm-12">
                            <label>doctor ID</label>
                            <input type="text" class="form-control" placeholder="Enter doctor ID" name=" empid">
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit" onclick="ajaxCall('form_data')" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // model -->
