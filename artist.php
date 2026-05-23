
<?php

include("./includes/config.php");
include("./includes/header.php");

?>


<?php

$artists = [

    [
        "name"  => "Mannu",
        "role"  => "Pakistani Singer",
        "image" => "https://i.scdn.co/image/ab6761610000517463670042cacdedfa5f8f1fe6",
        "song"  => "songs/atif.mp3"
    ],

    [
        "name"  => "Arijit singh",
        "role"  => "Pop Artist",
        "image" => "https://i.scdn.co/image/ab676161000051745ba2d75eb08a2d672f9b69b7",
        "song"  => "songs/alizafar.mp3"
    ],

    [
        "name"  => "karan Aujla",
        "role"  => "ARTIST",
        "image" => "https://i.cbc.ca/ais/1.7247028,1719411530000/full/max/0/default.jpg?im=Crop%2Crect%3D%28111%2C34%2C1374%2C772%29%3BResize%3D860",
        "song"  => "songs/rahat.mp3"
    ],

    [
        "name"  => "Abida Parveen",
        "role"  => "Sufi Singer",
        "image" => "https://i.tribune.com.pk/media/images/1280177-abida-1483162398/1280177-abida-1483162398-640x480.webp",
        "song"  => "songs/abida.mp3"
    ],

    [
        "name"  => "Momina Mustehsan",
        "role"  => "Coke Studio Artist",
        "image" => "https://sport360.com/wp-content/uploads/2016/12/momina-mustehsan-1.jpg",
        "song"  => "songs/momina.mp3"
    ],

    [
        "name"  => "Asim Azhar",
        "role"  => "Young Pop Singer",
        "image" => "https://stockportplaza.co.uk/wp-content/uploads/2023/01/PLA_Asim.jpg",
             "song"  => "songs/momina.mp3"
    ]

];

?>




<!-- artist.php --> <?php $artists = [ [ "name" => "Mannu", "role" => "Pakistani Singer", "image" => "https://i.scdn.co/image/ab6761610000517463670042cacdedfa5f8f1fe6", "song" => "songs/atif.mp3" ], [ "name" => "Arijit singh", "role" => "Pop Artist", "image" => "https://i.scdn.co/image/ab676161000051745ba2d75eb08a2d672f9b69b7", "song" => "songs/alizafar.mp3" ], [ "name" => "karan Aujla", "role" => "ARTIST", "image" => "https://i.cbc.ca/ais/1.7247028,1719411530000/full/max/0/default.jpg?im=Crop%2Crect%3D%28111%2C34%2C1374%2C772%29%3BResize%3D860", "song" => "songs/rahat.mp3" ], [ "name" => "Abida Parveen", "role" => "Sufi Singer", "image" => "https://i.tribune.com.pk/media/images/1280177-abida-1483162398/1280177-abida-1483162398-640x480.webp", "song" => "songs/abida.mp3" ], [ "name" => "Momina Mustehsan", "role" => "Coke Studio Artist", "image" => "https://sport360.com/wp-content/uploads/2016/12/momina-mustehsan-1.jpg", "song" => "songs/momina.mp3" ], [ "name" => "Asim Azhar", "role" => "Young Pop Singer", "image" => "https://stockportplaza.co.uk/wp-content/uploads/2023/01/PLA_Asim.jpg", "song" => "songs/momina.mp3" ] ]; ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Pakistani Artists</title> <!-- Bootstrap --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Font Awesome --> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> <!-- Google Font --> <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> <style> *{ margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; } body{ background:#121212; color:#fff; overflow-x:hidden; } /* Banner */ .artist-banner{ width:100%; height:400px; background: linear-gradient(to right, rgba(0,0,0,0.85), rgba(29,185,84,0.3)), url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=1400&auto=format&fit=crop'); background-size:cover; background-position:center; display:flex; justify-content:center; align-items:center; text-align:center; } .artist-banner h1{ font-size:65px; font-weight:700; } .artist-banner p{ font-size:20px; color:#ddd; margin-top:10px; } /* Artist Section */ .artists-section{ padding:80px 0 130px; } .section-title{ font-size:38px; font-weight:700; margin-bottom:60px; } .artist-card{ background:#181818; border-radius:20px; padding:20px 10px; text-align:center; transition:0.4s ease; cursor:pointer; position:relative; overflow:hidden; } .artist-card:hover{ transform:translateY(-10px); background:#282828; } .artist-image{ width:140px; height:140px; border-radius:50%; object-fit:cover; border:4px solid #1DB954; transition:0.4s; } .artist-card:hover .artist-image{ transform:scale(1.05); border-color:#fff; } .artist-name{ margin-top:18px; font-size:18px; font-weight:600; } .artist-role{ color:#b3b3b3; font-size:13px; } /* Play Button */ .play-btn{ width:50px; height:50px; border:none; border-radius:50%; background:#1DB954; color:#fff; position:absolute; right:15px; bottom:15px; opacity:0; transition:0.4s; } .artist-card:hover .play-btn{ opacity:1; bottom:25px; } /* Music Player */ .music-player{ position:fixed; bottom:0; left:0; width:100%; background:#181818; border-top:1px solid #333; padding:15px 25px; display:flex; justify-content:space-between; align-items:center; z-index:999; } .music-info{ display:flex; align-items:center; gap:15px; } .music-info img{ width:60px; height:60px; border-radius:10px; object-fit:cover; } .song-title{ font-size:18px; font-weight:600; } .song-artist{ color:#aaa; font-size:14px; } audio{ width:40%; } /* Responsive */ @media(max-width:768px){ .artist-banner{ height:280px; } .artist-banner h1{ font-size:40px; } .artist-banner p{ font-size:16px; } .music-player{ flex-direction:column; gap:15px; } audio{ width:100%; } } </style> </head> <body> <!-- Banner --> <section class="artist-banner"> <div> <h1>Pakistani Artists</h1> <p> Listen to trending Pakistani music artists </p> </div> </section> <!-- Artists --> <section class="artists-section"> <div class="container-fluid px-4"> <h2 class="section-title text-center"> <i class="fa-solid fa-music text-success"></i> Popular Artists </h2> <div class="row g-4"> <?php foreach($artists as $artist){ ?> <!-- 6 Artists One Line --> <div class="col-lg-2 col-md-4 col-6"> <div class="artist-card" onclick="playSong( '<?php echo $artist['song']; ?>', '<?php echo $artist['name']; ?>', '<?php echo $artist['role']; ?>', '<?php echo $artist['image']; ?>' )"> <img src="<?php echo $artist['image']; ?>" class="artist-image" alt="artist" > <h4 class="artist-name"> <?php echo $artist['name']; ?> </h4> <p class="artist-role"> <?php echo $artist['role']; ?> </p> <button class="play-btn"> <i class="fa-solid fa-play"></i> </button> </div> </div> <?php } ?> </div> </div> </section> <!-- Music Player --> <div class="music-player"> <div class="music-info"> <img src="https://via.placeholder.com/60" id="player-image" > <div> <div class="song-title" id="song-name"> No Song Playing </div> <div class="song-artist" id="artist-name"> Click Any Artist </div> </div> </div> <audio controls id="audio-player"> <source src="" type="audio/mp3"> </audio> </div> <!-- Javascript --> <script> function playSong(song, artist, role, image){ let player = document.getElementById("audio-player"); player.src = song; player.play(); document.getElementById("song-name").innerHTML = artist; document.getElementById("artist-name").innerHTML = role; document.getElementById("player-image").src = image; } </script> </body> </html><?php


if(isset($_POST['submit'])){

    // Get Form Data

    $title = $_POST['title'];

    $artist = $_POST['artist'];

    $album = $_POST['album'];

    $genre = $_POST['genre'];

    $language = $_POST['language'];

    $year = $_POST['year'];

    $description = $_POST['description'];

    // Image Upload

    $image_name = $_FILES['image']['name'];

    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file(
        $image_tmp,
        "../uploads/images/" . $image_name
    );

    // Music Upload

    $music_name = $_FILES['music_file']['name'];

    $music_tmp = $_FILES['music_file']['tmp_name'];

    move_uploaded_file(
        $music_tmp,
        "../uploads/music/" . $music_name
    );

    // Insert Query

    $insert = mysqli_query(

        $connection,

        "INSERT INTO music(

            title,
            artist,
            album,
            genre,
            language,
            year,
            image,
            music_file,
            description

        )

        VALUES(

            '$title',
            '$artist',
            '$album',
            '$genre',
            '$language',
            '$year',
            '$image_name',
            '$music_name',
            '$description'

        )"

    );

    if($insert){

        echo "Music Added Successfully";

    }
}

?>
   


   <!-- --------allbum section_ -->

<style>

body{
    margin:0;
    font-family:Arial;
    background:#121212;
    color:white;
    padding:30px;
}

.title{
    font-size:32px;
    margin-bottom:25px;
    color:#1DB954;
}

/* GRID */
.album-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(150px, 1fr));
    gap:15px;
}

/* CARD */
.album-card{
    background:#181818;
    border-radius:14px;
    padding:14px;
    transition:0.3s ease;
    cursor:pointer;
    position:relative;
}

.album-card:hover{
    background:#242424;
    transform:translateY(-6px);
}

/* IMAGE */
.album-card img{
    width:100%;
    height:170px;
    object-fit:cover;
    border-radius:10px;
}

/* ARTIST NAME */
.album-card h2{
    font-size:18px;
    margin:10px 0 5px;
}

/* ALBUM NAME */
.album-name{
    color:#1DB954;
    font-size:13px;
    font-weight:bold;
    margin-bottom:8px;
}

/* DESCRIPTION */
.description{
    font-size:12px;
    color:#b3b3b3;
    line-height:1.4;
}

/* PLAY BUTTON EFFECT */
.play{
    position:absolute;
    bottom:85px;
    right:18px;
    background:#1DB954;
    width:40px;
    height:40px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    opacity:0;
    transition:0.3s;
}

.album-card:hover .play{
    opacity:1;
    bottom:95px;    
}

</style>

</head>
<body>

<h1 class="title">🎧 Popular Music Albums</h1>

<div class="album-grid">

    <!-- Mannu -->
    <div class="album-card">
        <div class="play">▶</div>
        <img src="https://i.scdn.co/image/ab6761610000517463670042cacdedfa5f8f1fe6">
        <h2>Mannu</h2>
        <p class="album-name">Desi Flow</p>
        <p class="description">Modern Punjabi beats mixed with desi street vibe and energy.</p>
    </div>

    <!-- Arijit Singh -->
    <div class="album-card">
        <div class="play">▶</div>
        <img src="https://i.scdn.co/image/ab676161000051745ba2d75eb08a2d672f9b69b7">
        <h2>Arijit Singh</h2>
        <p class="album-name">Romantic Hits</p>
        <p class="description">Heart touching romantic songs with emotional depth and melody.</p>
    </div>

    <!-- Karan Aujla -->
    <div class="album-card">
        <div class="play">▶</div>
        <img src="https://i.cbc.ca/ais/1.7247028,1719411530000/full/max/0/default.jpg">
        <h2>Karan Aujla</h2>
        <p class="album-name">Street King</p>
        <p class="description">Hard-hitting Punjabi rap and street lifestyle music energy.</p>
    </div>

    <!-- Abida Parveen -->
    <div class="album-card">
        <div class="play">▶</div>
        <img src="https://i.tribune.com.pk/media/images/1280177-abida-1483162398/1280177-abida-1483162398-640x480.webp">
        <h2>Abida Parveen</h2>
        <p class="album-name">Sufi Soul</p>
        <p class="description">Pure spiritual Sufi music that connects soul and heart.</p>
    </div>

    <!-- Momina Mustehsan -->
    <div class="album-card">
        <div class="play">▶</div>
        <img src="https://sport360.com/wp-content/uploads/2016/12/momina-mustehsan-1.jpg">
        <h2>Momina Mustehsan</h2>
        <p class="album-name">Soft Pop</p>
        <p class="description">Calm, soft and modern pop vocals with soothing melodies.</p>
    </div>

    <!-- Asim Azhar -->
    <div class="album-card">
        <div class="play">▶</div>
        <img src="https://stockportplaza.co.uk/wp-content/uploads/2023/01/PLA_Asim.jpg">
        <h2>Asim Azhar</h2>
        <p class="album-name">Young Stars</p>
        <p class="description">Youthful pop music with modern beats and catchy hooks.</p>
    </div>


</div>

<?php

include("./includes/footer.php");

?>