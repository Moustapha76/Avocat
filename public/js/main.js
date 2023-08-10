document.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    if (window.scrollY > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    };
})
var tel = document.querySelectorAll('.tel-show');
tel.forEach(el => {
    el.addEventListener('click', function() {
        el.innerHTML = '06 56 716 530';
    })
})

var closer = document.querySelector('.closer');
closer.addEventListener('click', function() {
    document.querySelector('.detail').style.display = 'none';
    // location.reload(history.back())
    history.back();
})