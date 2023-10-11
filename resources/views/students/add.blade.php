<x-layout>
    @if(session('group_added'))
        <div id="alert-message"
             class="fixed top-0 left-1/2 transform -translate-x-1/2 w-64 p-4 bg-green-800 border border-green-400 text-white rounded-lg shadow-lg transition-opacity duration-500">
            {{ session('group_added') }}
        </div>
    @endif

    <div class="bg-gray-50 border border-gray-200 p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add a student
            </h2>
        </header>

        <form method="POST" action={{route('students.store')}}>
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
                <label for="Age" class="inline-block text-lg mb-2">Age</label>
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="Age"
                    value="{{old('Age')}}"
                />
                @error('Age')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="group_id" class="inline-block text-lg mb-2">Groups</label>
                <select
                    class="border border-gray-200 rounded p-2 w-full"
                    name="group_id">
                    @foreach($groups as $group)
                        <option value={{$group->id}}>{{$group->name}}</option>
                    @endforeach
                </select>

                @error('group_id')
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
