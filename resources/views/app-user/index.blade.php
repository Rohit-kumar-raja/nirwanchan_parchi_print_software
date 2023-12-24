<x-layout>
    @slot('title', $page)
    @slot('body')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">{{ $page }} List</h4>
                                </div>
                                <!--<a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                                    data-target="#myModal"><i class="las la-plus mr-3"></i>Add {{ $page }}</a>-->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" datatable table   table-striped ">
                                        <thead>
                                            <tr class="ligth">
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Mobile</th>
                                                <th>DOB</th>
                                                <th>Email</th>
                                                <th>Blood Group</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

                                    <script type="text/javascript">
                                        $(function() {
                                            var i = 1;
                                            var table = $('.datatable').DataTable({
                                                processing: true,
                                                serverSide: true,
                                                ajax: "{{ route('app-users.index') }}",

                                                columns: [{
                                                        data: 'DT_RowIndex',
                                                        name: 'DT_RowIndex'
                                                    },
                                                    {
                                                        data: 'name',
                                                        name: 'name'
                                                    },

                                                    {
                                                        data: 'gender',
                                                        name: 'gender'
                                                    },
                                                    {
                                                        data: 'mobile',
                                                        name: 'mobile'
                                                    },
                                                    {
                                                        data: 'dob',
                                                        name: 'dob'
                                                    },
                                                    {
                                                        data: 'email',
                                                        name: 'email'
                                                    },
                                                    {
                                                        data: 'blood_group',
                                                        name: 'bloodgroup'
                                                    },
                                                    {
                                                        data: 'action',
                                                        name: 'action',
                                                        orderable: false,
                                                        searchable: false
                                                    },
                                                ]
                                            });

                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->


        @include('app-user.insert')

        <!-- The Modal -->
        <div class="modal fade" id="show">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h6 class="modal-title">Show {{ $page }}</h6>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body" id="show_form">

                    </div>
                </div>
            </div>
        </div>
        <!-- // model -->
    @endslot
</x-layout>
