<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{$page}}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body "></div>
                <form id="form_data" action="{{ route('note.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="row px-3">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="category_id" class="required" >Category</label>
                                <select id="cetegory_id" required type="text" class="form-control"  
                                placeholder="Enter Category" name="category_id" >
                                <option selected disabled> - Select -</option>
                                @foreach ($categories as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required" >Title</label>
                                <input type="text" class="form-control"    placeholder="Enter title Name" name="title">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="optional" >Pdf</label>
                                <input accept="application/pdf"  title="upload icon images" class="form-control" type="file" name="pdf" placeholder="Enter state">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="optional" >Video</label>
                                <input type="text" class="form-control"    placeholder="Enter Video" name="video">
                                
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="is_publish" class="required">is_publish</label>
                                <select id="is_publish" required type="text" class="form-control"
                                    placeholder="Enter Answer" name="is_publish">
                                    <option selected disabled> - Select Answer - </option>
                                    <option value="no" >NO</option>
                                    <option value="yes" >YES</option>
                        
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <hr>
                            <button type="button" onclick="ajaxCall('form_data')"
                                class="btn btn-primary mt-2">Add {{$page}}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- // model -->
