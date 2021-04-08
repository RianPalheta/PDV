$(window).on('load', function() {

    const inputs = document.querySelectorAll('.input')

    function focusFunc() {
        let parent = this.parentNode.parentNode
        parent.classList.add('focus');
    }

    function blurFunc() {
        let parent = this.parentNode.parentNode
        if(this.value == "") {
            parent.classList.remove('focus');
        }
    }

    inputs.forEach(input => {
        input.addEventListener('focus', focusFunc)
        input.addEventListener('blur', blurFunc)
    })

    // Animação btn
    $(document).ready(function(e) {
        $('.btn').on('mouseenter', function(e) {
            x = e.pageX - $(this).offset().left
            y = e.pageY - $(this).offset().top

            $(this).find('span').css({top:y, left:x})
        })
        $('.btn').on('mouseout', function(e) {
            x = e.pageX - $(this).offset().left
            y = e.pageY - $(this).offset().top

            $(this).find('span').css({top:y, left:x})
        })
    })
})