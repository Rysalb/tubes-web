<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Praktikum Web | </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style.css" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ini merupakan header -->
    <div class="atas">
        <header>
            <input type="checkbox" id="show-search" />
            <input type="checkbox" id="show-menu" />
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">Teyvat News</a></div>
                <ul class="links">
                    <li><a href="/">Home</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li>
                        <a href="#" class="desktop-link">Kategori</a>
                        <input type="checkbox" id="show-kategori" />
                        <label for="show-kategori">Kategori</label>
                        <ul>
                            <li><a href="/posts">Trending Post</a></li>
                            <li><a href="/categories">Categories</a></li>
                            <li><a href="#">Internasional</a></li>
                            <li><a href="#">Nasional</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Services</a>
                        <input type="checkbox" id="show-services" />
                        <label for="show-services">Services</label>
                        <ul>
                            <li><a href="/kalkulator">Kalkulator</a></li>
                            <li><a href="/movieList">Watch List</a></li>
                            <li><a href="#">Drop Menu 3</a></li>
                            <li>
                                <a href="#" class="desktop-link">Modul 4</a>
                                <input type="checkbox" id="show-items" />
                                <label for="show-items">Modul 4</label>
                                <ul>
                                    <li>
                                        <a href="page/modul4/modul4Keg1.php">Kegiatan 1</a>
                                    </li>
                                    <li>
                                        <a href="page/modul4/kegiatan2/modul4Keg2.php">Kegiatan 2</a>
                                    </li>
                                    <li>
                                        <a href="page/modul4/kegiatan3/form.php">Kegiatan 3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required />
                <button type="submit" class="go-icon">
                    <i class="fas fa-search-plus"></i>
                </button>
            </form>
        </header>
    </div>

    </html>