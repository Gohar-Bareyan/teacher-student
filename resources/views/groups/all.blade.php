<x-layout>
    @if(session('student_added'))
        <div id="alert-message"
             class="fixed top-0 left-1/2 transform -translate-x-1/2 w-64 p-4 bg-green-800 border border-green-400 text-white rounded-lg shadow-lg transition-opacity duration-500">
            {{ session('student_added') }}
        </div>
    @endif

    @foreach($groups as $group)
        <ul>
            <li><a  class="text-blue-600" href={{route('groups.show', ['group' => $group])}}>{{$group->name}}</a></li>
        </ul>
    @endforeach
</x-layout>
