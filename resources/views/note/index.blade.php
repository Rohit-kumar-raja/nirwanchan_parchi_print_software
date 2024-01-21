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
                                <div class="col-2">
                                    <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                                        data-target="#myModal"><i class="las la-plus mr-3"></i>Import
                                        {{ $page }}</a>

                                </div>


                                {{-- Drop Down Added --}}
                                <div class="col-9">
                                    <form action="{{ route('generate.print') }}" target="_blank">

                                        <div class="row gap-3">

                                            <div class="col-3">
                                                <label class="m-0" for="">Print For label</label>
                                                <input name="print_for_label" placeholder="Enter the label for print"
                                                    class="form-control form-control-sm btn-sm btn">

                                            </div>

                                            <div class="col-sm-2">
                                                <label class="m-0" for="">Print Format</label>
                                                <select name="format" class="form-control form-control-sm btn-sm btn">
                                                    <option value="8">8 * 1</option>
                                                    <option value="10">10 * 1</option>
                                                    <option value="12">12 * 1</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="dropdown">

                                                    <label class="m-0" for="">Print For</label>
                                                    <select name="print_for" class=" form-control form-control-sm"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <option value="लोकसभा">लोकसभा</option>
                                                        <option value="नगर पालिका">नगर पालिका</option>
                                                        <option value="नागरनिगम">नागरनिगम</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="dropdown">
                                                    <label class="m-0" for="">Epic No.</label>
                                                    <select name="epic" class="form-control form-control-sm">
                                                        <option value="with">साथ</option>
                                                        <option value="without">बिना</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 ">
                                                <button type="submit"
                                                    class="btn btn-primary add-list btn-sm text-white mt-4 "><i
                                                        class="las la-print mr-3"></i>Print
                                                    {{ $page }}</button>
                                            </div>
                                            <input type="hidden" id="selected_item" name="selected_item">
                                        </div>

                                    </form>
                                </div>
                                {{-- DropDown Button Ended --}}


                            </div>



                            <div class="card-header row justify-content-between py-0">




                                {{-- Drop Down Added --}}
                                <div class="col-12">
                                    <form action="{{ route('print.table') }}"  target="_blank">

                                        <div class="row gap-3">
                                            <div class="col-sm-3">
                                                <label class="m-0" for="">Assembly Name</label>
                                                <select name="assembly_name" class="form-control form-control-sm">
                                                    @foreach ($data as $assembly)
                                                        <option value="{{ $assembly->assembly_name }}">
                                                            {{ $assembly->assembly_name }}</option>
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
                                                    class="btn btn-primary add-list btn-sm text-white mt-4 "><i
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
