import Splide from '@splidejs/splide';

export const enableSplide = () => {
  const sliders = document.querySelectorAll('[data-slider]');

  sliders.forEach((slider) => {
    const splideSlider = slider.querySelector('.splide');

    if (splideSlider) {
      new Splide(splideSlider, {
        type: 'loop',
        perPage: 3,
        breakpoints: {
          768: {
            perPage: 1,
          },
        },
        gap: 20,
      }).mount();
    }
  });
};