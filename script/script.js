
 
    var navbar = document.getElementById('navbar');
    var navbarOffset = navbar.offsetTop;
  
    window.addEventListener('scroll', function() {
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
      if (scrollTop > navbarOffset) {
        navbar.classList.add('fixed-top');
      } else {
        navbar.classList.remove('fixed-top');
      }
    });
  
  
  