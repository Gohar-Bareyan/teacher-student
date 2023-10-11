<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add a teacher
            </h2>
        </header>

        <form method="POST" action={{route('teachers.store')}}>
            @csrf

            <div class="mb-3">
                <label for="name" class="inline-block text-lg mb-2">Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{old('name')}}"
                />
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="surname" class="inline-block text-lg mb-2">Surname</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="surname"
                    value="{{old('surname')}}"
                />
                @error('surname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <button
                    type="submit"
                    class="bg-green-500 text-white rounded py-2 px-10 hover:bg-green-300"
                >
                    Add
                </button>
            </div>
        </form>
    </div>
</x-layout>
