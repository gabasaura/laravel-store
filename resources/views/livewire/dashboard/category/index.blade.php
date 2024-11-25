<div>
    <h1>LIST CATEGORIES</h1>
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">Title</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cat )
            <tr class="border-b">
                <td class="px-4 py-2">{{ $cat->title }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('d-category-edit', $cat) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>