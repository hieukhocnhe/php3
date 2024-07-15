<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <h1 class="text-5xl font-extrabold dark:text-white text-center py-7">Danh sách sách</h1>

    <div class="py-7 ps-11"> <a href="{{ route('book.create') }}"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Thumbnail
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Publisher
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Publication
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Function
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $book->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->title }}
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" class="w-16 h-16 mx-auto">
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->author }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->publisher }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->publication }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->name }}
                        </td>

                        <td class="px-6 py-4 text-right flex space-x-1">
                            <a href="{{ route('book.edit', $book->id) }}"
                                class="btn btn-primary focus:outline-none text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</a>
                            <form action="{{ route('book.destroy', $book->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-secondary focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
