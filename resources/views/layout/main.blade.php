<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Praktikum Web | {{ $title }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style.css" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('partials.navbar')
    {{-- <!-- ini merupakan header -->
    <div class="atas">
        <header>
            <input type="checkbox" id="show-search" />
            <input type="checkbox" id="show-menu" />
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">Teyvat News</a></div>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li>
                        <a href="#" class="desktop-link">Kategori</a>
                        <input type="checkbox" id="show-kategori" />
                        <label for="show-kategori">Kategori</label>
                        <ul>
                            <li><a href="#">Trending</a></li>
                            <li><a href="#">Terbaru</a></li>
                            <li><a href="#">Internasional</a></li>
                            <li><a href="#">Nasional</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Services</a>
                        <input type="checkbox" id="show-services" />
                        <label for="show-services">Services</label>
                        <ul>
                            <li><a href="kalkulator">Kalkulator</a></li>
                            <li><a href="movieList">Watch List</a></li>
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
                    <li><a href="#">Feedback</a></li>
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
    </div> --}}

    <!-- ini content -->

    <section class="banner">
        <div class="banner-main-content">
            <h2>GET THE LATEST GENSHIN IMPACT NEWS</h2>
            <h3>Genshin Impact Players Leading Teyvat News Portal</h3>

            <button>
                <a href="#">Know More</a>
            </button>

            <div class="current-news-head">
                <h3>
                    Web Event "Journey With a Gentle Breeze" Now Online: Take part to
                    obtain Primogems and accompany Klee on an adventure in Inazuma!
                    <span>by genshin impact official</span>
                </h3>

                <h3>
                    Genshin Impact New Version Twitch Streamer Recruitment Event
                    <span>by genshin impact official</span>
                </h3>

                <h3>
                    Version 2.6 "Zephyr of the Violet Garden" Strategy Guides Contest
                    <span>by genshin impact official</span>
                </h3>

                <h3>
                    "When the Sakura Bloom" Version 2.5 Strategy Guides Contest Has
                    Begun!
                    <span>by genshin impact official</span>
                </h3>
            </div>
        </div>

        <div class="banner-sub-content">
            <div class="hot-topic">
                <img src="https://pbs.twimg.com/media/FPoKVMDXIA4ID1C.jpg" alt="" />

                <div class="hot-topic-content">
                    <h2>
                        Kedatangan Seorang anak kecil di Festival Iradori Inazuma membuat
                        para pengunjung Panik
                    </h2>

                    <h3>New Topic 1</h3>
                    <p>
                        Dalam Festival Iradori di Inazuma tahun ini untuk pertama kalinya
                        Festival ini di selenggarakan secara Internasional sehingga
                        membuat pengunjung dari Luar sangat banyak berdatangan dari Luar
                        Inazuma. Namun terdapat kepanikan yang terjadi...
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="hot-topic">
                <img src="https://regnbue.id/storage/photos/shares/HI3/genshin/2.6/press/Kamisato%20Ayato.jpg" alt="" />

                <div class="hot-topic-content">
                    <h2>
                        Kamisato Ayato akan memulai debutnya sebagai Karakter 5★ terbaru
                        di v2.6 ini.
                    </h2>

                    <h3>New Topic 2</h3>
                    <p>
                        Komisaris Yashiro sekaligus kepala Klan Kamisato yang masih muda
                        namun sangat berprestasi, Ayato adalah tipe orang yang selalu
                        punya jalan dan punya caranya sendiri. Dalam Quest Story-nya,
                        pemain akan menyaksikan bagaimana cara Ayato menyelesaikan
                        permasalahan, ketika ada sebuah peristiwa tidak biasa yang turut
                        mengiringi langkah Inazuma menapaki zaman baru yang penuh
                        kemajuan.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="hot-topic">
                <img src="https://cdn1-production-images-kly.akamaized.net/zI7vPm7zbFwlcrm7dLbAP0ppILQ=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3978119/original/028789000_1648536373-Yelan_dan_Kuki_Shinobu_di_Genshin_Impact.jpg" alt="" />

                <div class="hot-topic-content">
                    <h2>
                        Yelan dan Kuki Shinobu Tampil Sebagai Karakter Baru di Genshin
                        Impact 2.7.
                    </h2>

                    <h3>New Topic 3</h3>
                    <p>
                        miHoYo baru saja mengungkap dua karakter baru yang akan muncul
                        bersamaan dengan update Genshin Impact 2.7 mendatang.Adapun kedua
                        karakter baru di Genshin Impact itu adalah Yelan dan Kuki Shinobu.
                        Berdasarkan penjelasan pengembang di akun Twitter Genshin Impact,
                        Selasa (29/3/2022), Yelan akan tampil sebagai karakter dengan tipe
                        Hydro (air).
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="hot-topic">
                <img src=https://media.suara.com/pictures/653x366/2022/03/27/48469-genshin-impact-26.jpg alt="" />

                <div class="hot-topic-content">
                    <h2>Bocoran Event dan Reward Keren di Genshin Impact 2.6.</h2>

                    <h3>New Topic 4</h3>
                    <p>
                        Genshin Impact 2.6 akan diluncurkan di seluruh dunia pada 30 Maret
                        2022 dan pemain akan mendapatkan berbagai event baru serta reward
                        atau hadiah keren.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <main>
        <section class="main-container-left">
            <h2>Top Stories</h2>
            <div class="container-top-left">
                <article>
                    <img src=https://gamebrott.com/wp-content/uploads/2022/02/2-7-750x375.jpg />

                    <div>
                        <h3>
                            Inilah Gambaran Kedalaman Area “The Chasm” di Genshin Impact
                            2.6.
                        </h3>

                        <p>
                            Official livestream Genshin Impact v2.5 silam telah
                            mengungkapkan informasi mengenai konten yang akan datang di
                            update selanjutnya. Developer tetap menambahkan region dan area
                            baru di hampir setiap updateannya, yang mana kali akan hadir
                            sebuah area tersembunyi di Liyue bernama “The Chasm“.
                        </p>

                        <a href="#">Read More <span>>></span></a>
                    </div>
                </article>
            </div>

            <div class="container-bottom-left">
                <article>
                    <img src="https://cdn1-production-images-kly.akamaized.net/iXOXposC-ZZs_s8OLcEtW2l_zB4=/200x112/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3251143/original/035768700_1601276263-genshin-impact-1.jpg" />
                    <div>
                        <h3>
                            Kode Redeem Genshin Impact Terbaru 30 Maret 2022, Segera Klaim
                        </h3>
                        <p>
                            HoYoverse alias MiHoYo meluncurkan update Genshin Impact versi
                            2.6. Selain itu, terdapat juga kode redeem Genshin Impact
                            terbaru yang dibagikan.
                        </p>

                        <a href="#">Read More <span>>></span></a>
                    </div>
                </article>

                <article>
                    <img src=https://cdn0-production-images-kly.akamaized.net/GTKK95X9Lful7ieRkuqnduwC8TU=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3937321/original/086753600_1645088182-Yae_Miko_Genshin_Impact.jpg />
                    <div>
                        <h3>
                            MiHoyo Bagikan Kode Redeem Genshin Impact 17 Februari 2022 di
                            Update 2.5
                        </h3>
                        <p>
                            Genshin Impact baru saja merilis update 2.5 mereka pada Rabu
                            kemarin. Selain itu seperti biasanya, ada juga redeem code
                            terbaru yang bisa diklaim pemain.
                        </p>

                        <a href="#">Read More <span>>></span></a>
                    </div>
                </article>
            </div>
        </section>

        <section class="main-container-right">
            <h2>Latest Stories</h2>

            <article>
                <h4>just in</h4>
                <div>
                    <h2>
                        Developer Game Genshin Impact MiHoYo Ganti Nama Jadi HoYoverse
                    </h2>

                    <p>
                        Developer alias pengembang dari game Genshin Impact, miHoYo,
                        mengumumkan telah secara resmi mengubah brand atau jenama mereka
                        untuk pasar global menjadi HoYoverse.
                    </p>

                    <a href="#">Read More <span>>></span></a>
                </div>
                <img src=https://cdn1-production-images-kly.akamaized.net/Hk1Wrj8IsLTg8INr2KvOlZHvZpI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3259954/original/000019700_1602040697-genshin-impact-2.jpg />
            </article>

            <article>
                <h4>just in</h4>
                <div>
                    <h2>
                        Pria Ini Kaget dapat Tagihan Rp 216 Juta Gara-Gara Anak Main
                        Genshin Impact
                    </h2>

                    <p>
                        Kejadian terbaru dialami oleh seorang ayah asal Singapura, Lim
                        Cheng Mong, yang rupanya mendapatkan tagihan sebesar 20.000 dolar
                        Singapura atau setara USD 15.000 (Rp 216 jutaan) karena gim
                        Genshin Impact.
                    </p>

                    <a href="#">Read More <span>>></span></a>
                </div>
                <img src=https://cdn1-production-images-kly.akamaized.net/QledP5Bir5sOKOqSxO7OXClZlso=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3251143/original/035768700_1601276263-genshin-impact-1.jpg />
            </article>

            <article>
                <h4>just in</h4>
                <div>
                    <h2>
                        Pakai Kartu Kredit Ayah, Anak Perempuan Ini Habiskan Rp200 Juta
                        Untuk Game Online
                    </h2>

                    <p>
                        Sebuah game online yang belakangan ini tengah populer, membuat
                        seorang anak perempuan di Singapura nekat melakukan transaksi
                        pembelian dalam game hingga mencapai Rp200 juta seperti dilansir
                        dari Worldofbuzz, Senin (3/1/2022).
                    </p>

                    <a href="#">Read More <span>>></span></a>
                </div>
                <img src=https://cdn1-production-images-kly.akamaized.net/QledP5Bir5sOKOqSxO7OXClZlso=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3251143/original/035768700_1601276263-genshin-impact-1.jpg />
            </article>

            <article>
                <h4>just in</h4>
                <div>
                    <h2>
                        Genshin Impact, Lego, hingga BTS Jadi Konten Paling Diminati
                        Anak-Anak di 2021
                    </h2>

                    <p>
                        Kaspersky mengungkap konten online yang paling diminati anak-anak
                        selama musim gugur 2021. Untuk kategori game, anak-anak sering
                        menelusuri konten Genshin Impact dan Poppy Playtime.
                    </p>

                    <a href="#">Read More <span>>></span></a>
                </div>
                <img src=https://cdn1-production-images-kly.akamaized.net/Hk1Wrj8IsLTg8INr2KvOlZHvZpI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3259954/original/000019700_1602040697-genshin-impact-2.jpg />
            </article>

            <article>
                <h4>just in</h4>
                <div>
                    <h2>
                        Jadwal Update Genshin Impact 2.4, Hadirkan Hero Baru dan Ada
                        Primogems Gratis
                    </h2>

                    <p>
                        MiHoYo mengumumkan bakal melakukan pembaruan Genshin Impact ke
                        versi 2.4 pada 5 Januari 2022. Selama proses update, Traveler
                        (julukan untuk para pemain), tidak akan bisa masuk ke dalam game.
                    </p>

                    <a href="#">Read More <span>>></span></a>
                </div>
                <img src=https://cdn1-production-images-kly.akamaized.net/QledP5Bir5sOKOqSxO7OXClZlso=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3251143/original/035768700_1601276263-genshin-impact-1.jpg />
            </article>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>TeyvatNews</h2>
                <p>
                    Website dimana player Genshin Impact mendapatkan Informasi terbaru
                    seputar Game Genshin Impact hanya di TeyvatNews
                </p>
            </div>

            <div class="footer-right">
                <h2>Contact</h2>
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i>TeyvatNews</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i>TeyvatNews</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i>TeyvatNews.id</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i>TeyvatNews</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p>Copyright &copy; 2022 All rights reserved | Rysa Laksana</p>
        </div>
    </footer>

    <script src="script.js" async defer></script>
</body>

</html>