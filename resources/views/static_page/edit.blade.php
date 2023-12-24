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
                                    <h4 class="card-title">{{ $page }} Add</h4>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form id="form_update" action="{{ route('static-page.update', $data->id) }}" method="POST">
                                    <div class="row">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input required type="text" class="form-control" placeholder="Enter Title"
                                                    value="{{ $data->title }}" name="title">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Type</label>
                                                {{-- <input required type="text" class="form-control" placeholder="Enter Type"
                                                    name="type"  value="{{$data->type}}"> --}}
                                                <select required class="form-control" type="text" name="type">
                                                    <option selected disabled> -Select Days- </option>
                                                    <option
                                                        value="{{ 'About' }}"<?php if($data->type=='About'){?>@selected(true)<?php }?>>
                                                        {{ 'About' }} </option>
                                                    <option value="{{ 'Help Center' }}"
                                                        <?php if($data->type=='Help Center'){?>@selected(true)<?php }?>> {{ 'Help Center' }}
                                                    </option>
                                                    <option value="{{ 'Privacy Policy' }}"
                                                        <?php if($data->type=='Wednesday'){?>@selected(true)<?php }?>> {{ 'Privacy Policy' }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label> Description</label>
                                                <textarea required class="form-control ckeditor" placeholder="Enter Description" name="description">{{ $data->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <button  type="submit" class="btn btn-primary mt-2">Update
                                                {{ $page }}</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
    @endslot
</x-layout>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>





