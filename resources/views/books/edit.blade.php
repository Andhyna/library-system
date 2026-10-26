@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">
            @error('title') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="author">Penulis:</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}">
            @error('author') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="category_id">Kategori:</label>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="year">Tahun Terbit:</label>
            <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}">
            @error('year') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="stock">Stok:</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock', $book->stock) }}">
            @error('stock') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button type="submit">
            Update
        </button>
    </form>
@endsection