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
                                href="{{ route(Route::currentRouteName()=='blogs.index'?'blogs.create':'tutorial.create') }}"><i class="las la-plus mr-3"></i>Add
                                {{ $page }}</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" datatable table   table-striped ">
                                        <thead>
                                            <tr class="ligth">
                                                <th>S.No</th>
                                                <th>Language</th>
                                                <th>Title</th>
                                                <th>questions</th>
                                                <th>Created by</th>
                                                {{-- <th>Updated By</th> --}}
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
                                                ajax: "{{ route(Route::currentRouteName()) }}",

                                                columns: [{
                                                        data: 'DT_RowIndex',
                                                        name: 'DT_RowIndex'
                                                    },
                                                    {
                                                        data: 'category.name',
                                                        name: 'category.name'
                                                    },
                                                    {
                                                        data: 'title',
                                                        name: 'title'
                                                    },
                                                    {
                                                        data: 'questions',
                                                        name: 'questions'
                                                    },
                                                    {
                                                        data: 'creator.name',
                                                        name: 'creator.name'
                                                    },
                                                    // {
                                                    //     data: 'updator.name',
                                                    //     name: 'updator.name',
                                              
                                                        
                                                    // },
                                                  
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


  
        <!-- // model -->
    @endslot
</x-layout>
