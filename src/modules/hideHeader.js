export function hideHeader() {
    const header = document.querySelector('body > header')
    if (!header) return

    var didScroll
    window.addEventListener('scroll', () => {
        didScroll = true
    })
    setInterval(() => {
        if (!didScroll) return
        hasScrolled()
        didScroll = false
    }, 250)

    var lastPageOffset = 0
    var delta = 5
    const navbarHeight = header.offsetHeight
    var isTop = true

    const body = document.body
    const html = document.documentElement
    const documentHeight = Math.max(
        body.scrollHeight, 
        body.offsetHeight, 
        html.clientHeight, 
        html.scrollHeight, 
        html.offsetHeight 
    )
    function hasScrolled() {
        var currentPageOffset = window.scrollY

        if (currentPageOffset <= navbarHeight && !isTop) {
            header.classList.add('is-top')
            isTop = true
        }
        if (currentPageOffset > navbarHeight && isTop) {
            header.classList.remove('is-top')
            isTop = false
        }

        if ( Math.abs(lastPageOffset - currentPageOffset) <= delta ) return

        if ( currentPageOffset > lastPageOffset && currentPageOffset > navbarHeight ) {
            header.classList.add('nav-up')
        } 
        else {
            if ( currentPageOffset + window.innerHeight >= documentHeight ) return
            header.classList.remove('nav-up')
        }
        lastPageOffset = window.scrollY
    }
}