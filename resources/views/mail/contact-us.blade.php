<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>

<body>
    <div class="mb-4 p-6 text-gray-900">

        {{-- Message Details name,email ,phone,message --}}
        <h3 class="font-bold text-lg mb-2">Name:</h3>
        <p>{{ $data['name'] }}</p>
        <h3 class="font-bold text-lg mb-2">Email:</h3>
        <p>{{ $data['email'] }}</p>
        <h3 class="font-bold text-lg mb-2">Phone:</h3>
        <p>{{ $data['phone'] }}</p>
        <h3 class="font-bold text-lg mb-2">Message:</h3>
        <p>{{ $data['message'] }}</p>

    </div>
</body>

</html>
