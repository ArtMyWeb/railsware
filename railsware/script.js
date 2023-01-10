document.addEventListener('DOMContentLoaded', function () {
    let body = document.querySelector('body')
    let hamburger = document.querySelector('.hamburger')
    hamburger.addEventListener('click', () => {
        body.classList.toggle('is-nav-shown')
    })
})