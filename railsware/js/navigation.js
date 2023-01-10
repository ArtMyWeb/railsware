/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
document.addEventListener('DOMContentLoaded', function () {
    let body = document.querySelector('body')
    let hamburger = document.querySelector('.hamburger')
    hamburger.addEventListener('click', () => {
        body.classList.toggle('is-nav-shown')
    })
})
