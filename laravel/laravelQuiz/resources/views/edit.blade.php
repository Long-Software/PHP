<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <style>
        .flex {
            display: flex;
            margin: 5px;
        }

    </style>
</head>

<body>
    <form action="/tour/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="flex">
            <span>Package Name: </span>
            <input type="text" name="package_name" value="{{ $data->package_name }}">
        </div>
        <div class="flex">
            <span>Package Price: </span>
            <input type="number" name="price" value="{{ $data->price }}">
        </div>
        <div class="flex">
            <span>Package Start Date: </span>
            <input type="date" name="start" value="{{ $data->start }}">
        </div>
        <div class="flex">
            <span>Package End Date: </span>
            <input type="date" name="end" value="{{ $data->end }}">
        </div>
        <div class="flex">
            <span>Package Total Days: </span>
            <input type="number" name="total_day" value="{{ $data->total_day }}">
        </div>
        <div class="flex">
            <input type="file" name="picture" value="picture">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>