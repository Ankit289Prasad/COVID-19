<style type="text/css">
    html {
        overflow-y: scroll;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    html,
    body {
        margin: 0;
        padding: 0;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Recursive', sans-serif;
    }

    .footer_style {
        background-color: rgba(18, 3, 34, 0.89) !important;
    }

    .footer_style p{
        margin-bottom: -18px !important;
    }

    @media only screen and (max-width:986px) {
        #aboutid .section_header h1{
            font-size: 1.8rem;
            font-weight: 600;
        }
        #prevention p{
            text-align: center;
            font-size: 0.9rem;
            padding-right: 2rem;
            font-weight: 600;
            padding-left: 2rem;
        }
        .rightside h1{
            padding: 2rem;
            font-size: 1.9rem !important;
            padding-bottom: 0;
            padding-top: 0;
            font-weight: 500;
            text-align: center;
        }
        .rightside img{
            height: 2rem;
            width: 2rem;
        }
        .leftside img{
            height: 18rem;
            width: 18rem;
            margin-top: -35px;
            z-index: -1;
        }
        .up h3{
            font-size: 1.8rem !important;
        }
        .sub_section h1,
        .contact h1{
            font-size: 1.7rem;
        }
        .topper{
            
            padding-bottom: 20px!important;
        }
        #aboutid1 img{
            margin-top: -30px !important;
            margin-left: -30px;
            height: 100%;
            width: 90%;
            overflow: hidden;
        }

        #aboutid1 .top1 h2{
            font-size: 1.4rem !important;
            font-weight: 600;
            padding-bottom: 1rem;
            padding-left: 1.8rem;
        }
        #aboutid1 .top1 p{
            padding-left: 1.8rem;
            padding-right: 1.8rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 0.9rem;
        }
        .corona_update h1{
            font-size: 1.4rem !important;
            margin-top: 0px;
            font-weight: 600;
        }
        .corona_update p{
            font-size: 0.7rem !important;
            text-align: center;
        }
        #navbarSupportedContent {
            background-color: rgba(31, 5, 59, 0.822) !important;

        }
        #sticky-social-icon .float-sticky-bar>li{
            margin-left: -150px;
        }

    }

    .nav_style {
        background-color: rgba(18, 3, 34, 0.89) !important;
        height: 60px !important;
    }

    .nav_style .nav-item {
        height: 60px;
        z-index: 999;
    }

    .nav_style .nav-item a {
        margin-top: 0px;
        padding-top: 18px;
    }

    .nav_style a {
        color: whitesmoke !important;
        text-decoration: none;
        height: 100% !important;
    }

    .nav_style a:hover,
    .nav_style a:active {
        color: white !important;
    }

    .nav_style .nav-item:hover {
        background-color: rgba(164, 151, 179, 0.39);
        height: 60px;
    }

    .navbar .active {
        background-color: rgba(164, 151, 179, 0.79);
    }



    .main_header {
        height: 450px;
        width: 100%;
    }

    .rightside h1 {
        font-size: 3rem;
    }

    .corona_rotate img {
        animation: gocorona 3s linear infinite;
    }

    @keyframes gocorona {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .leftside img {
        animation: unity 6s linear infinite;
    }

    @keyframes unity {

        10%,
        50%,
        90% {
            transform: scale(0.9);
        }

        0%,
        30%,
        70% {
            transform: scale(1);
        }
    }

    .corona_update {
        margin: 0 0 30px 0;
    }

    .corona_update h3 {
        color: #ff7675;
        font-weight: 800;
        font-size: 2rem;
    }

    .corona_update h1 {
        text-align: center;
        font-size: 2rem;
    }

    .sub_section {
        background-color: rgb(238, 238, 238);
    }

    .sub_section h1 {
        font-weight: 800;
        color: rgb(1, 71, 70) !important;
    }

    #aboutid h1 {
        font-size: 2.8rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 320;
    }

    #aboutid figcaption {
        padding-top: 8px;
        font-size: 1.1rem;
    }

    .fixed-top {

        position: fixed;
    }

    .pad {
        padding-top: 90px;
    }

    .faicon-facebook:hover {
        background-color: #385998 !important;
    }

    .faicon-youtube:hover {
        background-color: red !important;
    }

    .faicon-github:hover {
        background-color: black !important;
    }

    .faicon-instagram:hover {
        background-color: #f2003c !important;
    }

    .faicon-whatsapp:hover {
        background-color: #128c7e !important;
    }

    #contact .l{
        font-weight: 400;
        font-size: 1.1rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    #sticky-social-icon .float-sticky-bar>li {
        background-color: rgba(18, 3, 34);
        text-transform: uppercase;
        letter-spacing: 3px;
        padding: 4px 5px;
        width: 150px;
        position: fixed;
        z-index: 999;
        transition: all 0.5s ease;
        display: flex;
        justify-content: flex-end;
        left: -110px;
    }

    #sticky-social-icon .fab {
        font-size: 20px;
        color: #fff;
        padding: 10px 0 10px 10px;
        width: 35px;
        margin-left: 8px;
    }

    #sticky-social-icon .float-sticky-bar>li:hover {
        left: 0;
    }

    #sticky-social-icon .float-sticky-bar>li>a {
        color: #fff !important;
        text-decoration: none;
        text-align: center;
        line-height: 45px !important;
        vertical-align: top !important;
    }

    #sticky-social-icon .position-fb {
        top: 160px
    }

    #sticky-social-icon .position-in {
        top: 212px
    }

    #sticky-social-icon .position-wt {
        top: 264px
    }

    #sticky-social-icon .position-yt {
        top: 316px
    }

    #sticky-social-icon .position-gt {
        top: 368px
    }


    #myBtn{
        display: none;
        position: fixed;
        bottom: 30px;
        right: 40px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #00a8ff;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 10px;
    }

    #myBtn:hover{
        background:rgb(247, 4, 117);
    }

</style>