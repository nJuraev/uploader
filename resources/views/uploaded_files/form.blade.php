<form action="{{route('uploaded_files.store')}}" method="post" enctype="multipart/form-data">
<div class="row text-center">
        @csrf
        <div class="col-8">
            <div class="mb-3">
                <input class="form-control" type="file" id="formFile" name="file">
            </div>
        </div>
        <div class="col-4 text-left">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

</div>
</form>