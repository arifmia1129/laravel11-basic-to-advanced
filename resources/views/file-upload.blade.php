@extends('app')

@section('content')

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Upload your file</h3>
                </div>
               
                <div class="card-body">
                    <form action="{{ route('file-upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="Upload your file" >
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection