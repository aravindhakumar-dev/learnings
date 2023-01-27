var prdcate1 = document.querySelector('.prd-categ:first-child');
var prdcate2 = document.querySelector('.prd-categ:nth-child(2)');
var prdcate3 = document.querySelector('.prd-categ:nth-child(3)');
var prdcate4 = document.querySelector('.prd-categ:nth-child(4)');
var prdcate5 = document.querySelector('.prd-categ:nth-child(5)');
var prdcate6 = document.querySelector('.prd-categ:nth-child(6)');
var nxtbtn = document.querySelector('.next');
var prevbtn = document.querySelector('.prev');
nxtbtn.addEventListener('click', () => {
    gsap.to('.slider-container', {
        rotate: 45,
        duration: 0.5

    })
    gsap.to('.prd-categ', {
        rotate: -45,
        duration: 0.5
    })
})

prevbtn.addEventListener('click', () => {
    gsap.to('.slider-container', {
        rotate: -45,
        duration: 0.5

    })
    gsap.to('.prd-categ', {
        rotate: 45,
        duration: 0.5
    })
})
