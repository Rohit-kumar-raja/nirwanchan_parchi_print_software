<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-sm">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page }}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body "></div>
            <form id="form_data" action="{{ route('note.import') }}" method="POST" enctype="multipart/form-data">
                <div class="row px-3">
                    @csrf


                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="required">Xl File</label>
                            <input accept="application/pdf" title="upload icon images" class="form-control"
                                type="file" name="file" placeholder="Enter state">
                        </div>
                    </div>



                    <div class="col-sm-12 text-center">
                        <hr>
                        <button type="button" onclick="ajaxCall('form_data')" class="btn btn-primary mt-2">Import
                            {{ $page }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<!-- // model -->
