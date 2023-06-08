<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
}
:root{
    --bg-color: #1f242d;
    --second-bg-color: #323946;
    --text-color: #fff;
    --main-color:#0ef;
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
    
}

body{
    background: var(--bg-color);
    color: var(--text-color);    
}
section{
    min-height: 100vh;
    padding: 10rem 9% 2rem;
}


.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 9%;
    background: var(--bg-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100; 
    
}

.logo{
    font-size: 2.5rem;
    color: var(--text-color);
    font-weight: 600;
    cursor: default;
    text-decoration: none;
}
.navbar a{
    font-size: 1.7rem;
    color: var(--text-color);
    margin-left: 4rem;
    text-decoration: none;
}

.navbar a:hover,
.navbar a.active{
    color: var(--main-color);
}

#menu-icon{
    font-size: 3.6rem;
    color: var(--text-color);
    display: none;
}
.home{
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-content h3{
    font-size: 3.2rem;
    font-weight: 700;
}

.home-content h3:nth-of-type(2) {
    margin-bottom: 2rem;
}

span{
    color: var(--main-color);
}

.home-content h1{
    font-size: 5.6rem;
    font-weight: 700;
    line-height: 1.3;
}

.home-content p {
    font-size: 1.6rem;
}

.social-media a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background: transparent;
    border: 0.2rem solid var(--main-color);
    border-radius: 50%;
    font-size: 2rem;
    color: var(--main-color);
    margin: 3rem 1.5rem 3rem 0;
    text-decoration: none;
    transition: 0.5s ease;
}

.social-media a:hover{
    background: var(--main-color);
    color: var(--second-bg-color);
    box-shadow: 0 0 1rem var(--main-color);
}

.btn{
    display: inline-block;
    padding: 2rem 2.8rem;
    background: var(--main-color);
    border-radius: 4rem;
    box-shadow: 0 0 1rem var(--main-color);
    font-size: 1.6rem;
    color: var(--second-bg-color);
    letter-spacing: 0.1rem ;
    font-weight: 600;
    text-decoration: none;
    transition: 0.5s ease;
}

.btn:hover{
    box-shadow: none;
}

.about{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background: var(--second-bg-color);
}
.heading{
    text-align: center;
    font-size: 4.5rem;
}
.about-content h2{
    text-align: left;
    line-height: 1.2;
}

.about-content h3{
    font-size: 2.5rem;
}

.about-content p{
    font-size: 1.6rem;
    margin: 2rem 0 3rem;
}
    </style>
</head>

<body>

    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <!-- <a href="#home" class="active">Home</a> -->
            <!-- <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a> -->
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Harsh Gautam</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nihil rerum, vel neque consequuntur
                facilis delectus officia. </p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
    </section>

    <!-- <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Frontend Developer</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia molestias enim repellat, dolore optio
                eveniet similique nihil magni et? Cum sed deleniti placeat quia eaque qui magni? Quae, optio, fugit iste
                excepturi labore consequatur rem nobis, similique accusantium laborum laudantium illum quaerat quod
                quibusdam nemo? Aperiam!</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section> -->

    <!-- <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>
        <div class="services-container"></div>
    </section> -->

</body>
<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script>
    const typed = new Typed('.multiple-text',{
    strings: ['Frontend Developer','Backend Developer','Graphic Designer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});
</script>

</html>