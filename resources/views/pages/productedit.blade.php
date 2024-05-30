<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
                   initial-scale=1.0">
    <title>GeeksForGeeks</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/modal.css">

    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">GeeksForGeeks</div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        {{-- <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" alt="search-icon">
            </div>
        </div> --}}

        <div class="message">
            <div class="circle"></div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn"
                alt="">
            <div class="dp">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" alt="dp">
            </div>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3> Products</h3>
                    </div>

                    <div class="option2 nav-option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" alt="articles">
                        <h3> Users</h3>
                    </div>

                    {{-- <div class="nav-option option3">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" alt="report">
                        <h3> Report</h3>
                    </div>

                    <div class="nav-option option4">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img" alt="institution">
                        <h3> Institution</h3>
                    </div> --}}

                    <div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" alt="blog">
                        <h3> Profile</h3>
                    </div>

                    {{-- <div class="nav-option option6">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img" alt="settings">
                        <h3> Settings</h3>
                    </div> --}}

                    <div class="nav-option logout">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" alt="logout">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                <h3>{{ __('Logout') }} </h3>
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main">
            <h3>Edit Product</h3>

            <div class="report-container">
                <form method="POST" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" placeholder="">

                    <label for="category">Category</label>
                    <select id="category" name="category" value="{{ $product->category }}">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="" value="{{ $product->price }}">

                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="" style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
