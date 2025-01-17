var pageLink = document.querySelectorAll('.page-scroll');

      pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
          e.preventDefault();
          document.querySelector(elem.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        var sections = document.querySelectorAll('.page-scroll');
        var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        for (var i = 0; i < sections.length; i++) {
          var currLink = sections[i];
          var val = currLink.getAttribute('href');
          var refElement = document.querySelector(val);
          var scrollTopMinus = scrollPos + 73;
          if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
            document.querySelector('.page-scroll').classList.remove('active');
            currLink.classList.add('active');
          } else {
            currLink.classList.remove('active');
          }
        }
      };

      window.document.addEventListener('scroll', onScroll);


      //===== close navbar-collapse when a  clicked
      let navbarToggler = document.querySelector(".navbar-toggler");
      var navbarCollapse = document.querySelector(".navbar-collapse");

      document.querySelectorAll(".page-scroll").forEach(e =>
        e.addEventListener("click", () => {
          navbarToggler.classList.remove("active");
          navbarCollapse.classList.remove('show')
        })
      );
      navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
        navbarCollapse.classList.toggle('show')
      })