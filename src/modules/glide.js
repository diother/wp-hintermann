import Glide from '@glidejs/glide'

export function glide() {
    const sliders = document.querySelectorAll('.glide')
    const configuration = {
        rewind: false,
        perView: 3,
        gap: 20,
        bound: true,
        animationDuration: 350,
        animationTimingFunc: 'cubic-bezier(0.39, 0.575, 0.565, 1)',
        swipeThreshold: 40,
        dragThreshold: 80,
        touchAngle: 25,
        breakpoints: {
            1064: {
                perView: 2
            },
            639: {
                perView: 1.1
            }
        }
    }
    sliders.forEach(item => {
        new Glide(item, configuration).mount()
    })
}