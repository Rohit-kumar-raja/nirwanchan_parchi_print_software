<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{ $doctor-> id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">doctor View Detail</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        @csrf

                        <div class="col-sm-4">
                            <label>doctor ID</label>
                            <input type="text" class="form-control" placeholder="Enter doctor ID" name=" empid" readonly value="{{$doctor->empid}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" name=" name" readonly value="{{$doctor->name}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Area</label>
                            <input type="text" class="form-control" placeholder="Enter Area" name=" area" readonly value="{{$doctor->area->name}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Applying For Position</label>
                            <input type="text" class="form-control" placeholder="Enter Applying For Position" name=" position"  readonly value="{{$doctor->position}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Father Name</label>
                            <input type="text" class="form-control" placeholder="Enter Father Name" name=" fathername"  readonly value="{{$doctor->fathername}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" placeholder="Enter Phone Number" name=" mobile"  readonly value="{{$doctor->mobile}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Marital Status</label>
                            {{-- <input type="text" class="form-control" placeholder="Enter Marital Status" name=" maritalstatus" readonly value="{{$doctor->maritalstatus}}">  --}}
                            <select name="maritalstatus" class="form-control">
                                <option selected readonly value="{{ $doctor->maritalstatus }}">{{ $doctor->maritalstatus }}</option>

                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>DOB</label>
                            <input type="date" class="form-control" placeholder="Enter DOB" name=" dob" readonly value="{{$doctor->dob}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Place Of Birth</label>
                            <input type="text" class="form-control" placeholder="Enter Place Of Birth" name=" placebirth"  readonly value="{{$doctor->placebirth}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Qualification</label>
                            <input type="text" class="form-control" placeholder="Enter Qualification" name=" qualification" readonly value="{{$doctor->qualification}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Experience</label>
                            <input type="text" class="form-control" placeholder="Enter Experience" name=" exp" readonly value="{{$doctor->exp}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Last setting</label>
                            <input type="text" class="form-control" placeholder="Enter Last setting" name=" lastsetting" readonly value="{{$doctor->lastsetting}}">
                        </div>

                        <div class="col-sm-4">
                            <label>PAN NO</label>
                            <input type="text" class="form-control"  placeholder="Enter PAN NO" name=" pan_no" value="{{ $doctor->pan_no }}" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label> Adhar No</label>
                            <input type="number" class="form-control"  placeholder="Enter Adhar No" name=" adhar_no" value="{{ $doctor->adhar_no }}" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label> Bank Name</label>
                            <input type="text" class="form-control"  placeholder="Enter Bank Name" name=" bank_name" value="{{ $doctor->bank_name }}" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label> Bank Act No</label>
                            <input type="number" class="form-control"  placeholder="Enter Bank Act No" name=" back_act_num" value="{{ $doctor->back_act_num }}" readonly>
                        </div>


                        <div class="col-sm-4">
                            <label>Photo</label>
                            <input type="file" class="form-control-file border" name=" photo" >
                        </div>

                        <div class="col-sm-4">
                            <label>Adhar</label>
                            <input type="file" class="form-control-file border" name=" adhar">
                        </div>

                        <div class="col-sm-4">
                            <label>PAN</label>
                            <input type="file" class="form-control-file border" name=" pan">
                        </div>

                        <div class="col-sm-4">
                            <label>Passbook</label>
                            <input type="file" class="form-control-file border" name=" passbook">
                        </div>


                        <div class="col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option readonly value="{{$doctor->status}}">{{$doctor->status}}</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>


                        <div class="col-sm-8">
                            <label>Address</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address" readonly >{{$doctor->address}}</textarea>
                        </div>


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->
