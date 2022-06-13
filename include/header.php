
      
      <!-- Header Start -->
      <div class="container-fluid main-txt">
         <div class="top-header">
            <div class="play-sound">
               <a href="#" id="hashplay" href="javascript:void(0)">
               <i class="fa-solid fa-volume-xmark"></i>
               <span>play sound</span>
               </a>
            </div>
            <div class="logo">
               <div class="underlined-animatedl"></div>
               <a href="index.php">
               <img src="images/logo.png" alt="zenogakki">
               </a>
              <div class="underlined-animated"></div>
            </div>
            <div class="social-icons">
               <ul>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-discord"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-twitter"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="border-cntnt">
          <div class="side-borders drawing-borders" id="box">
            <div class="dots"></div>
            <header>
               <div class="bottom-header">
                  <nav class="navbar navbar-expand-lg navbar-dark">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                           <li class='<?=(isset($navitem) && $navitem=="home")?"active":"" ?> hovertext-container'>
                              <a class="nav-link hovertext-p1" href="index.php">CHAMBER OF REBIRTH</a>
                              <a class="nav-link hovertext-p2" href="index.php">HOME</a>
                           </li>
                           <li class='<?=(isset($navitem) && $navitem=="utopia")?"active":"" ?> hovertext-container'>
                              <a class="nav-link hovertext-p1" href="utopia.php">UTOPIA</a>
                              <a class="nav-link hovertext-p2" href="utopia.php">STORY LINE</a>
                           </li>
                           <li class='<?=(isset($navitem) && $navitem=="prophecy")?"active":"" ?> hovertext-container'>
                              <a class="nav-link hovertext-p1" href="prophecy.php">PROPHECY</a>
                              <a class="nav-link hovertext-p2" href="prophecy.php">WHITE PAPER</a>
                           </li>
                           <li class='<?=(isset($navitem) && $navitem=="recordings")?"active":"" ?> hovertext-container'>
                              <a class="nav-link disabled hovertext-p1" href="#">RECORDINGS</a>
                              <a class="nav-link disabled hovertext-p2" href="#">COMMING SOON</a>
                           </li>
                           <li class='<?=(isset($navitem) && $navitem=="destructions")?"active":"" ?> hovertext-container'>
                              <a class="nav-link disabled hovertext-p1" href="#">DESTRUCTION</a>
                              <a class="nav-link disabled hovertext-p2" href="#">COMMING SOON</a>
                           </li>
                           <li class='<?=(isset($navitem) && $navitem=="synergy")?"active":"" ?> hovertext-container'>
                              <a class="nav-link disabled hovertext-p1" href="#">SYNERGY</a>
                              <a class="nav-link disabled hovertext-p2" href="#">COMMING SOON</a>
                           </li>
                        </ul>
                     </div>
                     <p>CHAMBER OF REBIRTH</p>
                  </nav>
               </div>
            </header>