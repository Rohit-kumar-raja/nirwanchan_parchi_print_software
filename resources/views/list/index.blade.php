<x-layout>
    @slot('title', $page)
    @slot('body')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">


                            <div class="card-header row justify-content-between py-0">
                                <div class="header-title col-1">


                                    <h5 class="card-title">{{ $page }} List</a></h5>
                                    {{-- <div class="selectedDiv"> Selected row are: </div> --}}
                                </div>



                            </div>



                            <div class="card-header row justify-content-between py-0">




                                {{-- Drop Down Added --}}
                                <div class="col-12">
                                    <form action="{{ route('print.table') }}" id="print_list_table" target="_blank">
                                        @csrf
                                        <div class="row gap-3">
                                            <div class="col-sm-3">
                                                <label class="m-0" for="">Assembly Name</label>
                                                <select
                                                    onchange="selectDrop('print_list_table','{{ route('print.list.get.section') }}','section')"
                                                    name="assembly_name" class="form-control form-control-sm">
                                                    @foreach ($assembly as $ass)
                                                        <option value="{{ $ass->assembly_name }}">
                                                            {{ $ass->assembly_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="m-0" for="">Section Name</label>
                                                <select id="section" name="section" class="form-control form-control-sm">
                                                    <option value="all">All</option>
                                                    @foreach ($section as $sec)
                                                        <option value="{{ $sec->section }}">
                                                            {{ $sec->section }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="m-0" for="">Print For label</label>
                                                <input name="print_for_label" placeholder="Enter the label for print"
                                                    class="form-control form-control-sm btn-sm btn">

                                            </div>

                                            <div class="col-3 pt-2">
                                                <button type="submit"
                                                    class="btn btn-primary add-list btn-sm text-white mt-3 "><i
                                                        class="fas fa-download mr-3"></i>Download
                                                    {{ $page }}</button>
                                            </div>
                                            <input type="hidden" id="selected_item" name="selected_item">
                                        </div>

                                    </form>
                                </div>
                                {{-- DropDown Button Ended --}}


                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" datatable table table-striped " id="tblData">
                                        <thead>
                                            <tr class="light">
                                            <tr>
                                                <th>

                                                </th>
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
                                                        orderable: false,
                                                        searchable: false,
                                                        data: 'id',
                                                        name: 'id',
                                                        render(h) {

                                                            return '<input onclick="selectedRows(this)" type="checkbox"  name="" value="' +
                                                                h + '" class="allchecked" id="chkall" /> ';
                                                        },
                                                    },

                                                    {
                                                        data: 'DT_RowIndex',
                                                        name: 'DT_RowIndex',
                                                        orderable: false,
                                                        searchable: false
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
                                                        data: 'assembly_name',
                                                        name: 'assembly_name'
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
            <div class="modal-dialog modal-dialog-scrollabel">
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

<script>
    var sleecte_arr = [];

    function selectedRows(data) {
        if (data.checked) {
            sleecte_arr.push(data.value)
        } else {
            sleecte_arr = sleecte_arr.filter(function(item) {
                return item !== data.value
            })
        }

        document.querySelector('#selected_item').value = sleecte_arr.toString()
    }
</script>
