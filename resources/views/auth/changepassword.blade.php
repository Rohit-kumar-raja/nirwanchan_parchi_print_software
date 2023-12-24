<x-layout>
    @slot('title', 'Change Password')
    @slot('body')
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">{{ $page }} </h4>
                                </div>


                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">    <form id="updatepassword" action="{{ route('admin.auth_change_password') }}" method="POST">
                                        <div class="row">
                                            @csrf
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="required">Old Password</label>
                                                    <input required type="password" class="form-control" placeholder=""
                                                        name="old_password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="required">New Password</label>
                                                    <input required type="password" class="form-control" placeholder=""
                                                        name="password">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="required">Confirm New Password</label>
                                                    <input required type="password" class="form-control" placeholder=""
                                                        name="password_confirmation">

                                                </div>
                                            </div>

                                            <div class="col-sm-12 text-center">
                                                <button type="button" onclick="ajaxCall('updatepassword')"
                                                    class="btn btn-primary mt-2"> Update Password </button>
                                            </div>
                                        </div>
                                    </form></div>
                                    <div class="col-3"></div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->




    @endslot
</x-layout>
