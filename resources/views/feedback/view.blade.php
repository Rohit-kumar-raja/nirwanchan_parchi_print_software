<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{  $feedback-> id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Feedback View Detail</h6>
                <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        @csrf

                        <div class="col-sm-12">
                            <label>Name</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter Name" name="subject"
                                value="{{  $feedback->subject}}">
                        </div>

                        <div class="col-sm-12">
                            <label>Description</label>
                            <textarea class="form-control" name="description"
                                placeholder="Enter Address"
                                readonly>{{ $feedback ->description }}</textarea>
                        </div>

                        <div class="col-sm-12">
                            <label>doctor ID</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter Name" name=" name"
                                value="{{  $feedback->empid}}">
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->
