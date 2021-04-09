$(document).ready(function () {

    if($('#form-login').length) {
        // Requisição de login via ajax
        $('#form-login').on('submit', function(e) {
            e.preventDefault();

            var number = $('input[name=user_number]').val();
            var pass = $('input[name=pass]').val();

            $.ajax({
                type: 'POST',
                url: `${base}/login`,
                data: {number:number, pass:pass},
                beforeSend: function() {
                    // Alguma coisa
                },
                success: function(msg) {
                    if(msg == 'logado') {
                        window.location.href = base;
                    } else {
                        alert(msg);
                    }
                },
                error: function() {
                    alert('Ops! Algo deu errado.')
                }
            });
        });
    }
    
    if($('#form-signup').length) {
        // Requisição de cadastro via ajax
        $('#form-signup').on('submit', function(e) {
            e.preventDefault();

            var name = $('input[name=name]').val();
            var number = $('input[name=number]').val();
            var pass = $('input[name=pass]').val();

            $.ajax({
                type: 'POST',
                url: `${base}/cadastro`,
                data: {name:name, number:number, pass:pass},
                beforeSend: function() {
                    // Alguma coisa
                },
                success: function(msg) {
                    if(msg == 'cadastrado') {
                        window.location.href = base;
                    } else {
                        alert(msg);
                    }
                },
                error: function() {
                    alert('Ops! Algo deu errado.')
                }
            });
        });
    }

    if($('#product-table').length) {
        $.ajax({
            type: "POST",
            url: `${base}/products`,
            data: "Products",
            dataType: 'json',
            beforeSend: function() {
                $('table').append('Carregando...')
            },
            success: function (r) {
                let productObj = r.list;
                let product;

                console.log(productObj);

                productObj.map( item => {
                    product = `<tr><td>${item.cod}</td><td>${item.name}</td><td>${item.price}</td><td>${item.quantity}</td><td>[EDITAR] [EXCLUIR]</td></tr>`;

                    $('table').append(product);
                });
            },
            error: function() {
                // alert('Ops! Algo deu errado.');
            }
        });
    }
});