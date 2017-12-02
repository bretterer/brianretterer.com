import '../../../node_modules/bootstrap/js/src/index'

import './typed'

$(document).ready(function () {
    alert('hey');
    var typed = new Typed('.type', {
        strings: ["Frontend Developer.", "Web Designer.", "Graphic Designer."], /* Here Type Your Title */
        typeSpeed: 100,
        loop: true,
        backDelay: 1200,
        backSpeed: 20
    });
})