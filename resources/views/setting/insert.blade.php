<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page}}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/setting/save">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="created_at" value="{{ date('Y-m-d h:i:s') }}">
                        <div class="col-sm-6">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>

                        <div class="col-sm-6">
                            <label>Area</label>
                            <input type="text" class="form-control" placeholder="Enter Area" name="area">
                        </div>

                        <div class="col-sm-6">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="Enter City" name="city">
                        </div>

                        <div class="col-sm-6">
                            <label>District</label>
                            <input type="text" class="form-control" placeholder="Enter District" name="discrict">
                        </div>

                        <div class="col-sm-6">
                            <label>State</label>
                            <input type="text" class="form-control" placeholder="Enter State" name="state">
                        </div>


                        <div class="col-sm-6">
                            <label>Pincode</label>
                            <input type="number" class="form-control" placeholder="Enter Pincode" name="pincode">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone</label>
                            <input type="number" class="form-control" placeholder="Enter Phone" name="phone">
                        </div>

                        <div class="col-sm-6">
                            <label>Mobile</label>
                            <input type="tel" class="form-control" placeholder="Enter Mobile" name="mobile">
                        </div>

                        <div class="col-sm-6">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email">
                        </div>


                        <div class="col-sm-6">
                            <label>Website</label>
                            <input type="url" class="form-control" placeholder="Enter Website" name="website">
                        </div>

                        <div class="col-sm-6">
                            <label>TIN</label>
                            <input type="text" class="form-control" placeholder="Enter TIN" name="tin">
                        </div>

                        <div class="col-sm-6">
                            <label>PAN</label>
                            <input type="text" class="form-control" placeholder="Enter PAN" name="pan">
                        </div>
                    </div>
                    <hr>

                    <div class="col-sm-12 text-center p-2">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
