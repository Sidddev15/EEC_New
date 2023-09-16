// Navbar toggle for small screen
const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

function mobileNavToogle() {
  document.querySelector('body').classList.toggle('mobile-nav-active');
  mobileNavToggleBtn.classList.toggle('bi-list');
  mobileNavToggleBtn.classList.toggle('bi-x');
}
mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

// FAQ
document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
  faqItem.addEventListener('click', () => {
    faqItem.parentNode.classList.toggle('faq-active');
  });
});

// Owl carousel Client
$('.client').owlCarousel({
  loop:true,
  margin:10,
  dots:false,
  autoplay:true,
  autoplayTimeout: 4000,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:5,
          nav:true,
          loop:false
      }
  }
})