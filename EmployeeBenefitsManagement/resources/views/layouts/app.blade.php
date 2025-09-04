
<!DOCTYPE html>
<html>
    <head>
        <title>Employee Benefits Management System</title>
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color:rgb(231, 230, 230);
                color: #333;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                /* width: 100%; */
                min-height: 100vh;
            }
            nav ul{
                list-style-type: none;
                padding: 0;
                margin: 0;
                background-color: rgb(105, 105, 105);
                overflow: hidden;
                display: flex;
                justify-content: center;
            }
            nav ul li {
                float: left;
                padding: 14px 20px;
            }
            nav ul li a {
                color: white;
                text-decoration: none;
                text-align: center;
            }
            
            .container {
                display : flex;
                flex: 1;
                width: 100%;
                margin:0;
                padding: 0;
                /* max-width: 80px; */
                /* margin: auto;
                background: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1); */
            }
            .sidebar {
                width: 13%;
                background-color: #f8f8f8;
                padding: 20px;
                border-right: 1px solid #ddd;
            }
            .main-content{
                flex: 1;
                padding: 20px;
                width: 80%;
            }
            footer {
                text-align: center;
                /* padding: 10px; */
                background-color: rgb(105, 105, 105);
                color: white;
                position: relative;
                bottom: 0;
                width: 100%;
            }
        </style>
        @yield('styles')
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="container">
            <aside class="sidebar">
                <h2>Sidebar</h2>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </aside>
            <main class="main-content">
                @yield('content')
            </main>
        </div>
        <footer>
            <p>&copy; 2025 Employee Benefits Management System.  Alrights reserved.</p>
        </footer>
    </body>
    @yield('scripts')
</html>