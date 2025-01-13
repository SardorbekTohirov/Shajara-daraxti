<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <nav>
                <a href="/" id="logo">Umumiy shajara</a>
                <a href="{{route('profile')}}" id="profile"><img src="{{ asset('assets/images/profile.ico') }}" alt="" /></a>
            </nav>
        </header>
        <section>
            <article>
                <span id="add-member-btn">
                    <img src="{{ asset('assets/images/plus.ico') }}" alt="" />
                </span>

                <div>
                    <ul id="data">
                        <li>Ism Familya</li>
                        <li>Tug'ilgan yili</li>
                        <li>Vafot qilgan yili</li>
                    </ul>
                    <ul id="action">
                        <li><img src="{{ asset('assets/images/edit.ico') }}" alt="" id="family-edit-btn"></li>
                        <li><img src="{{ asset('assets/images/delete.ico') }}" alt="" id="family-delete-btn"></li>
                    </ul>
                </div>
                
                <!-- add member -->
                <span id="add-member-btn">
                    <img src="{{ asset('assets/images/plus.ico') }}" alt="" />
                </span>
            </article>
            
        </footer>


        <!-- modals -->
        <div id="family-edit">
            <span>
                <img src="{{asset('assets/images/back.ico')}}" alt="" />
                <p>Tahrirlash</p>
            </span>
            <form action="">
                <input type="text" name="" id="" placeholder="Ism(majburiy)">
                <input type="text" name="" id="" placeholder="Familya(majburiy)">
                <input type="date" name="" id="" placeholder="Tug'ilgan yili">
                <input type="date" name="" id="" placeholder="Vafot qilgan yili">
                <button type="submit">Saqlash</button>
            </form>
        </div>
    </main>

    <!-- script -->
     <script src="{{asset('../assets/js/main.js')}}"></script>
</body>
</html>