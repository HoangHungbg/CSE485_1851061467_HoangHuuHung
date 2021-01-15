<?php 
  require("config.php");
  $sql = "SELECT * FROM aboutme";
  $result = mysqli_query($conn, $sql);   
  
?>

</html>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- <style>
    body {
      background-image: url(./Hinh-nen-iphone-12\ \(1\).jpg);
      background-size: cover;
      position: relative;
    }
  </style> -->
    <script src="./index.js"></script>
</head>

<body>


    <!-- Navbar Start -->
    <header>
        <nav id="nav" class="fixed-top">
            <a href="http://localhost:8080/BTweb/BTCV/" class="textnav"><i class='fas fa-home'></i>Home</a>
            <a href="#a1" class="textnav"><i class='fas fa-camera-retro'></i>About Me</a>
            <a href="#a2" class="textnav"><i class='fas fa-address-card'></i>Resume</a>
        </nav>
    </header>
    <!-- Navbar End -->


    <div class="container" id="hhhh">
        <div class="row" id="header">
            <div class="col-md-4" id="img5">
                <img alt="Bootstrap Image Preview" id="img1" class="rounded-circle"
                    src="./119933370_2881507338747755_4765109110570642536_o.jpg" />
            </div>
            <div class="col-md-8">
                <h2 id="name">Hoang Hung</h2>
                <p id="underline"></p>
                <h5 id="web">Web Developer</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <img src="./anhcoder.jpg" alt="" id="imgcoder">
        </div>
    </div>
    <!-- het phan dau 
            tien  -->

    <div class="container">
        <div id="a1" class="row content">
            <div id="aboutMe">
                <?php
            while($row = mysqli_fetch_array($result)){
        ?>
                <div>
                    <h2 id="TitleAboutme">AboutMe</h2>
                    <p id="contentAboutme">
                        Hello, my name is <?php echo $row['name']?>. I am <?php echo $row['age']?> years
                        old.<?php echo $row['address']?>.<?php echo $row['desc']?> </p>
                    <!-- Currently I live and work in Hanoi city. I am an
            open-minded, cheerful person with everyone and love to make friends. -->
                    <?php
            }
        ?>
                    <h3 id="TitleAboutme1">
                        Favourite
                    </h3>
                    <ul>
                        <li id="contentAboutme" class="list-item">
                            Sport
                        </li>
                        <li id="contentAboutme" class="list-item">
                            Listening to music
                        </li>
                        <li class="list-item" id="contentAboutme">
                            Reading books
                        </li>
                        <li class="list-item" id="contentAboutme">
                            Watch movie
                        </li>
                    </ul>
                    <h3 id="TitleAboutme1">
                        DisLike
                    </h3>
                    <ul>
                        <li class="list-item" id="contentAboutme">
                            Lorem ipsum dolor sit ameth
                        </li>
                        <li class="list-item" id="contentAboutme">
                            Consectetur adipiscing elit
                        </li>
                        <li class="list-item" id="contentAboutme">
                            Integer molestie lorem at massa
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="./imgMe.jpg" alt="" id="imgMe">
                </div>
            </div>
        </div>
    </div>
    <!-- Resume       -->
    <div class="container">
        <div id="a2" class="row content">
            <h2 id="exp">EXPERIENCE</h2>
            <div id="exp1">
                <div>
                    <i class='fas fa-square texEXP' id="tex"></i>
                </div>
                <div>
                    <span id="texx">Senior Graphic Designer</span>
                    <p class="texEXP2">2021-2023</p>
                </div>
                <div id="exp4">
                    <h4 class="texEXP">Photo Editing</h4>
                    <p class="texEXP2">Worked with individual stack holders within the association and external members.
                        Collaborated with them to establish needs and desires.
                        Created unique pieces while maintaining established branding.
                        .</p>
                </div>
            </div>
            <div id="exp1">
                <div>
                    <i class='fas fa-square texEXP' id="tex"></i>
                </div>
                <div>
                    <span id="texx"> Graphic Designer</span>
                    <p class="texEXP2">2020-2021</p>
                </div>
                <div id="exp4">
                    <h4 class="texEXP">Adobe InDesign and
                        Adobe Photoshop</h4>
                    <p class="texEXP2">Designed and supervised all internal and external communications for all seven
                        divisions.
                        Lead the design division within the sales & marketing department nationwide.
                        Daily responsibilities included but were not limited to; designing and developing all printed
                        and web marketing materials, internal and external newsletters, corporate magazines, sales and
                        marketing presentation materials, brochures, annual calendars, trade shows, etc.
                        Managed relationships and operated as the liaison and chief point of contact between the web
                        developing company, print vendors, modeling agencies, and all other marketing vendors.</p>
                </div>
            </div>
            <div id="exp1">
                <div>
                    <i class='fas fa-square texEXP' id="tex"></i>
                </div>
                <div>
                    <span id="texx">Web Develop</span>
                    <p class="texEXP2">2018-2020</p>
                </div>
                <div id="exp4">
                    <h4 class="texEXP">Skills & Tools: PHP, PERL, Access, Oracle, .NET, CSS</h4>
                    <p class="texEXP2">Designed and developed user-friendly website, including optimized check-out page
                        that increased user clicks, and subsequently customer purchases by 20%
                        Fixed bugs from existing websites and implemented enhancements that significantly improved web
                        functionality and speed</p>
                </div>
            </div>
            <!-- het mot hang -->
            <div class="container">
                <div class="row content">
                    <!-- <div class="col-md-12">
          <h2 id="exp" >EXPERIENCE</h2>
        </div> -->
                    <h2 id="exp">EDUCATION</h2>
                    <div id="exp1">
                        <div>
                            <i class='fas fa-square texEXP' id="tex"></i>
                        </div>
                        <div>
                            <span id="texx">Aptech Computer Education</span>
                            <p class="texEXP2">2021-2023</p>
                        </div>
                        <div id="exp4">
                            <h4 class="texEXP">Contents</h4>
                            <p class="texEXP2">HTML5 and CSS markup language.
                                JavaScript programming language.
                                JQuery library.
                                Bootstrap Framework.
                                AngularJS
                                SQL query language.
                                SQL Serveer / MySQL Database Management System.
                                PHP programming language. </p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            <i class='fas fa-square texEXP' id="tex"></i>
                        </div>
                        <div>
                            <span id="texx"> Thuy Loi Univercity</span>
                            <p class="texEXP2">2020-2021</p>
                        </div>
                        <div id="exp4">
                            <h4 class="texEXP">Course</h4>
                            <p class="texEXP2"> SQL query language.
                                SQL Serveer / MySQL Database Management System.
                                PHP programming language.
                                C programming </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row content">
            <div class="col-md-5">
                <h2 id="contacts">CONTACTS</h2>
                <svg xmlns="http://www.w3.org/2000/svg" id="contact1" width="20" height="20" fill="currentColor"
                    class="bi bi-align-center texEXP" viewBox="0 0 16 16">
                    <path
                        d="M8 1a.5.5 0 0 1 .5.5V6h-1V1.5A.5.5 0 0 1 8 1zm0 14a.5.5 0 0 1-.5-.5V10h1v4.5a.5.5 0 0 1-.5.5zM2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z" />
                </svg> <span class="texEXP2">175 Tây Sơn, Đống Đa, Hà Nội</span>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" id="contact1" width="20" height="20" fill="currentColor"
                    class="bi bi-phone-vibrate texEXP" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M10 3H6a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z" />
                    <path fill-rule="evenodd"
                        d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z" />
                </svg> <span class="texEXP2">096918888</span>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" id="contact1" width="20" height="20" fill="currentColor"
                    class="bi bi-envelope-fill texEXP" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                </svg><span class="texEXP2">hunghieubg@gmail.com </span>
            </div>
            <div class="col-md-7">
                <h2 id="skill">SKILL</h2>
                <span class="texEXP2">HTML
                    <div id="skill1" class="progress">
                        <div class="progress-bar" style="width:80%">80%</div>
                    </div>
                </span>
                <span class="texEXP2">CSS
                    <div id="skill1" class="progress">
                        <div class="progress-bar" style="width:70%">70%</div>
                    </div>
                </span>
                <span class="texEXP2">JSON
                    <div id="skill1" class="progress">
                        <div class="progress-bar" style="width:50%">50%</div>
                    </div>
                </span>
                <span class="texEXP2">Bootstrap
                    <div style="margin-bottom: 90px;" id="skill1" class="progress">
                        <div class="progress-bar" style="width:70%">70%</div>
                    </div>
                </span>
            </div>
        </div>








        <!-- <div class="col-md-6">
        <h4 id="texx"><i class='fas fa-square' id="tex"></i> Senior Grapphic Designer</h4>
        <p id="year">2021-2023</p>
        <h4 id="texx"><i class='fas fa-square' id="tex"></i> Graphic Designer</h4>
        <p id="year">2020-2021</p>
        <h4 id="texx"><i class='fas fa-square' id="tex"></i> Web Develop</h4>
        <p id="year">2018-2020</p>
      </div>
      <div class="col-md-6">
        <h4>sdfggg</h4>
        <p>Going for a job interview can be daunting under any circumstances but conducting one in a language that is
          not your first can make the whole process seem even harder. However, we can enter an interview prepared.
          Interview questions will frequently relate to our work experience; for those skills we have learned to make us
          the right person for the job. </p>
      </div> -->








        <!-- <header>
      <nav id="nav" class="fixed-top">
        <a href="file:///D:/New%20folder/BootStrap/BTtuluyen/index.html#" class="textnav"><i class='fas fa-home'></i>Home</a>
        <a href="" class="textnav"><i class='fas fa-camera-retro'></i>About Me</a>
        <a href="" class="textnav"><i class='fas fa-address-card'></i>Resume</a>
      </nav>
    </header> -->
        <!-- <div>
     
      <div class="container" >
        <div class="row">
          <div class="col-md-3" id="Bgdiv1">
            <img alt="Bootstrap Image Preview" id="img1" class="rounded-circle"src="./119933370_2881507338747755_4765109110570642536_o.jpg" />
          </div> 
           <br>
          <p id="name"><strong><span>My Name
           asasdasdasdasdasdasdasdasdasd           <br> Hoàng Hưng(Designer)</span> </strong></p> 
        </div>
        
        <div class="row", id="divleft">
          <div class="col-md-3">
            <h2>asdas</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-center" viewBox="0 0 16 16">
              <path d="M8 1a.5.5 0 0 1 .5.5V6h-1V1.5A.5.5 0 0 1 8 1zm0 14a.5.5 0 0 1-.5-.5V10h1v4.5a.5.5 0 0 1-.5.5zM2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
            </svg> 175 Tây Sơn, Đống Đa, Hà Nội
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 3H6a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"/>
              <path fill-rule="evenodd" d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"/>
            </svg>
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
            </svg>
            <hr class="Hr">
            <h3>Skill</h3>
            <span>HTML
            <div class="progress">
              <div class="progress-bar" style="width:80%">80%</div>
            </div>
          </span>
          <span>CSS
            <div class="progress">
              <div class="progress-bar" style="width:70%">70%</div>
            </div>
          </span><span>JSON
            <div class="progress">
              <div class="progress-bar" style="width:50%">50%</div>
            </div>
          </span><span>Bootstrap
            <div class="progress">
              <div class="progress-bar" style="width:70%">70%</div>
            </div>
          </span>
          <hr class="Hr">
          </div>
          <div class="col-md-9">
            <h3> 
              <i class="bi bi-align-center"></i> h3. Lorem ipsum dolor sit amet.
            </h3>
            <ul>
              <li class="list-item">
                Lorem ipsum dolor sit amet
              </li>
              <li class="list-item">
                Consectetur adipiscing elit
              </li>
              <li class="list-item">
                Integer molestie lorem at massa
              </li>
              <li class="list-item">
                Facilisis in pretium nisl aliquet
              </li>
              <li class="list-item">
                Nulla volutpat aliquam velit
              </li>
              <li class="list-item">
                Faucibus porta lacus fringilla vel
              </li>
              <li class="list-item">
                Aenean sit amet erat nunc
              </li>
              <li class="list-item">
                Eget porttitor lorem
              </li>
            </ul>
            <h3>
              h3. Lorem ipsum dolor sit amet.
            </h3>
            <ul>
              <li class="list-item">
                Lorem ipsum dolor sit amet
              </li>
              <li class="list-item">
                Consectetur adipiscing elit
              </li>
              <li class="list-item">
                Integer molestie lorem at massa
              </li>
              <li class="list-item">
                Facilisis in pretium nisl aliquet
              </li>
              <li class="list-item">
                Nulla volutpat aliquam velit
              </li>
              <li class="list-item">
                Faucibus porta lacus fringilla vel
              </li>
              <li class="list-item">
                Aenean sit amet erat nunc
              </li>
              <li class="list-item">
                Eget porttitor lorem
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>