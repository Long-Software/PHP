<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Package</title>
    <style>
        table,tr,td {
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>

<body>
    @if ($data)
        <table>
            <tr>
                <th>Package Name</th>
                <th>Package Price</th>
                <th>Package Start Date</th>
                <th>Package End Date</th>
                <th>Package Total Days</th>
                <th>Package Picture</th>
            </tr>
            @foreach ($data as $dt)
                <tr>
                    <td>{{ $dt->package_name }}</td>
                    <td>{{ $dt->price }}</td>
                    <td>{{ $dt->start }}</td>
                    <td>{{ $dt->end }}</td>
                    <td>{{ $dt->total_day }}</td>
                    <td><img src="" alt="pic"></td>
                    <td><a href="{{ route('tour.edit', $dt->id) }}">Edit</a><a href="{{ route('tour.delete', $dt->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    @endif
    <p style="text-align: center;"><a href="{{ route('tour.create') }}">Add</a></p>
</body>

</html>