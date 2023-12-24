<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page }}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body ">
                <form id="form_data" action="{{ route('practice.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="row px-3">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="category_id" class="required">Language</label>
                                <select id="category_id" required type="text" class="form-control"
                                    placeholder="Enter Tutorials" name="category_id">
                                    <option selected disabled> - Select Language -</option>
                                    @foreach ($categories as $cate)
                                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">Question</label>
                                <textarea class="form-control" placeholder="Enter title Name" name="questions"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required">A</label>
                                <input type="text" class="form-control" placeholder="Enter option1" name="option1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required">B</label>
                                <input type="text" class="form-control" placeholder="Enter option1" name="option2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required">C</label>
                                <input type="text" class="form-control" placeholder="Enter option1" name="option3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required">D</label>
                                <input type="text" class="form-control" placeholder="Enter option1" name="option4">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="answere" class="required">Answere</label>
                                <select id="answere" required type="text" class="form-control"
                                    placeholder="Enter Answer" name="answere">
                                    <option selected disabled> - Select Answer - </option>
                                    <option value="A" >A</option>
                                    <option value="B" >B</option>
                                    <option value="C" >C</option>
                                    <option value="D" >D</option>
                                </select>
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
                            <button type="button" onclick="ajaxCall('form_data')" class="btn btn-primary mt-2">Add
                                {{ $page }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- // model -->
