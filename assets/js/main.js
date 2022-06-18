// smoothscroll
var yposition = 0;
var range = 15;

function smoothScroll(id) {
    var target = document.getElementById(id).offsetTop;

    var scrollAnimate = setTimeout(function () {
        smoothScroll(id);
    }, 10)

    yposition = yposition + range;
    
    // reset
    if (yposition >= target) {
        clearTimeout(scrollAnimate);
        yposition = 0;
    } else {
        window.scroll(0, yposition)
    }


    return false;
}

// fungsi validasi formular

function validate(form) {
    var escape = true;
    var errorText = '';

    for (i = 0; i < 3; i++) {
        if (form[i].value.trim().length <= 0) {
            
            switch (i) {
                case 0: errorText = 'Name'; break;
                case 1: errorText = 'Email'; break;
                case 2: errorText = 'Message'; break;
                default:
            }


            if (form[i].nextElementSibling.className != 'error') {
                form[i].style.borderColor = 'red';
                form[i].insertAdjacentHTML('afterend', '<div class="error">*' + errorText + ' must be filled </div>');
            }

            escape = false;


        } else {
            // sebelumnya sudah ada error, hapus error
            if (form[i].nextElementSibling.className == 'error') {
                form[i].style.borderColor = 'rgb(242, 164, 19)';
                form[i].nextElementSibling.remove();
            }

        }

    }// }end for
    return escape;
}
function toggleMenu() {
    var menu = document.getElementById('menu-3');
    menu.classList.toggle('menu-open');
}