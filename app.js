$(document).ready(function() {
   
    function validateEmail(email) {
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return regex.test(email);
    }

   
    function validatePhone(phone) {
        const regex = /^(03|05|07|08|09)\d{8}$/;
        return regex.test(phone);
    }
   
    $('#contactForm').on('submit', function(e) {
        let valid = true;
        const name = $('#name').val().trim();
        if (name === "") {
            $('#name').addClass('is-invalid');
            valid = false;
        } else {
            $('#name').removeClass('is-invalid');
        }

        const email = $('#email').val().trim();
        if (email === "") {
            $('#email').addClass('is-invalid');
            valid = false;
        } else {
            $('#email').removeClass('is-invalid');      
            if (validateEmail(email)) {
            } else {
                $('#email').addClass('is-invalid');
                valid = false;                  
                $('#modalBody').text('Sai định dạng Email.');
                $('#errorModal').modal('show');
            }
        }

        const phone = $('#phone').val().trim();
        if (phone==="") {
            $('#phone').addClass('is-invalid');
            valid = false;
        } else {
            $('#phone').removeClass('is-invalid');     
            if (validatePhone(phone)) {
            } else {
                $('#phone').addClass('is-invalid');
                valid = false;                  
                $('#modalBody').text('Số điện thoại không đúng định dạng.');
                $('#errorModal').modal('show');
            }
           
        }

        const company = $('#company').val().trim();
        if (company === "") {
            $('#company').addClass('is-invalid');
            valid = false;
            
        } else {
            $('#company').removeClass('is-invalid');
        }

        const message = $('#message').val().trim();
        if (message === "") {
            $('#message').addClass('is-invalid');
            valid = false;
        } else {
            $('#message').removeClass('is-invalid');
        }

        if (!valid) {
            e.preventDefault();
        }
    });
});
