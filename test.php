<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Neshan Map Example (Leaflet)</title>

    <script src="public/js/jquery-3.0.0.min.js"></script>
    <script src="public/js/jquery.flipTimer.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="public/js/jquery.mask.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="public/css/flipTimer.css" rel="stylesheet">

</head>


<style>

    .title-rotate {
        position: relative;
        color: #FFFFFF;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .rotate-words {
        margin-left: 10px;
        width: 100%;
    }

    .rotate-words span {
        position: absolute;
        width: max-content;
        background-color: rgb(118, 109, 244);
        padding: 0 10px;
        border-radius: 7px;
        opacity: 0;
        transform-origin: 10% 75%;
        animation: rotateWords 12s var(--d) linear infinite;
    }

    @keyframes rotateWords {
        5% {
            opacity: 1;
            transform: rotate(-1deg);
        }
        10%, 20% {
            opacity: 1;
            transform: rotate(3deg);
        }
        15% {
            transform: rotate(-1deg);
        }
        25% {
            opacity: 0;
            transform: rotate(10deg);
            transform: translateY(40px);
        }


    }


</style>


<body>

<h1 class="title-rotate">
    <div class="rotate-words">
        <span style="--d: 0s">1. srexsffgfhjhgfds</span>
        <span style="--d: 4s">2. sdfghjhgfds</span>
        <span style="--d: 8s">3. ali</span>
    </div>


</h1>


</body>


</html>





