<a href="{{ route('edit', $image->id) }}">
    <button
        class="shadow-lg bg-green-500 text-white px-3 py-1 rounded inline-block duration-200 active:bg-blue-500 active:text-green-500">
        <i class="fa fa-edit mr-1"></i>Edit
    </button>
</a>

<a href="{{ $url }}">
    <button class="shadow-lg bg-red-500 text-white px-3 py-1 rounded inline-block duration-200 active:text-red-500">
        <i class="fa fa-trash mr-1"></i>Delete
    </button>
</a>

<a href="{{ $url }}">
    <button
        class="shadow-lg bg-blue-500 text-white px-3 py-1 rounded inline-block uration-200 active:bg-green-500 active:text-blue-500">
        <i class="fa fa-upload mr-1"></i>Import
    </button>
</a>