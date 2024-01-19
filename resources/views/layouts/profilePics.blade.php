<div class=>
    <div class="">
        Upload Profile Picture
    </div>
    <div class="card-body">
        @if(session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif

        <form action="{{ route('pics') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="profile_picture">Choose Profile Picture:</label>
                <input type="file" name="profile_picture" id="profile_picture" class="form-control">
                @error('profile_picture')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</div>
