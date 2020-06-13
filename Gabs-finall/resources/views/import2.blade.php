

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Search Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
        <div class="container">
        <br>
            <form action="ViewPages" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                <div class="row">
                <label for="from" class="col-form-label">From</label>
                    <div class="col-md-2">
                    <input type="date" class="form-control input-sm" id="from" name="from">
                    </div>
                    <label for="from" class="col-form-label">To</label>
                    <div class="col-md-2">
                        <input type="date" class="form-control input-sm" id="to" name="to">
                    </div>
                    
                    <div class="col-md-4">
                       <button type="submit" class="btn btn-primary btn-sm" name="search" >Search</button>
                        <button type="submit" class="btn btn-secondary btn-sm" name="exportPDF">export PDF</button>
                        <button type="submit" class="btn btn-success btn-sm" name="exportExcel">export Excel</button>

                    </div>
                </div>
            </div>
            </form>
            <br>
            <table class="table table-dark">
                <tr>
                <th>id</th>
                <th>date</th>
                <th>date_debut</th>
                <th>date_fin</th>
               
                </tr>
                @foreach ($ViewsPage as $ViewsPages)
                    <tr>
                        <td>{{ $ViewsPages->id }}</td>
                        <td>{{ $ViewsPages->name }}</td>
                        <td>{{ $ViewsPages->email }}</td>
                        <td>{{ $ViewsPages->email_verified_at }}</td>
                        <td>{{ $ViewsPages->created_at }}</td>
                        <td>{{ $ViewsPages->created_at }}</td>
                       
                    </tr>
                @endforeach
            </table>
</div>
</body>
</html>