<x-layout>
    <p class="text-center mt-20 text-xl font-bold">
        Teacher: {{$group->teachers->name }} {{$group->teachers->surname}}</p>
    <p class="text-center mt-20 text-xl font-bold">
        Students:
        @foreach($group->students as $student)
            {{ $student->name }} {{ $student->surname }}
            @if (!$loop->last)
                ,
            @endif
        @endforeach
    </p>
</x-layout>
