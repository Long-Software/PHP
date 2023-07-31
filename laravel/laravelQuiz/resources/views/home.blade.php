<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>

    <style>
        .flex {
            display: flex;
            margin: 5px;
        }
    </style>
</head>

<body>
    <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="flex">
            <span>Package Name: </span>
            <input type="text" name="package_name" placeholder="package name">
        </div>
        <div class="flex">
            <span>Package Price: </span>
            <input type="number" name="price" placeholder="package price">
        </div>
        <div class="flex">
            <span>Package Start Date: </span>
            <input type="date" name="start" placeholder="start date">
        </div>
        <div class="flex">
            <span>Package End Date: </span>
            <input type="date" name="end" placeholder="end date">
        </div>
        <div class="flex">
            <span>Package Total Days: </span>
            <input type="number" name="total_day">
        </div>
        <div class="flex">
            <input type="file" name="picture" placeholder="picture">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>