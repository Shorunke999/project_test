<div class=>
        <form action="{{ route('pics') }}" method="post" enctype="multipart/form-data">
            <div>
                <input type="file" name="profile_pics" id="profile_picture" class="form-control">profile picture
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
        <div >
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
    </div>
</div>
