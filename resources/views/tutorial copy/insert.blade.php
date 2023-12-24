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
                                <form action="{{ route(Route::currentRouteName()=='blogs.create'?'blogs.store':'tutorial.store') }}" enctype="multipart/form-data" method="POST">
                                    <div class="row">
                                        @csrf

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select required type="text" class="form-control" name="category_id">
                                                    <option selected disabled> - Select Category - </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input required type="text" class="form-control"
                                                    placeholder="Enter Title" name="title">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Question</label>
                                                <input required type="text" class="form-control"
                                                    placeholder="Enter questions" name="questions">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-4" id="main-container">
                                            <div class="editor mt-5">
                                                <input type="hidden" value="chapterContent" name="key[]">

                                                <textarea class="ckeditor" name="value[]"></textarea>
                                            </div>
                                            <br>
                                        </div>



                                        {{-- Dynamic add button start --}}
                                        <div class="btn-group justify-end mt-3">
                                            <button type="button" class="btn  py-2 btn-success rounded-circle"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item add-chapter-para  border-bottom" href="#"
                                                    data-add-to="#main-container"> <i class="fas fa-file-signature"></i>
                                                    Text</a>
                                                <a class="dropdown-item border-bottom" id="code" href="#"> <i
                                                        class="fas fa-code"></i>
                                                    Code</a>
                                                <a class="dropdown-item border-bottom" id="img" href="#"> <i
                                                        class="fas fa-image"></i>
                                                    Image</a>
                                            </div>
                                        </div>
                                        {{-- Dynamic add button end --}}
                                        <hr>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>keyword</label>
                                                <textarea placeholder="Please write some keyword sparated with coma(,) for seo purpose..." class="form-control"
                                                    name="keyword" id="" rows="5"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>description</label>
                                                <textarea placeholder="Please write some Description for seo purpose..." class="form-control" name="description"
                                                    id="" rows="5"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>og_description</label>
                                                <textarea class="form-control" placeholder="Please write some og_description  for seo purpose..." name="og_description"
                                                    id="" cols="10"></textarea>

                                            </div>
                                        </div>


                                        <hr />

                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary mt-2">Add
                                                {{ $page }}</button>
                                        </div>
                                    </div>


                            </div>




                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
    @endslot
</x-layout>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/ckeditor.append.js') }}"></script>

<link rel="stylesheet" href="{{ asset('codemirror/lib/codemirror.css') }}">
<script src="{{ asset('codemirror/lib/codemirror.js') }}"></script>
<script src="{{ asset('codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('codemirror/mode/js/javascript.js') }}"></script>
<script src="{{ asset('codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<script>
    var number = 1
    // for dynamic add code start
    $("#code").click(function() {
        $("#main-container").append(
            "<hr> <div class='removeCode'> <input type='hidden' value='code' name='key[]'> <textarea name='value[]' id='code" +
            number +
            "' class='border mt-4'></textarea>  <button class='btn btn-danger delete-editor mt-3'> <i class='fas fa-trash'></i> </button></div> "
        );

        var htmlEditor = CodeMirror.fromTextArea(document.getElementById("code" + number), {
            lineNumbers: true,
            mode: 'htmlmixed',
            theme: 'default',
        });
        number++;
    });
    // for dynamic add code end
    // for dynamic add images start
    var num = 1;
    $("#img").click(function() {
        $("#main-container").append(
            '<hr>  <div id="preview' + num +'" class="uploader  text-center  img-fluid " onclick="imgclick(' + num +')">click here or drag here yourimages for preview and set userprofile_picture data</div> <input type="hidden" value="image" name="key[]"><input type="file" name="value[]" id="filePhoto' +num +'"   hidden />  <button class="btn btn-danger delete-editor mt-3"> <i class="fas fa-trash"></i> </button>'
        );
        var imageLoader = document.getElementById('filePhoto' + num);
        imageLoader.addEventListener('change', handleImage, false);

        function handleImage(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
                $('#preview' + (num - 1)).html('<img height="400px"   src="' + event.target.result + '"/>');
            }
            reader.readAsDataURL(e.target.files[0]);
        }
        num++;

    });

    function imgclick(num) {
        $("#filePhoto" + num).click()
    }
    // for dynamic add images end
</script>

<style>
    .uploader {
        height: 400px;
        background: #f3f3f3;
        border: 2px dashed #e8e8e8;
    }
</style>
