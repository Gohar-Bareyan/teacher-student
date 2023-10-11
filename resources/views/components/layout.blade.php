<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alertMessage = document.getElementById('alert-message');

            if (alertMessage) {
                // Show the alert
                alertMessage.classList.remove('hidden');

                // Hide the alert after 10 seconds (10000 milliseconds)
                setTimeout(function () {
                    alertMessage.classList.add('opacity-0');
                }, 3000);

                // Remove the alert from the DOM after the fade-out animation
                alertMessage.addEventListener('transitionend', function () {
                    alertMessage.remove();
                });
            }
        });
    </script>

    <title>Teacher Student</title>
</head>
<body>
<div class="w-full bg-gray-200 h-20 flex justify-center content-center">
    <nav class="m-auto">
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href={{route('home')}} class="hover:text-blue-500">
                    Home
                </a>
            </li>
            <li>
                <a href={{route('teachers.create')}} class="hover:text-blue-500">
                    Add Teacher
                </a>
            </li>
            <li>
                <a href={{route('groups.create')}} class="hover:text-blue-500">
                    Add Group
                </a>
            </li>
            <li>
                <a href={{route('students.create')}} class="hover:text-blue-500">
                    Add Student
                </a>
            </li>
            <li>
                <a href={{route('groups.index')}} class="hover:text-blue-500">
                    All Groups
                </a>
            </li>
        </ul>
    </nav>
</div>

<main>
    {{$slot}}
</main>

</body>
</html>
