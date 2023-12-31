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

                                <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                                data-target="#myModal"><i class="las la-plus mr-3"></i>Import {{ $page }}</a>
                                <a target="_blank" class="btn btn-primary add-list btn-sm text-white" href="{{ route('generate.print')}}"  ><i class="las la-print mr-3"></i>Print {{ $page }}</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" datatable table   table-striped ">
                                        <thead>
                                            <tr class="ligth">
                                            <tr>
                                                <th>S.no</th>
                                                <th>page</th>
                                                <th>data</th>
                                                <th>s_no</th>
                                                <th>loksabha_name</th>
                                                <th>assembly_name</th>
                                                <th>both</th>
                                                <th>part</th>
                                                <th>section</th>
                                                <th>epic</th>
                                                <th>nirwachan_name</th>
                                                <th>relative_name</th>
                                                <th>age</th>
                                                <th>house</th>
                                                <th>gender</th>
                                                <th>nirvachan_name_eng</th>
                                                <th>relative_name_eng</th>
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
                                                ajax: "{{ route('note.index') }}",

                                                columns: [{
                                                        data: 'DT_RowIndex',
                                                        name: 'DT_RowIndex'
                                                    },
                                                    {
                                                        data: 'page',
                                                        name: 'page'
                                                    },
                                                    {
                                                        data: 'data',
                                                        name: 'data'
                                                    },
                                                    {
                                                        data: 's_no',
                                                        name: 's_no'
                                                    },
                                                    {
                                                        data: 'loksabha_name',
                                                        name: 'loksabha_name'
                                                    },
                                                    {
                                                        data: 'both',
                                                        name: 'both'
                                                    },
                                                    {
                                                        data: 'part',
                                                        name: 'part'
                                                    },
                                                    {
                                                        data: 'section',
                                                        name: 'section'
                                                    },
                                                    {
                                                        data: 'epic',
                                                        name: 'epic'
                                                    },
                                                    {
                                                        data: 'nirwachan_name',
                                                        name: 'nirwachan_name'
                                                    },

                                                    {
                                                        data: 'relative_name',
                                                        name: 'relative_name'
                                                    },

                                                    {
                                                        data: 'age',
                                                        name: 'age'
                                                    },
                                                    {
                                                        data: 'house',
                                                        name: 'house'
                                                    },
                                                    {
                                                        data: 'gender',
                                                        name: 'gender'
                                                    },
                                                    {
                                                        data: 'nirvachan_name_eng',
                                                        name: 'nirvachan_name_eng'
                                                    },
                                                    {
                                                        data: 'relative_name_eng',
                                                        name: 'relative_name_eng'
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


        @include('note.insert')

        <!-- The Modal -->
        <div class="modal fade" id="edit">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h6 class="modal-title">Edit {{ $page }}</h6>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body" id="edit_form">

                    </div>
                </div>
            </div>
        </div>
        <!-- // model -->
    @endslot
</x-layout>
