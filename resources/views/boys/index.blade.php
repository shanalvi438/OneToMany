<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <div
                class="table-responsive"
            >
                <table
                    class="table table-warning"
                >
                    <thead>
                        <tr>
                            <th scope="col" class="col-md-6">name</th>
                            <th scope="col">Girls Name</th>
                            <th scope="col" class="col-md-3">action</a></th>
                            <th scope="col" class="col-md-3">action &nbsp; <a href="{{ route('girls.create') }}">Add Record</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($boys as $item)
                        <tr class="">
                            <td scope="row">{{$item->name}}</td>
                            <td>{{$item->girl->name}}</td>
                            <td>R1C3</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>    
            </div>            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
