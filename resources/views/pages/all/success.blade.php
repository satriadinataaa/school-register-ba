<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Details</title>
    <link
      rel="stylesheet"
      href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}"
    />
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}" />
    <link
      href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/dist/xzoom.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
    <style>
      .MobileNav_root__3bEa2{position:fixed;bottom:0;left:0;right:0;z-index:999999999;will-change:transform;box-shadow:0 -4px 24px -4px rgba(0,0,0,.08)}@media(max-width:419px){.MobileNav_root__3bEa2{padding-left:2px;padding-right:2px;padding-bottom:4px;display:block}}@media(min-width:420px){.MobileNav_root__3bEa2{padding-left:12px;padding-right:12px;padding-bottom:12px;display:block}}@media(min-width:720px){.MobileNav_root__3bEa2{padding-left:12px;padding-right:12px;padding-bottom:12px;display:block}}@media(min-width:840px){.MobileNav_root__3bEa2{display:none}}@media(min-width:1080px){.MobileNav_root__3bEa2{display:none}}@media(min-width:1440px){.MobileNav_root__3bEa2{display:none}}.MobileNav_nav__17ggK{background-color:#466753;list-style:none;display:flex;justify-content:space-around}@media(max-width:419px){.MobileNav_nav__17ggK{border-radius:6px}}@media(min-width:420px){.MobileNav_nav__17ggK{border-radius:6px}}@media(min-width:720px){.MobileNav_nav__17ggK{border-radius:6px}}@media(min-width:840px){.MobileNav_nav__17ggK{border-radius:6px}}@media(min-width:1080px){.MobileNav_nav__17ggK{border-radius:6px}}@media(min-width:1440px){.MobileNav_nav__17ggK{border-radius:6px}}.MobileNav_menuWrapper__SsvEP{display:block;color:hsla(0,0%,100%,.71)}.MobileNav_menuWrapper__SsvEP .MobileNav_icon__3KUn3{color:hsla(0,0%,100%,.54)}.MobileNav_menuWrapper__SsvEP.MobileNav_activeMenu__tYL9c,.MobileNav_menuWrapper__SsvEP.MobileNav_activeMenu__tYL9c .MobileNav_icon__3KUn3{color:#fff}.MobileNav_item__3MWNE{padding:8px 4px;display:inline-flex;flex-direction:column;justify-content:center;align-items:center;width:64px;height:64px}.MobileNav_icon__3KUn3{margin-left:auto;margin-right:auto;margin-bottom:4px;width:28px;height:28px}.MobileNav_navItem__qLht4{width:100%;text-align:center;font-size:11px;line-height:12px}
    </style>
  </head>
  <body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
   
    
    <main>
      <div class="section-success d-flex align-items-center">
        <div class="col text-center">
          <img src="{{ url('frontend/images/ic_mail.png') }}" alt="" class="">
          <h1>Yay! Success</h1>
          <p>
            Kami telah menerima data pendaftaran anda<br>Terima kasih
          </p>
          <a href="{{ route('Home') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
      </div>
    </main>
    <nav class="MobileNav_root__3bEa2"><ul class="MobileNav_nav__17ggK"><a rel="noopener noreferrer" class="MobileNav_menuWrapper__SsvEP MobileNav_activeMenu__tYL9c" href="/"><div class="MobileNav_item__3MWNE"><svg role="img" viewBox="0 0 24 24" class="MobileNav_icon__3KUn3" fill="none"><path d="M16 4H18C18.5304 4 19.0391 4.21071 19.4142 4.58579C19.7893 4.96086 20 5.46957 20 6V20C20 20.5304 19.7893 21.0391 19.4142 21.4142C19.0391 21.7893 18.5304 22 18 22H6C5.46957 22 4.96086 21.7893 4.58579 21.4142C4.21071 21.0391 4 20.5304 4 20V6C4 5.46957 4.21071 4.96086 4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 2H9C8.44772 2 8 2.44772 8 3V5C8 5.55228 8.44772 6 9 6H15C15.5523 6 16 5.55228 16 5V3C16 2.44772 15.5523 2 15 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><li class="Text_small__4p47m MobileNav_navItem__qLht4"><span class="">Invitation</span></li></div></a><a rel="noopener noreferrer" class="MobileNav_menuWrapper__SsvEP" href="/story"><div class="MobileNav_item__3MWNE"><svg role="img" viewBox="0 0 24 24" class="MobileNav_icon__3KUn3" fill="none"><path d="M6.28571 6.375V4.92683C6.28571 4.41387 6.49158 3.92236 6.85714 3.5625V3.5625V3.5625C7.22333 3.20203 7.71657 3 8.23041 3H18C19.1046 3 20 3.89543 20 5V19.0642C20 19.5829 19.7918 20.0799 19.4222 20.4438V20.4438C19.0601 20.8002 18.5724 21 18.0642 21H17.1429M17.1429 21H5.93576C5.42765 21 4.9399 20.8002 4.57779 20.4438V20.4438C4.20815 20.0799 4 19.5829 4 19.0642V16.8125C4 15.7079 4.89543 14.8125 6 14.8125H12.8571C13.9617 14.8125 14.8571 15.7079 14.8571 16.8125V17.9123C14.8571 18.4482 15.0722 18.9617 15.4541 19.3376L16 19.875L17.1429 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path><path d="M13 12L9.875 9.5M9.875 9.5L6.04783 6.43826C5.6932 6.15456 5.25258 6 4.79844 6H3.38563C3.13203 6 2.88191 6.05904 2.65509 6.17246V6.17246C1.77625 6.61188 1.48141 7.72211 2.02644 8.53966L2.65139 9.47708C2.84392 9.76588 3.23412 9.84392 3.52292 9.65139V9.65139C3.94057 9.37295 4.5 9.67235 4.5 10.1743V10.4123C4.5 10.9392 5.02559 11.3044 5.51942 11.1207L9.875 9.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7 12V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 6H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><li class="Text_small__4p47m MobileNav_navItem__qLht4"><span class="">Story</span></li></div></a><a rel="noopener noreferrer" class="MobileNav_menuWrapper__SsvEP" href="/watch"><div class="MobileNav_item__3MWNE"><svg role="img" viewBox="0 0 24 24" class="MobileNav_icon__3KUn3" fill="none"><path d="M20.8 5H3.2C1.98497 5 1 5.95513 1 7.13333V18.8667C1 20.0449 1.98497 21 3.2 21H20.8C22.015 21 23 20.0449 23 18.8667V7.13333C23 5.95513 22.015 5 20.8 5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16 1L12 4L8 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><li class="Text_small__4p47m MobileNav_navItem__qLht4"><span class="">Watch</span></li></div></a><a rel="noopener noreferrer" class="MobileNav_menuWrapper__SsvEP" href="/gallery"><div class="MobileNav_item__3MWNE"><svg role="img" viewBox="0 0 24 24" class="MobileNav_icon__3KUn3" fill="none"><path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16 11.3701C16.1234 12.2023 15.9812 13.0523 15.5937 13.7991C15.2062 14.5459 14.5931 15.1515 13.8416 15.5297C13.0901 15.908 12.2384 16.0397 11.4077 15.906C10.5771 15.7723 9.80971 15.3801 9.21479 14.7852C8.61987 14.1903 8.22768 13.4229 8.09402 12.5923C7.96035 11.7616 8.09202 10.91 8.47028 10.1584C8.84854 9.40691 9.45414 8.7938 10.2009 8.4063C10.9477 8.0188 11.7977 7.87665 12.63 8.00006C13.4789 8.12594 14.2648 8.52152 14.8716 9.12836C15.4785 9.73521 15.8741 10.5211 16 11.3701Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><li class="Text_small__4p47m MobileNav_navItem__qLht4"><span class="">Gallery</span></li></div></a><a rel="noopener noreferrer" class="MobileNav_menuWrapper__SsvEP" href="/blessings"><div class="MobileNav_item__3MWNE"><svg role="img" viewBox="0 0 24 24" class="MobileNav_icon__3KUn3" fill="none"><path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><li class="Text_small__4p47m MobileNav_navItem__qLht4"><span class="">Blessings</span></li></div></a></ul></nav>
    
    <script src="{{ url('frontend/libraries/retina/retina.js') }}"></script>
    <script src="{{ url('frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });

        $('.datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" alt="" />'
          }
        });
      });
    </script>
  </body>
</html>
