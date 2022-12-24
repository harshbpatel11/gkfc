@include('gkfc.layout.header')
@include('gkfc.layout.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('category') }}">Category</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        <form method="POST" action="{{ route('categorystore') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            @if (isset($category) && $category)
                                <input hidden="true" type="text" name="id" value="{{ $category->id }}">
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input name="categoriesname" type="text" class="form-control"
                                        id="exampleInputEmail1"
                                        value="{{ old('categoriesname', isset($category) && $category->categoriesname ? $category->categoriesname : '') }}"
                                        placeholder="Enter Category Name">
                                    @error('categoriesname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Description</label>
                                    <textarea name="categoriesdescription" id="summernote">
                                        {{ old('categoriesdescription', isset($category) && $category->categoriesdescription) ? $category->categoriesdescription : '' }}                                     
                                    </textarea>
                                    @error('categoriesdescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            @if (isset($category) && $category->categoriesimage)
                                                <img for="exampleInputFile" width="100" height="100" id="blah"
                                                    src="{{ asset('uploads/' . $category->categoriesimage) }}"
                                                    alt="" />
                                            @else
                                                <img for="exampleInputFile" width="100" height="100" id="blah"
                                                    src="#" alt="" />
                                            @endif
                                        </div>
                                        <div class="input-group col-md-9">
                                            <div class="custom-file">
                                                <input name="categoriesimage" type="file" accept="image/*"
                                                    type='file' id="imgInp" class="custom-file-input">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('gkfc.layout.footer')
<script>
    $(function() {
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
        $('#summernote').summernote()
    })
</script>
