@include('gkfc.layout.header')
@include('gkfc.layout.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallary</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('gallary') }}">Gallary</a></li>
                        <li class="breadcrumb-item active">Add Gallary</li>
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
                            <h3 class="card-title">Add Gallary</h3>
                        </div>
                        <form method="POST" action="{{ route('gallarystore') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            @if (isset($gallary) && $gallary)
                                <input hidden="true" type="text" name="id" value="{{ $gallary->id }}">
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gallary Name</label>
                                    <input name="gallaryname" type="text" class="form-control"
                                        id="exampleInputEmail1"
                                        value="{{ old('gallaryname', isset($gallary) && $gallary->gallaryname ? $gallary->gallaryname : '') }}"
                                        placeholder="Enter Gallary Name">
                                    @error('gallaryname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gallary Description</label>
                                    <textarea name="gallarydescription" id="summernote">
                                        {{ old('gallarydescription', isset($gallary) && $gallary->gallarydescription) ? $gallary->gallarydescription : '' }}                                     
                                    </textarea>
                                    @error('gallarydescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            @if (isset($gallary) && $gallary->gallaryimage)
                                                <img for="exampleInputFile" width="100" height="100" id="blah"
                                                    src="{{ asset('uploads/' . $gallary->gallaryimage) }}"
                                                    alt="" />
                                            @else
                                                <img for="exampleInputFile" width="100" height="100" id="blah"
                                                    src="#" alt="" />
                                            @endif
                                        </div>
                                        <div class="input-group col-md-9">
                                            <div class="custom-file">
                                                <input name="gallaryimage" type="file" accept="image/*"
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
