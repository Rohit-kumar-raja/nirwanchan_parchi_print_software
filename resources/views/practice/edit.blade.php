<form id="form_update" action="{{ route('practice.update', $data->id) }}" method="POST">
    <div class="row">
        @csrf
        @method('PUT')
        
        <div class="col-sm-6">
            <div class="form-group">
                <label for="category_id" class="required">Language</label>
                <select id="category_id" required type="text" class="form-control"
                    placeholder="Enter Tutorials" name="category_id">
                    <option  disabled> - Select Language -</option>
                    @foreach ($categories as $cat)
                    <option {{ $cat->id==$data->category_id?"selected":""}} value="{{ $cat->id }}">{{ $cat->name }}</option> 
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label class="required" >Question</label>
                <input value="{{$data->questions }}"  required type="text" class="form-control"  placeholder="Enter Question" name="questions"></input>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="required" >A</label>
                <input value="{{$data->option1 }}"  required type="text" class="form-control"    placeholder="Enter Note Name" name="option1">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="required" >B</label>
                <input value="{{$data->option2 }}"  required type="text" class="form-control"    placeholder="Enter Note Name" name="option2">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="required" >C</label>
                <input value="{{$data->option3 }}"  required type="text" class="form-control"    placeholder="Enter Note Name" name="option3">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="required" >D</label>
                <input value="{{$data->option4 }}"  required type="text" class="form-control"    placeholder="Enter Note Name" name="option4">
            </div>
        </div>
        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="answere" class="required">Answere</label>
                                <select id="answere" required type="text" class="form-control"
                                    placeholder="Enter Answer" name="answere">
                                    <option  disabled> - Select Answer - </option>
                                    <option {{ $data->answere=="A"?"selected":""}}  value="A" >A</option>
                                    <option {{ $data->answere=="B"?"selected":""}} value="B" >B</option>
                                    <option {{ $data->answere=="C"?"selected":""}} value="C" >C</option>
                                    <option {{ $data->answere=="D"?"selected":""}} value="D" >D</option>
                                </select>
                            </div>
                        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="required" >Publish</label>
                <select id="" required type="text" class="form-control" class="form-control" name="is_publish" >
                    <option  disabled > - Select Type - </option>
                    <option {{ $data->is_publish=="yes"?"selected":""}} value="yes">Yes</option>
                    <option  {{ $data->is_publish=="no"?"selected":""}} value="no">No</option>
                </select>
            </div>
        </div>
    
     

        <div class="col-sm-12 text-center">
            <button type="button" onclick="ajaxCall('form_update')" class="btn btn-primary mt-2" >Update {{ $page }} </button>
        </div>

    </div>

</form>
