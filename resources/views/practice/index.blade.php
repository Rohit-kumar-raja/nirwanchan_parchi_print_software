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
                                    data-target="#myModal"><i class="las la-plus mr-3"></i>Add {{ $page }}</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" datatable table   table-striped ">
                                        <thead>
                                            <tr class="ligth">
                                                <th>S.No</th>
                                                <th>Language</th>
                                                <th>Question</th>
                                                <th>A</th>
                                                <th>B</th>
                                                <th>C</th>
                                                <th>D</th>
                                                <th>Answer</th>
                                                <th>Publish</th>
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
                                                ajax: "{{ route('practice.index') }}",

                                                columns: [{
                                                        data: 'DT_RowIndex',
                                                        name: 'DT_RowIndex'
                                                    },
                                                    {
                                                        data: 'category.name',
                                                        name: 'category.name'
                                                    },
                                                    {
                                                        data: 'questions',
                                                        name: 'questions'
                                                    },
                                                    {
                                                        data: 'option1',
                                                        name: 'option1'
                                                    },
                                                    {
                                                        data: 'option2',
                                                        name: 'option2'
                                                    },
                                                    {
                                                        data: 'option3',
                                                        name: 'option3'
                                                    },
                                                    {
                                                        data: 'option4',
                                                        name: 'option4'
                                                    },
                                                    {
                                                        data: 'answere',
                                                        name: 'answere'
                                                    },
                                                    {
                                                        data: 'is_publish',
                                                        name: 'is_publish',
                                                        render(h) {
                                                            if (h == 'yes') {
                                                                return '<span class="text-success text-capitalize">' + h + '</span>';
                                                            } else {
                                                                return '<span class="text-warning text-capitalize">' + h + '</span>';

                                                            }
                                                        },
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


        @include('practice.insert')

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
