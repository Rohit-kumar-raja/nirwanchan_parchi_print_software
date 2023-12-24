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
                                @if (session('save'))
                                    <div class="alert alert-success">
                                        {{ session('save') }}
                                    </div>
                                @endif
                                @if (session('delete'))
                                    <div class="alert alert-danger">
                                        {{ session('delete') }}
                                    </div>
                                @endif
                                @if (session('update'))
                                    <div class="alert alert-success">
                                        {{ session('update') }}
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-secondary">
                                        {{ session('status') }}
                                    </div> 
                                @endif
                                @if (session('status1'))
                                    <div class="alert alert-success">
                                        {{ session('status1') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table id="datatable" class="table data-tables table-striped">
                                        <thead>
                                            <tr class="ligth">
                                                <th>S.no</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>empid</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($feedback as $feedback)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $feedback->subject }}</td>
                                                    <td>{{ $feedback->description }}</td>
                                                    <td>{{ $feedback->empid }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center list-action">
                                                            <a class="badge badge-info mr-2" data-toggle="modal"
                                                                data-target="#myModal_view{{ $feedback->id }}">
                                                                <i class="fa fa-eye  mr-0"></i></a>

                                                            <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Delete"
                                                                {{-- onclick="deleteRow('edit{{ $feedback->id }}','delete{{ $feedback->id }}')"  --}}
                                                                href="{{ route('feedback.destroy', $feedback->id )}}">
                                                                <i class="fa fa-trash mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
 
                                                @include('feedback.view')
                                            @endforeach
                                        </tbody>
                                  
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('feedback.insert')
    @endslot
</x-layout>
