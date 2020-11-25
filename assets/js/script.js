document.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.header--burger')
    const navLinks = document.querySelectorAll('.nav-links')
    const observeHhead = document.querySelector('.observe-header')
    const headerNav = document.querySelector('.header--nav')
    const header = document.querySelector('.header')

    burger.addEventListener('click', function(e) {

        const height = headerNav.getBoundingClientRect().height

        this.classList.toggle('open')
        header.style.overflow = 'hidden'
        headerNav.style.height = '0'
        //когда уже нормально сделают position: sticky ?(
        headerNav.classList.toggle('opened')
        header.removeAttribute('style')
        setTimeout(function (){
            headerNav.style.transition = '.4s'
            headerNav.style.height = height + 'px'

            setTimeout(function () {
                headerNav.removeAttribute('style')
            }, 500)
        },10)
    })

    navLinks.forEach(q => {
        q.addEventListener('click', () => {
            navLinks.forEach(w => {
                w.classList.remove('active')
            })
            q.classList.add('active')
        })
    })

    const trigger = new IntersectionObserver( entries => {
        const e = entries[0]

        if(!e.isIntersecting) {
            header.classList.add('moving')
        }
        if(e.isIntersecting) {
            header.classList.remove('moving')
        }
    })

    trigger.observe(observeHhead)
})