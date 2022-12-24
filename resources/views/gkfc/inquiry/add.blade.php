@include('gkfc.layout.header')
@include('gkfc.layout.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inquiry</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('inquiry') }}">Inquiry</a></li>
                        <li class="breadcrumb-item active">Add Inquiry</li>
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
                            <h3 class="card-title">Add Inquiry</h3>
                        </div>
                        <form method="POST" action="{{ route('inquirystore') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            @if (isset($inquiry) && $inquiry)
                                <input hidden="true" type="text" name="id" value="{{ $inquiry->id }}">
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ old('fullname', isset($inquiry) && $inquiry->fullname ? $inquiry->fullname : '') }}"
                                        placeholder="Enter Full Name">
                                    @error('fullname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ old('subject', isset($inquiry) && $inquiry->subject ? $inquiry->subject : '') }}"
                                        placeholder="Enter Subject">
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="email" class="form-control"
                                            id="exampleInputEmail1"
                                            value="{{ old('email', isset($inquiry) && $inquiry->email ? $inquiry->email : '') }}"
                                            placeholder="Enter Full Name">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input name="phone" type="number" class="form-control"
                                            id="exampleInputEmail1"
                                            value="{{ old('phone', isset($inquiry) && $inquiry->phone ? $inquiry->phone : '') }}"
                                            placeholder="Enter Full Name">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="message" id="summernote">
                                        {{ old('message', isset($inquiry) && $inquiry->message) ? $inquiry->message : '' }}                                     
                                    </textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
        // imgInp.onchange = evt => {
        //     const [file] = imgInp.files
        //     if (file) {
        //         blah.src = URL.createObjectURL(file)
        //     }
        // }
        $('#summernote').summernote()
    })
</script>
