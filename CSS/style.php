<style type="text/css">

*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Recursive', sans-serif;}
@media only screen and (max-width:986px){
#navbarSupportedContent{
    background-color: rgba(31, 5, 59, 0.822) !important;
    z-index: 999;
}
}
.nav_style{
    background-color: rgba(18, 3, 34, 0.89) !important;
    height: 60px !important;
    z-index: 999;
}
.nav_style .nav-item{
    height: 60px;
}
.nav_style .nav-item a{
    margin-top: 10px;
}
.nav_style a{
    color: whitesmoke !important;
    text-decoration: none;
    height: 100% !important;
}
.nav_style a:hover,
.nav_style a:active{
    color: white !important;
}
.nav_style .nav-item:hover,
.nav_style .nav-item:active{
    background-color: rgba(164, 151, 179, 0.89);
    height: 60px;
}

.main_header{
    height:450px;
    width: 100%;
}

.rightside h1{
    font-size: 3rem;
}

.corona_rotate img{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0%{transform: rotate(0);}
    100%{transform: rotate(360deg);}
}

.leftside img{ animation: unity 6s linear infinite;}

@keyframes unity{
    10%,50%,90%
    {
        transform: scale(0.9);
    }
    0%,30%,70%
    {
        transform: scale(1);
    }    
}

.corona_update{
    margin:0 0 30px 0;
}
.corona_update h3{ color: #ff7675;
    font-weight: 800;
    font-size: 2rem;
}
.corona_update h1{
    text-align: center;
    font-size: 2rem;
}
.sub_section{
    background-color: rgb(238,238,238);
}
.sub_section h1{
    font-weight: 800;
    color: rgb(1,71,70) !important;
}

#aboutid h1{
    font-size: 2.8rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 320;
}

#aboutid figcaption{
    padding-top: 8px;
    font-size: 1.1rem;
}

</style>