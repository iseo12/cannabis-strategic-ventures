// import $ from 'jquery'
import jump from '../node_modules/jump.js/dist/jump.js'

document.querySelector('.mobile-menu-toggle').addEventListener('click', () => {
    document.querySelector('.bar-1').classList.toggle('open')
    document.querySelector('.bar-2').classList.toggle('open')
    document.querySelector('.bar-3').classList.toggle('open')
    document.querySelector('.modal-nav').classList.toggle('open')
    document.querySelector('.site-header .container').classList.toggle('open')
    if (document.querySelector('.logo').style.display === 'none') {
        document.querySelector('.logo').style.display = 'block'
        document.querySelector('.open-logo').style.display = 'none'
    } else {
        document.querySelector('.open-logo').style.display = 'block'
        document.querySelector('.logo').style.display = 'none'
    }
})

document.querySelector('.modal-nav a').addEventListener('click', () => {
    document.querySelector('.bar-1').classList.toggle('open')
    document.querySelector('.bar-2').classList.toggle('open')
    document.querySelector('.bar-3').classList.toggle('open')
    document.querySelector('.modal-nav').classList.toggle('open')
    document.querySelector('.site-header .container').classList.toggle('open')
})

document.querySelector('.tool1').addEventListener('click', () => {
    document.querySelector('.recruiting-modal').classList.toggle('open')
})
document.querySelector('.recruiting-modal .close').addEventListener('click', () => {
    document.querySelector('.recruiting-modal').classList.toggle('open')
})
document.querySelector('.tool2').addEventListener('click', () => {
    document.querySelector('.experience-modal').classList.toggle('open')
})
document.querySelector('.experience-modal .close').addEventListener('click', () => {
    document.querySelector('.experience-modal').classList.toggle('open')
})

document.querySelector('.medical').addEventListener('click', () => {
    document.querySelector('.graph-1').style.display = 'block'
    document.querySelector('.graph-2').style.display = 'none'
    document.querySelector('.graph-3').style.display = 'none'
    document.querySelector('.graph-4').style.display = 'none'
})
document.querySelector('.recreational').addEventListener('click', () => {
    document.querySelector('.graph-2').style.display = 'block'
    document.querySelector('.graph-1').style.display = 'none'
    document.querySelector('.graph-3').style.display = 'none'
    document.querySelector('.graph-4').style.display = 'none'
})
document.querySelector('.jobs-created').addEventListener('click', () => {
    document.querySelector('.graph-3').style.display = 'block'
    document.querySelector('.graph-2').style.display = 'none'
    document.querySelector('.graph-1').style.display = 'none'
    document.querySelector('.graph-4').style.display = 'none'
})
document.querySelector('.job-creation').addEventListener('click', () => {
    document.querySelector('.graph-4').style.display = 'block'
    document.querySelector('.graph-2').style.display = 'none'
    document.querySelector('.graph-3').style.display = 'none'
    document.querySelector('.graph-1').style.display = 'none'
})

if (Element.prototype.addEventListener === 'null') {
    Element.prototype.addEventListener = function (e, callback) {
        e = 'on' + e
        return this.attachEvent(e, callback)
    }
}
// Hero-link jump fix for IE 11 & Firefox
document.querySelectorAll('.hero-link').forEach(link => {
    link.addEventListener('click', event => {
        const anchor = event.target.getAttribute('href')

        jump(anchor, {
            duration: 600,
            offset: 0,
            callback: undefined,
            a11y: false
        })
    })
})
