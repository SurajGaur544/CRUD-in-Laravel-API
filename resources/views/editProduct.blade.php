

<h1>Product Update</h1>

<form action="/editData" method="post">
    @csrf

    @if($data)
        <input type="hidden" name="id" value={{ $data['id'] ?? '' }} /><br /><br />
        <input type="text" name="name" value="{{ $data['name'] ?? '' }}" /><br /><br />
        <input type="number" name="price" value={{ $data['price'] ?? '' }} /><br /><br />
        <input type="text" name="category" value="{{ $data['category'] ?? '' }}" /><br /><br />
    @else
        <p>Data not found.</p>
    @endif

    <button type="submit">Update</button>
</form>
