<x-layout>
    @slot('title', 'Settings')
    @slot('body')
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h6 class="card-title">Edit {{ $page }} </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form id="form_update" method="POST"
                                        action="{{ route('setting.update', $companies->id) }}">
                                        <div class="row">
                                            @csrf
                                            @method('put')
                                            <div class="col-sm-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    name="name" value="{{ $companies->name }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Area</label>
                                                <input type="text" class="form-control" placeholder="Enter Area"
                                                    name="area" value="{{ $companies->area }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="Enter City"
                                                    name="city" value="{{ $companies->city }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>District</label>
                                                <input type="text" class="form-control" placeholder="Enter District"
                                                    name="discrict" value="{{ $companies->discrict }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>State</label>
                                                <input type="text" class="form-control" placeholder="Enter State"
                                                    name="state" value="{{ $companies->state }}">
                                            </div>


                                            <div class="col-sm-6">
                                                <label>Pincode</label>
                                                <input type="text" class="form-control" placeholder="Enter Pincode"
                                                    name="pincode" value="{{ $companies->pincode }}">
                                            </div>

                                            <div class="col-sm-6">
                                             <div class="form-group">
                                                <label>Phone</label>
                                                <input required type="number" class="form-control"
                                                    placeholder="Enter Phone" name="phone"
                                                    value="{{ $companies->phone }}">
                                             </div>
                                            </div>

                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Mobile</label>
                                                <input required type="tel" class="form-control"
                                                    placeholder="Enter Mobile" name="mobile"
                                                    value="{{ $companies->mobile }}">
                                              </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Email"
                                                    name="email" value="{{ $companies->email }}">
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="url" class="form-control" placeholder="Enter Website"
                                                        name="website" value="{{ $companies->website }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>TIN</label>
                                                <input type="text" class="form-control" placeholder="Enter TIN"
                                                    name="tin" value="{{ $companies->tin }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>PAN</label>
                                                <input type="text" class="form-control" placeholder="Enter PAN"
                                                    name="pan" value="{{ $companies->pan }}">
                                            </div>

                                            {{--Below are added new--}}
                                            <div class="col-sm-6">
                                                <label>App Store Link</label>
                                                <input type="text" class="form-control" placeholder="Enter App Store Link" name="app_store_link" value="{{ $companies->tin }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Play Store Link</label>
                                                <input type="text" class="form-control" placeholder="Enter Play store link" name="play_store_link" value="{{ $companies->tin }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Social Login Is</label>
                                                <input type="text" class="form-control" placeholder="Enter Socal Login is" name="social_login_is" value="{{ $companies->tin }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" placeholder="Enter Facebook" name="facebook" value="{{ $companies->tin }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" placeholder="Enter Instagram" name="instagram" value="{{ $companies->instagram }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" placeholder="Enter Twitter" name="twitter" value="{{ $companies->twitter }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Youtube</label>
                                                <input type="text" class="form-control" placeholder="Enter Youtube" name="youtube" value="{{ $companies->youtube }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Linkedin</label>
                                                <input type="text" class="form-control" placeholder="Enter Linkedin" name="linkedin" value="{{ $companies->linkedin }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Pintest</label>
                                                <input type="text" class="form-control" placeholder="Enter Pintest" name="pintest" value="{{ $companies->pintest }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Platform Charge</label>
                                                <input type="text" class="form-control" placeholder="Enter Platform Charge" name="platform_charge" value="{{ $companies->platform_charge }}">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Icon</label>

                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <input onchange="image_check(this, 100)" title="upload icon images"
                                                            class="form-control" type="file" name="icon">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img class="img-fluid" height="10" src="{{asset('../'.$companies->icon)}}" alt="">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Logo</label>
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <input onchange="image_check(this, 100)" title="upload logo images"
                                                            class="form-control" type="file" name="logo">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img class="img-fluid" height="10" src="{{asset('../'.$companies->logo)}}" alt="">
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                        <hr>
                                        <div class="col-sm-12 text-center p-2">
                                            <button type="button" onclick="ajaxCall('form_update')"
                                                class="btn btn-primary mt-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endslot
</x-layout>
