<style>
  
    .admin-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 260px;
        background: #181818;
        padding: 25px 20px;
        border-right: 2px solid var(--main-color);
        position: sticky;
        top: 0;
        height: 100vh;
    }

    .sidebar h3 {
        color: var(--main-color);
        text-align: center;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .sidebar a {
        display: block;
        text-decoration: none;
        background: #222;
        color: var(--text-color);
        padding: 14px 18px;
        border-radius: 10px;
        margin-bottom: 12px;
        transition: 0.3s;
        font-weight: 500;
    }

    .sidebar a:hover {
        background: var(--main-color);
        color: var(--text-color);
        transform: translateX(5px);
    }

    .main-content {
        flex: 1;
        padding: 40px;
    }

    /* Media Queries */

    @media screen and (max-width:991px) {

        .admin-wrapper {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            border-right: none;
            border-bottom: 2px solid var(--main-color);
        }

        .main-content {
            padding: 20px;
        }
    }

</style>


<div class="sidebar">

    <h3>
        Admin Panel
    </h3>

    <a href="../admin/dashboard.php">
        Dashboard
    </a>

    <a href="../admin/add-music.php">
        Add Music
    </a>

    <a href="../admin/manage-music.php">
        Manage Music
    </a>

    <a href="../admin/add-video.php">
        Add Video
    </a>

    <a href="../admin/manage-videos.php">
        Manage Videos
    </a>

    <a href="../index.php">
        View Website
    </a>

    <a href="../auth/logout.php">
        Logout
    </a>

</div>