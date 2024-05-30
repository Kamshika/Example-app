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

            <div class="searchbar2">
                <input type="text" name="" id="" placeholder="Search">
                <div class="searchbtn">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" alt="search-button">
                </div>
            </div>

            <div class="box-container">

                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Article Views</h2>
                    </div>

                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views">
                </div>

                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Likes</h2>
                    </div>

                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
                </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Comments</h2>
                    </div>

                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Published</h2>
                    </div>

                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png"
                        alt="published">
                </div>
            </div>

            <div class="report-container">
                @if (\Session::has('delete'))
                    <div class="alert alert-danger fade-message">
                        <p>{{ \Session::get('delete') }}</p>
                    </div><br />

                    <script>
                        $(function() {
                            setTimeout(function() {
                                $('.fade-message').slideUp();
                            }, 2000);
                        });
                    </script>
                @endif
                <div data-role="main" class="ui-content">
                    <form method="get" action="{{ route('dashboard') }}">
                        <div data-role="rangeslider">
                            <label for="price-min">Price:</label>
                            <input type="range" name="price_min" id="price-min" value="{{ $price_min }}"
                                min="0" max="1000">
                            <label for="price-max">Price:</label>
                            <input type="range" name="price_max" id="price-max" value="{{ $price_max }}"
                                min="0" max="1100">
                        </div>
                        <input type="submit" data-inline="true" value="Submit">
                    </form>
                </div>
                <div class="report-header">
                    <h1 class="recent-Articles">Products</h1>
                    <form action="/product-add" method="GET">
                        <button class="view">
                            Add
                        </button>
                    </form>
                </div>

                <div class="report-body">
                    <div class="report-topic-heading">
                        <h3 class="t-op">Product ID</h3>
                        <h3 class="t-op">Name</h3>
                        <h3 class="t-op">Category</h3>
                        <h3 class="t-op">Price</h3>
                        <h3 class="t-op">Action</h3>
                    </div>

                    <div class="items">
                        @foreach ($product as $row)
                            <div class="item1">
                                <h3 class="t-op-nextlvl">{{ $row->id }}</h3>
                                <h3 class="t-op-nextlvl">{{ $row->name }}</h3>
                                <h3 class="t-op-nextlvl">{{ $row->category }}</h3>
                                <h3 class="t-op-nextlvl">{{ $row->price }}</h3>
                                <h3 class="t-op-nextlvl">
                                    <a href="{{ route('product.edit', $row->id) }}" id="view"><i
                                            class="fa fa-edit" data-toggle="tooltip" title="view"
                                            style="color: #4261f9;"></i></a>&nbsp; &nbsp;
                                    <a href="{{ URL::to('product-' . $row->id) }}" onclick="confirmation(event)"
                                        id="{{ $row->id }}" class="deletebtn"><i class="fa fa-trash-o"
                                            data-toggle="tooltip" title="Delete" style="color: red;"></i></a>
                                </h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                    title: "Are you sure to Delete this item",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./assets/js/script.js"></script>

</body>

</html>
