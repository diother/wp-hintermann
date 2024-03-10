export function headerWindows() {
    const mobileMenu = document.querySelector('.mobile-menu')
    const searchWindow = document.querySelector('.search-window')

    if (!mobileMenu && !searchWindow) return

    const html = document.documentElement
    const menuButton = document.querySelector('body > header .menu-container')
    const searchButton = document.querySelector('body > header .search-container')

    var menu = 'closed'
    var search = 'closed'
    var waiting = false
    
    menuButton.addEventListener('click', () => {
        if (waiting) return
        if (menu == 'closed') openMenu()
        else closeMenu()
    })
    searchButton.addEventListener('click', () => {
        if (waiting) return
        if (search == 'closed') openSearch()
        else closeSearch()
    })

    function openMenu() {
        if (search == 'open') closeSearch()

        menu = 'open'
        mobileMenu.classList.add('animation')
        html.classList.add('active-menu')
        menuButton.classList.add('active-menu')
        
        waiting = true
        setTimeout(() => { waiting = false }, 500)
    }
    function closeMenu() {
        menu = 'closed'
        mobileMenu.classList.remove('animation')
        menuButton.classList.remove('active-menu')

        waiting = true
        setTimeout(() => {
            html.classList.remove('active-menu')
            waiting = false
        }, 500)
    }
    function openSearch() {
        if (menu == 'open') closeMenu()

        search = 'open'
        searchWindow.classList.add('animation')
        html.classList.add('active-search')
        searchButton.classList.add('active-search')
        searchWindow.querySelector('input').focus()
        
        waiting = true
        setTimeout(() => { waiting = false }, 500)
    }
    function closeSearch() {
        search = 'closed'
        searchWindow.classList.remove('animation')
        searchButton.classList.remove('active-search')
        searchWindow.querySelector('input').value = ''

        waiting = true
        setTimeout(() => {
            html.classList.remove('active-search')
            waiting = false
        }, 500)
    }
}