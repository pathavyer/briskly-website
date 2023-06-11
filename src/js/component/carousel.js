import EmblaCarousel from 'embla-carousel';

export default function initCarousel() {
    const emblaNode = document.querySelector('.embla');
    const nextBtn = document.querySelector('.embla__button--next');
    const prevBtn = document.querySelector('.embla__button--prev');
    const viewPort = emblaNode.querySelector('.embla__viewport');
    let embla ;

    const options = { 
        loop: false,
        align: 'start', 
        containScroll: true,
        slidesToScroll: 1,
    };

    if (emblaNode) {
        embla = EmblaCarousel(viewPort, options);
    }

    const setupPrevNextBtns = (prevBtn, nextBtn, embla) => {
        prevBtn.addEventListener('click', embla.scrollPrev, false);
        nextBtn.addEventListener('click', embla.scrollNext, false);
    };

    const disablePrevNextBtns = (prevBtn, nextBtn, embla) => {
        return ()   => {
            if (embla.canScrollPrev()) prevBtn.removeAttribute('disabled');
            else prevBtn.setAttribute('disabled', true);
            if (embla.canScrollNext()) nextBtn.removeAttribute('disabled');
            else nextBtn.setAttribute('disabled', true);
        }
    }

    const disablePrevAndNextBtns = disablePrevNextBtns(prevBtn, nextBtn, embla);

    setupPrevNextBtns(prevBtn, nextBtn, embla);
    embla.on('select', disablePrevAndNextBtns);
    embla.on('init', disablePrevAndNextBtns);
    
}