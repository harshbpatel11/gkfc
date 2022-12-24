@include('gkfc.layout.header')
@include('gkfc.layout.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('product') }}">Product</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <form method="POST" action="{{ route('productstore') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            @if (isset($product) && $product)
                                <input hidden="true" type="text" name="id" value="{{ $product->id }}">
                            @endif

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <select name="category_id" class="custom-select form-control-border"
                                            id="exampleSelectBorder">
                                            <option value="">Select Category</option>
                                            @foreach ($category as $item)
                                                @if (isset($product) && $product->category_id)
                                                    <option {{ $product->category_id == $item->id ? 'selected' : '' }}
                                                        value="{{ $item->id }}">{{ $item->categoriesname }}</option>
                                                @else
                                                    <option {{ old('category_id') == $item->id ? 'selected' : '' }}
                                                        value="{{ $item->id }}">{{ $item->categoriesname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input name="name" type="text" class="form-control"
                                            id="exampleInputEmail1"
                                            value="{{ old('name', isset($product) && $product->name ? $product->name : '') }}"
                                            placeholder="Enter Product Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Description</label>
                                    <textarea name="productdescription" id="summernote">
                                        {{ old('productdescription', isset($product) && $product->productdescription) ? $product->productdescription : '' }}                                     
                                    </textarea>
                                    @error('productdescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            @if (isset($product) && $product->productimage)
                                                <img for="exampleInputFile" width="100" height="100" id="blah"
                                                    src="{{ asset('uploads/' . $product->productimage) }}"
                                                    alt="" />
                                            @else
                                                <img for="exampleInputFile" width="100" height="100" id="blah"
                                                    src="#" alt="" />
                                            @endif
                                        </div>
                                        <div class="input-group col-md-9">
                                            <div class="custom-file">
                                                <input name="productimage" type="file" accept="image/*"
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
