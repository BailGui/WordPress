(function () {
    'use strict';
    window.onload = function() {
        var ticker = document.querySelector('.ronny-header-ticker');
        ticker.style.opacity = 1;
    };

    // Switching to mobile: https://developer.mozilla.org/en-US/docs/Web/API/MediaQueryList/onchange
    const isMobile = window.matchMedia(
        '(max-width: ' + getComputedStyle(document.body).getPropertyValue('--custom--media-max-width--lg') + ')'
    );
    const navigationResponsiveContainer = document.querySelector(
        '.site-header .wp-block-navigation__responsive-container'
    );
    isMobile.onchange = (e) => {
        if (e.matches) {
            // <= Mobile
        } else {
            // > Mobile
            // Autoclose header nav container if modal is open and browser window gets resized.
            if (
                document.body.contains(navigationResponsiveContainer) &&
                navigationResponsiveContainer.classList.contains('is-menu-open')
            ) {
                document.querySelector('.site-header .wp-block-navigation__responsive-container-close').click();
            }
        }
    };
    const throttle = (func, delay) => {
        let throttleTimer;
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(throttleTimer);
            throttleTimer = setTimeout(() => func.apply(context, args), delay);
        };
    };
    document.addEventListener('DOMContentLoaded', function () {
        const scrollUp = document.getElementById('back-to-top');
        if (scrollUp) {
            const scrollHandler = throttle(function () {
                const scrollPosition = window.scrollY || document.body.scrollTop;
                if (scrollPosition > 300) {
                    scrollUp.classList.add('is-visible');
                } else {
                    scrollUp.classList.remove('is-visible');
                }
            }, 250);
            window.addEventListener('scroll', scrollHandler);
            scrollUp.addEventListener('click', e => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
    // Style password protected post form.
    const passwordButton = document.querySelector('.post-password-form [type="submit"]');
    if (document.body.contains(passwordButton)) {
        const passwordButtonWrapper = document.createElement('div');
        passwordButtonWrapper.classList.add('wp-block-button');
        passwordButton.parentNode.insertBefore(passwordButtonWrapper, passwordButton);
        passwordButtonWrapper.appendChild(passwordButton);
        passwordButton.classList.add('wp-block-button__link');
    }
    let ronnyTicker = new Swiper(".ronny-ticker", {
        spaceBetween: 0,
        slidesPerView: 1,
        speed: 300,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        allowTouchMove: true,
        disableOnInteraction: true,
        navigation: {
            nextEl: ".ronny-ticker-next",
            prevEl: ".ronny-ticker-prev",
            clickable: true,
        },
    });
    var ronnySlider = new Swiper(".ronny-banner-slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".ronny-swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".ronny-banner-next",
            prevEl: ".ronny-banner-prev",
        },
        // Add more options as needed
    });
    var ronnySwiperHolder = document.querySelectorAll(".ronny-swiper-holder");
    ronnySwiperHolder.forEach(function (holder) {
        var wpBlockPosts = holder.querySelectorAll(".wp-block-post");
        wpBlockPosts.forEach(function (post) {
            post.classList.add("swiper-slide");
        });
    });
})();
