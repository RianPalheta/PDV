// Requisição de login via ajax
$('#form-login').on('submit', function(e) {
    e.preventDefault();

    var number = $('input[name=user_number]').val()
    var pass = $('input[name=pass]').val()

    $.ajax({
        type: 'POST',
        url: `${base}/login`,
        data: {number:number, pass:pass},
        cache: false,
        beforeSend: function(e) {
            // Alguma coisa
        },
        success: function(msg) {
            if(msg == 'logado') {
                window.location.href = base;
            } else {
                alert(msg);
            }
        },
        error: function(e) {
            alert('Ops! Algo deu errado.')
        }
    })
})

// Requisição de cadastro via ajax
$('#form-signup').on('submit', function(e) {
    e.preventDefault();

    var name = $('input[name=name]').val()
    var number = $('input[name=number]').val()
    var pass = $('input[name=pass]').val()

    $.ajax({
        type: 'POST',
        url: `${base}/cadastro`,
        data: {name:name, number:number, pass:pass},
        beforeSend: function(e) {
            // Alguma coisa
        },
        success: function(msg) {
            if(msg == 'cadastrado') {
                window.location.href = base;
            } else {
                alert(msg);
            }
        },
        error: function(e) {
            alert('Ops! Algo deu errado.')
        }
    })
})