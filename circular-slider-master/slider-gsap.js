var prdcate1 = document.querySelector('.prd-categ:first-child');
var prdcate2 = document.querySelector('.prd-categ:nth-child(2)');
var prdcate3 = document.querySelector('.prd-categ:nth-child(3)');
var prdcate4 = document.querySelector('.prd-categ:nth-child(4)');
var prdcate5 = document.querySelector('.prd-categ:nth-child(5)');
var prdcate6 = document.querySelector('.prd-categ:nth-child(6)');

document.querySelector('.next').addEventListener('click', () => {
    gsap.to('.slider-container', {
        rotate: 75,
        duration: 0.5

    })
    gsap.to('.prd-categ', {
        rotate: -75,
        duration: 0.5
    })
    gsap.to(prdcate3, {
        scale: 1,
        x: -300,
        y: -300
    })
})
document.querySelector('.next').addEventListener('click', () => {
    gsap.to('.slider-container', {
        rotate: 75,
        duration: 0.5

    })
    gsap.to('.prd-categ', {
        rotate: -75,
        duration: 0.5
    })
    gsap.to(prdcate4, {
        scale: 1,
        x: -300,
        y: -300
    })
})

