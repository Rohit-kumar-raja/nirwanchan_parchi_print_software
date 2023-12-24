<form id="form_update" action="{{ route('note.update', $data->id) }}" method="POST">
    <div class="row">
        @csrf
        @method('PUT')
        
        <div class="col-sm-12">
            <div class="form-group">
                <label for="category_id" class="required" >Category</label>
                <select id="cetegory_id" required type="text" class="form-control"  
                placeholder="Enter Category" name="category_id" >
                <option selected disabled> - Select Category-</option>
                @foreach ($categories as $cate)
                    <option {{ $data->category_id=$cate->id? "selected":""}} value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label class="required" >Title</label>
                <input value="{{$data->title }}"  required type="text" class="form-control"    placeholder="Enter Note Name" name="title">
            </div>
        </div>

    
        <div class="col-sm-12">
            <div class="form-group">
                <label class="optional">Pdf</label>
                <div class="row">
                    <div class="col-sm-8">
                        <input accept="application/pdf" title="upload icon images"
                            class="form-control" type="file" name="pdf" placeholder="Enter state">
                    </div>
                    <div class="col-sm-4">
                        <iframe width="150" height="150" src="{{ $data->pdf }}" alt=""></iframe>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label class="required"> Video Link</label>
                <textarea type="text" class="form-control" placeholder="Enter video" name="video">{{ $data->video }}</textarea>
            </div>
        </div>

        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="is_publish" class="required">is_publish</label>
                                <select id="is_publish" required type="text" class="form-control"
                                    placeholder="Enter Answer" name="is_publish">
                                    <option {{ $data->is_publish=="no"?"selected":""}} value="no" >NO</option>
                                    <option {{ $data->is_publish=="yes"?"selected":""}} value="yes" >YES</option>
                                </select>
                            </div>
                        </div>

        <div class="col-sm-12 text-center">
            <button type="button" onclick="ajaxCall('form_update')" class="btn btn-primary mt-2">Update
                {{ $page }}</button>
        </div>
    </div>

</form>
