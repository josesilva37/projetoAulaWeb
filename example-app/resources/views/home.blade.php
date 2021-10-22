<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Aula Web</title>
    <link rel="stylesheet" href="topnav.css">
</head>
<body>
    <nav class="topnav">
        <div>
            
        </div>
        <ul class="nav-list" id="navi-list">
            <li class="list-item">
                <a href="#">Home</a>
            </li>
            <li class="list-item">
                <a href="#">Conference</a>
            </li>
            <li class="list-item">
                <a href="##">Account</a>
            </li>
        </ul>
        <div class="menu" id="toggleButton">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </nav>        
</body>
<script>
    const toggleButton = document.getElementById('toggleButton');
    const naviList = document.getElementById('navi-list');

    toggleButton.addEventListener('click', () => {
        navilist.classList.toggle('active');
    })
</script>

</html>