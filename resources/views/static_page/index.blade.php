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

                                <a class="btn btn-primary add-list btn-sm text-white"
                                    href="{{ route('static-page.create') }}"><i class="las la-plus mr-3"></i>Add
                                    {{ $page }}</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" datatable table   table-striped ">
                                        <thead>
                                            <tr class="ligth">
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Type</th>
                                                <th>Description</th>
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
                                                ajax: "{{ route('static-page.index') }}",

                                                columns: [{
                                                        data: 'DT_RowIndex',
                                                        name: 'DT_RowIndex'
                                                    },
                                                    {
                                                        data: 'title',
                                                        name: 'title'
                                                    },

                                                    {
                                                        data: 'type',
                                                        name: 'type'
                                                    },

                                                    {
                                                        data: 'description',
                                                        name: 'description',
                                                    },
                                                    {
                                                        data: 'action',
                                                        name: 'action',
                                                        orderable: true,
                                                        searchable: true
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


        <!-- The Modal -->
        <div class="modal fade" id="edit">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
