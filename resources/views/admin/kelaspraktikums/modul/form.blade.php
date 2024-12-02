<form action="{{ $action }}" method="POST">
    @csrf
    @if ($isEdit)
        @method('PUT')
    @endif
    <div class="mb-4">
        <label for="nama_modul" class="block text-sm font-medium text-gray-700">Nama Modul</label>
        <input type="text" name="nama_modul" id="nama_modul" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('nama_modul', $modul->nama_modul ?? '') }}" required>
    </div>

    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <textarea name="content" id="content" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>{{ old('content', $modul->content ?? '') }}</textarea>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
            @if ($isEdit) Update Modul 
            @else Simpan Modul 
            @endif
        </button>
    </div>
</form>
