<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing Excel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Laravel 10 Import Export Excel to Database Example - ItSolutionStuff.com
            </div>
            <div class="card-body">
                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                </form>

                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="3">
                            List Of Users
                            <a class="btn btn-warning float-end" href="{{ route('users.export') }}">Export User Data</a>
                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Sub PO No</th>
                        <th>Delivery Date</th>
                        <th>Hit Po No</th>
                        <th>Delivery Hit PO No</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Ratio</th>
                        <th>Quantity</th>
                        <th>Totoal Quantity</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->sub_po_no }}</td>
                            <td>{{ $user->delivery_date }}</td>
                            <td>{{ $user->hit_po_no }}</td>
                            <td>{{ $user->delivery_hit_po }}</td>
                            <td>{{ $user->color }}</td>
                            <td>{{ $user->size }}</td>
                            <td>{{ $user->ratio }}</td>
                            <td>{{ $user->qty }}</td>
                            <td>{{ $user->total_qty }}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

</html>
