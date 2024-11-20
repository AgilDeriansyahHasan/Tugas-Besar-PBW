<form action="{{ route('candidate.update', $candidate->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $candidate->nama }}" required>
    </div>
    <div>
        <label for="profile">Profile:</label>
        <input type="text" name="profile" id="profile" value="{{ $candidate->profile }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $candidate->description }}</textarea>
    </div>
    <button type="submit">Update</button>
</form>
