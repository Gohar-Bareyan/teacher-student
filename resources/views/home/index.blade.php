<x-layout>
    <div id="clock" class="text-end text-lg mt-4"></div>
    <div id="date" class="text-end text-lg"></div>

    <script>
        function updateClock() {
            const now = new Date();
            const clockElement = document.getElementById('clock');
            const dateElement = document.getElementById('date');

            const time = now.toLocaleTimeString();
            const date = now.toLocaleDateString();

            clockElement.textContent = 'Time: ' + time;
            dateElement.textContent = 'Date: ' + date;
        }

        setInterval(updateClock, 1000); // Update the clock every second
        updateClock(); // Initial update
    </script>

    <div class="grid justify-center items-center mt-20">
        <p class="p-3"> The first few minutes of class are often the most chaotic, as students transition from busy areas such as the
            hallway or playground. Left unchecked, disruptions can become difficult to manage, but a proactive approach
            to classroom management can help students get focused and ready to learn. Rather than address disruptive
            behavior as it happens, proactive techniques—like greeting students at the door and modeling good
            behavior—reduce the occurrence of such behavior as teachers and students build a positive classroom culture
            together.</p>

        <p class="p-3">In the study, when teachers started class by welcoming students at the door, academic engagement increased by
            20 percentage points and disruptive behavior decreased by 9 percentage points—potentially adding “an
            additional hour of engagement over the course of a five-hour instructional day,” according to the
            researchers.</p>

        <p class="p-3">Teachers in the second group attended classroom management training sessions offered by their schools, but
            they weren’t given any specific instructions on how to start class.</p>

        <img src="{{ asset('/images/main_image.jpg') }}" class="m-auto"/>
    </div>
</x-layout>
