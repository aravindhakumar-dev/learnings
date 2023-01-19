(function () {
    'use strict';

    function startSetup(sliderSize, slideSize, animationDuration, autoplayInterval) {
        this.sliderSize = parseFloat(sliderSize) / 100;
        this.slideSize = parseFloat(slideSize) / 100;
        this.animationDuration = parseFloat(animationDuration);
        this.autoplayInterval = parseFloat(autoplayInterval);
    };

    function Slider(newSlider, sliderSize, slideSize, animationDuration, autoplayInterval) {
        this.startSetup = new startSetup(sliderSize, slideSize, animationDuration, autoplayInterval);
        this.wrapper = newSlider.querySelector('.wrapper');
        this.slides = newSlider.querySelectorAll('.circular-slider .wrapper .slides-holder .slides-holder__item');
        this.slidesSize = 0;
        this.descriptionsHolder = newSlider.querySelector('.circular-slider .wrapper .descriptions');
        this.descriptions = newSlider.querySelectorAll('.circular-slider .wrapper .descriptions .descriptions__item');
        this.slidesHolder = newSlider.querySelector('.circular-slider .wrapper .slides-holder');
        this.btnLeft = newSlider.querySelector('.circular-slider .wrapper .controls .controls__left');
        this.btnRight = newSlider.querySelector('.circular-slider .wrapper .controls .controls__right');
        this.btnAutoplay = newSlider.querySelector('.circular-slider .wrapper .controls .controls__autoplay');
        this.currentAngle = 0;
        this.stepAngle = (2 * Math.PI) / this.slides.length;
        this.currentSlide = 0;
        this.slidesHolder.style.transitionDuration = this.startSetup.animationDuration + 'ms';
        this.onResize();
        this.setAutoplay();
        this.setNav();
        window.addEventListener('resize', this.onResize.bind(this));
        let _this = this;
        this.btnAutoplay.onclick = function () {
            if (this.classList.contains('controls__autoplay_running')) {
                this.classList.remove('controls__autoplay_running');
                this.classList.add('controls__autoplay_paused');
                clearInterval(_this.autoplay);
                _this.autoplay = null;
            } else {
                this.classList.remove('controls__autoplay_paused');
                this.classList.add('controls__autoplay_running');
                _this.setAutoplay();
            }
        }
    };

    Slider.prototype.onResize = function () {
        let radius,
            w = this.wrapper.parentNode.getBoundingClientRect().width,
            h = this.wrapper.parentNode.getBoundingClientRect().height;
        2 * h <= w ? radius = h * this.startSetup.sliderSize : radius = (w / 2) * this.startSetup.sliderSize;
        this.setSize(Math.round(radius));
    };

    Slider.prototype.setAutoplay = function () {
        let _this = this;
        this.autoplay = setInterval(function () {
            _this.nextSlide();
        }, this.startSetup.autoplayInterval);
    };

    Slider.prototype.setNav = function () {
        let _this = this;
        this.btnLeft.onclick = function () {
            _this.prevSlide();
        };
        this.btnRight.onclick = function () {
            _this.nextSlide();
        };
    };

    Slider.prototype.addStyle = function () {
        // add css styles to different elements of the slider here
    };
    Slider.prototype.prevSlide = function () {
        this.currentSlide--;
        if (this.currentSlide < 0) {
            this.currentSlide = this.slides.length - 1;
        }
        this.currentAngle -= this.stepAngle;
        this.slidesHolder.style.transform = 'rotate(' + this.currentAngle + 'rad)';
    };

    Slider.prototype.nextSlide = function () {
        this.currentSlide++;
        if (this.currentSlide >= this.slides.length) {
            this.currentSlide = 0;
        }
        this.currentAngle += this.stepAngle;
        this.slidesHolder.style.transform = 'rotate(' + this.currentAngle + 'rad)';
    };

