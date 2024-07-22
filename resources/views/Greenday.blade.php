<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil dan Kisah Ikonik Band Green Day</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:ital,wdth,wght@0,77.4,743;1,77.4,743&display=swap" rel="stylesheet">    
    <style>
        .jumbotron {
            padding: 50px;
            font-size: 18px;
            text-align: justify;
            animation: fadeBackground 30s infinite;
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
        }

        @keyframes fadeBackground {
            0% {
                background-image: url("{{ asset('img/1.jpg') }}");
            }
            25% {
                background-image: url("{{ asset('img/2.jpg') }}");
            }
            50% {
                background-image: url("{{ asset('img/3.jpg') }}");
            }
            75% {
                background-image: url("{{ asset('img/4.jpg') }}");
            }
            100% {
                background-image: url("{{ asset('img/1.jpg') }}");
            }
        }
        .comments-title {
            margin-top: 20px;
            font-size: 22px;
            color: #e00a0a;
            border-bottom: 2px solid #e00a0a;
            padding-bottom: 10px;
        }

        
        .comment-item {
            background-color: #1c1c1c;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }

        
        .comment-author {
            display: block;
            font-weight: bold;
            font-size: 18px;
            color: #e00a0a;
            margin-bottom: 5px;
        }

        
        .comment-text {
            font-size: 16px;
            color: #ddd;
        }
        #comments {
    background-color: #1c1c1c;
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
}

#comments h2 {
    font-size: 24px;
    color: #e00a0a;
    border-bottom: 2px solid #e00a0a;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    color: #e00a0a;
}

.form-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%; 
    background-color: #333; 
    color: white; 
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #e00a0a;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px; 
}

button:hover {
    background-color: #c00909;
}


#comments .comment-item {
    background-color: #333; 
    border: 1px solid #444;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 15px;
}

.comment-author {
    display: block;
    font-weight: bold;
    font-size: 18px;
    color: #e00a0a;
    margin-bottom: 5px;
}

.comment-text {
    font-size: 16px;
    color: #ddd;
}
    </style>
</head>

<body>
<header>
    <div class="jumbotron">
        <h1>GREEN DAY</h1>
        <p>
            Green Day merupakan band punk rock asal Amerika yang dibentuk pada tahun 1986 di Berkeley, California. Band ini beranggotakan Billie Joe Armstrong sebagai vokalis dan gitaris, Mike Dirnt sebagai bassist, dan Tré Cool sebagai drummer. 
            Green Day sangat populer karena keberhasilan mereka dalam membuat genre punk rock kembali terkenal, bersama band lainnya seperti Sublime, The Offspring, dan Rancid.
        </p>
    </div>
    <nav>
        <ul>
            <li><a href="#Sejarah">Sejarah</a></li>
            <li><a href="#Album">Album</a></li>
            <li><a href="#Kisah Woodstock 1994">Kisah Woodstock 1994</a></li>
            <li><a href="/Playlist">Playlist</a></li>
        </ul>
    </nav>
</header>

<main>
    <div id="content">
        <article id="Sejarah" class="card">
            <h2>SEJARAH</h2>
            <img src="img/greenday1.jpg" alt="Green Day" class="featured-image"/>
            <p>
                Green Day dibentuk pada 1986 di kota Berkeley, California, oleh trio Billie Joe Armstrong, Mike Dirnt, dan John Kiffmeyer. Setelah Kiffmeyer keluar, Tre Cool menggantikannya sebagai drummer pada tahun 1990. Album debut mereka, "39/Smooth," 
                dirilis pada tahun yang sama, diikuti oleh "Kerplunk" pada tahun 1992. Namun, keberuntungan besar datang dengan album ketiga mereka, "Dookie," pada tahun 1994, yang membawa mereka ke puncak popularitas punk rock.
            </p>
            <p>
                Meskipun album "Dookie" meraih kesuksesan besar, album-album berikutnya seperti "Insomniac" tahun 1995, "Nimrod" di tahun 1997, dan "Warning" pada tahun 2000, tidak mencapai tingkat yang sama secara komersial. Namun, pada tahun 2004, Green Day merilis album rock 
                opera revolusioner mereka, "American Idiot," yang tidak hanya memperoleh pengakuan kritis tetapi juga menjadi titik balik popularitas mereka dengan penjualan lebih dari 5 juta kopi di Amerika.Green Day terus menunjukkan kesuksesan mereka dengan album-album seperti 
                "21st Century Breakdown" tahun 2009 dan trilogi album "¡Uno!, ¡Dos!, dan ¡Tré!" tahun 2012. Sepanjang karir mereka, Green Day telah menjual lebih dari 75 juta album di seluruh dunia dan memenangkan lima penghargaan Grammy Awards, termasuk Best Alternative Album 
                untuk "Dookie" dan Best Rock Album untuk "American Idiot." Selain menjadi ikon dalam genre punk rock, mereka juga menjadi kiblat bagi generasi baru musisi.
            </p>
        </article>

        <article id="Album" class="card">
            <h2>ALBUM</h2>
            <p>
                Sepanjang karir nya Green Day telah merilis beberapa album yang sangat sukses di pasaran seluruh dunia. Hingga saat ini band tersebut telah merilis sebanyak 13 album, dengan setiap album memberikan kontribusi unik terhadap perjalanan musik mereka. Berikut beberapa
                album populer Green Day yang suskses di dunia.
            </p>
            <section>
                <h3>Dookie (1994)</h3>
                <img src="img/dookieee.jpg" alt="Album Dookie" class="featured-image" />
                <p>
                    Dookie merupakan album studio ketiga karya Green Day. Album ini diluncurkan pada tanggal 1 Februari 1994 melalui Reprise Records. Album ini merupakan album major label pertama mereka. Dookie menuai sukses komersial yang mendunia, dengan berhasil menjadi posisi kedua
                    di chart Billboard 200 Amerika Serikat dan memasuki chart di tujuh negara. Album ini berhasil membawa Green Day kepada arus popularitas. Dookie menghasilkan lima singel hits, yaitu "Longview", "Welcome to Paradise", "Basket Case", "When I Come Around", dan singel radio
                    "She". Terhitung pada tahun 2010, Dookie menjadi album Green Day dengan penjualan terbaik setelah tercatat terjual sebanyak 15 juta copy di seluruh dunia. Album Dookie berhasil memenangkan Grammy Award untuk kategori Best Alternative Music Album pada tahun 1995.
                </p>
            </section>

            <section>
                <h3>American Idiot</h3>
                <img src="img/american.jpg" alt="Album American Idiot" class="featured-image" />
                <p>
                    American Idiot adalah album ketujuh dari Green Day. Album ini diluncurkan pada tanggal 21 September 2004 melalui label Reprise Records dan diproduseri oleh Rob Cavallo. Album ini mulai direkam di Studio 880 , kota Oakland, California, dan diselesaikan di Los Angeles.
                    American Idiot sendiri merupakan album konsep di mana album ini bercerita tentang kisah "Jesus of Suburbia", seorang tokoh fiksi anti-hero yang dikarang oleh sang vokalis Billie Joe Armstrong. American Idiot bisa dibilang sukses di seluruh dunia, album ini berhasil 
                    memasuki chart di 26 negara berbeda dan telah mencapai posisi pertama di 19 negara, termasuk Amerika Serikat dan Inggris. Album ini terjual sebanyak 267.000 copy pada minggu pertama perilisannya, dan sejak dirilis telah terjual lebih dari 6 juta copy di Amerika Serikat
                    dan dengan total lebih dari 14 juta keping di seluruh dunia. Album ini berhasil meraih penghargaan Grammy ke-47 pada kategori Album Rock Terbaik (Best Rock Album).
                </p>
            </section>
        </article>

        <article id="Kisah Woodstock 1994" class="card">
            <h2>KISAH WOODSTOCK 1994</h2>
            <img src="img/woodstock.jpg" alt="Woodstock 1994" class="featured-image"/>
            <p>
                Penampilan Green Day di Woodstock '94, termasuk insiden hujan lumpur, adalah salah satu momen yang sangat dikenang dalam sejarah festival tersebut. Pada 14 Agustus 1994, Green Day tampil di panggung utama Woodstock '94 di depan ribuan penggemar. Saat itu, cuaca sangat 
                panas, dan ketika Green Day tampil, sebagian besar penonton telah terkena panasnya sinar matahari sepanjang hari. Akibatnya, banyak dari mereka merasa kelelahan. Saat Green Day mulai memainkan lagu-lagu mereka yang energik, semangat penonton mulai memanas, dan seketika 
                hujan mulai turun, banyak di antara mereka merasa lega karena dapat meredakan panasnya cuaca. Namun, terjadi hal yang tak terduga yaitu turunnya hujan lumpur. Para penonton yang sudah merasa bersemangat karena penampilan Green Day, memanfaatkan situasi ini dengan mulai 
                melemparkan lumpur satu sama lain. 
            </p>
            <p>    
                Seiring berjalannya konser, semakin banyak lumpur yang berterbangan. Para anggota Green Day pun ikut terkena lumpur yang dilemparkan oleh penonton. Vokalis Green Day, Billie Joe Armstrong, memanfaatkan momen ini dengan memanggil penonton
                untuk berpartisipasi dalam lempar lumpur bersama-sama. sang vokalis bahkan mengenakan sepatu lumpur sendiri saat melompat-lompat di atas panggung. Insiden ini menciptakan suasana yang sangat liar dan bebas, yang menjadi salah satu momen paling ikonik dalam sejarah festival
                Woodstock '94. Meskipun insiden hujan lumpur tersebut awalnya mungkin dianggap sebagai gangguan, banyak yang kemudian melihatnya sebagai bagian integral dari keseluruhan pengalaman Woodstock '94 yang mencerminkan semangat kebebasan dan spontanitas dari festival tersebut.
            </p>
        </article>

        <section id="comments" class="card">
            <h2>Komentar</h2>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
           <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required class="form-input">
        </div>
        <div class="form-group">
            <label for="comment">Komentar :</label>
            <textarea id="comment" name="comment" rows="4" required class="form-input"></textarea>
        </div>
        <button type="submit">Kirim Komentar</button>
            </form>

            <div>
                <h3>Daftar Komentar:</h3>
                @foreach ($comments as $comment)
                <div class="comment-item">
                    <strong class="comment-author">{{ $comment->name }}</strong>
                    <p class="comment-text">{{ $comment->comment }}</p>
                </div>
            @endforeach
        </section>
    </div>
    
    <aside>
        <article class="profile card">
            <header>
                <h2>GREEN DAY</h2>
                <p>Band Punk Rock Asal Amerika Serikat</p>
                <figure>
                    <img src="img/greendaylogo.jpg" />
                </figure>
            </header>

            <section>
                <h3>Profil Singkat</h3>
                <table>
                    <tr>
                        <th>Negara</th>
                        <td>Amerika Serikat</td>
                    </tr>
                    <tr>
                        <th>Dibentuk</th>
                        <td>1986</td>
                    </tr>
                    <tr>
                        <th>Vokalis</th>
                        <td>Billie Joe Armstrong</td>
                    </tr>
                    <tr>
                        <th>Bassist</th>
                        <td>Mike Drint</td>
                    </tr>
                    <tr>
                        <th>Drummer</th>
                        <td>Tré Cool</td>
                    </tr>
                </table>
            </section>
        </article>
    </aside>
</main>

<footer>
    <p>Bardan Muharam &#169; 2024, Tugas Akhir Semester Pemrograman Web dan Basis Data</p>
</footer>
</body>
</html>
