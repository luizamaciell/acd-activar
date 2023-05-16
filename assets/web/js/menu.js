class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
  );
  mobileNavbar.init();


  // --------------------------------------------------


  let problems = document.querySelector("#relatar");
  problems.addEventListener("click", () => {

    window.location.href = "http://www.localhost/ajuda-prefeitura/relatar";

  });

  let login = document.querySelector("#login");
  login.addEventListener("click", () => {

    window.location.href = "http://www.localhost/ajuda-prefeitura/entrar";
    

  });
  
  let aviso = document.querySelector("#avisos");
  //aviso.classList.add("hidden");

    aviso.addEventListener("click", () => {

        window.location.href = "http://www.localhost/ajuda-prefeitura/avisos";


    });

    let demanda = document.querySelector("#demandas");
    demanda.addEventListener("click", () => {

      window.location.href = "http://www.localhost/ajuda-prefeitura/demanda"

    });
