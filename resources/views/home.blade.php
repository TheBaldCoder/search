<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div>
            <h2><u>Search your item here:</u></h2>
        </div>

        {{-- Searchbar --}}
        <div class="my-4">
            <div class="input-group">
                <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search name or customer"
                        aria-label="Search" name="search" value="{{ isset($search) ? $search : '' }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>


        {{-- Table --}}
        <div class="my-3 table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Purchase Date</th>
                        <th scope="col">Delivered</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <th scope="row">{{ $item->name }}</th>
                            <td>{{ $item->customer }}</td>
                            <td>{{ $item->purchase_date->format('d-m-Y') }}</td>
                            <td>
                                @if ($item->delivered == 1)
                                    Delivered
                                @else
                                    Pending
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No items could be...</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
