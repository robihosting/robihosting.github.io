<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Toko NixdLonely</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" />
<style>
            body {
                background: black;
                font-family: "Titillium Web", sans-serif;
            }
              
            .loading {
                position: absolute;
                left: 0;
                right: 0;
                top: 50%;
                width: 100px;
                color: #fff;
                margin: auto;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            .loading span {
                position: absolute;
                height: 10px;
                width: 100px;
                top: 50px;
                overflow: hidden;
            }
            .loading span > i {
                position: absolute;
                height: 4px;
                width: 4px;
                border-radius: 50%;
                -webkit-animation: wait 2s infinite;
                -moz-animation: wait 2s infinite;
                -o-animation: wait 2s infinite;
                animation: wait 2s infinite;
            }
            .loading span > i:nth-of-type(1) {
                left: -28px;
                background: #ffff;
            }
            .loading span > i:nth-of-type(2) {
                left: -21px;
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
                background: #ffff;
            }
            @-webkit-keyframes wait {
                0% {
                    left: -7px;
                }
                30% {
                    left: 52px;
                }
                60% {
                    left: 22px;
                }
                100% {
                    left: 100px;
                }
            }
            @-moz-keyframes wait {
                0% {
                    left: -7px;
                }
                30% {
                    left: 52px;
                }
                60% {
                    left: 22px;
                }
                100% {
                    left: 100px;
                }
            }
            @-o-keyframes wait {
                0% {
                    left: -7px;
                }
                30% {
                    left: 52px;
                }
                60% {
                    left: 22px;
                }
                100% {
                    left: 100px;
                }
            }
            @keyframes wait {
                0% {
                    left: -7px;
                }
                30% {
                    left: 52px;
                }
                60% {
                    left: 22px;
                }
                100% {
                    left: 100px;
                }
            }
        </style>
</head>
<body>
<div class="loading">
<center><p>NixdLonely</p></center>
<center><p></p></center>
<center><p></p></center>
<span><i></i><i></i></span>
</div>
</body>
<script>
        setTimeout(function () {
            location.href = "dashboard/index.php";
        }, 1500);
    </script>
</html>
