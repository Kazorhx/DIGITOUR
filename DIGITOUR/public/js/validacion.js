    document.getElementById('validateVoucher').addEventListener('click', function () {
        const voucherId = this.getAttribute('data-id');

        fetch(`/voucher/${voucherId}/validate`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
        .then(response => response.json())
        .then(data => {
            const messagesDiv = document.getElementById('messages');
            if (data.success) {
                messagesDiv.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
            } else {
                messagesDiv.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const messagesDiv = document.getElementById('messages');
            messagesDiv.innerHTML = `<div class="alert alert-danger">Ocurrió un error al validar el voucher.</div>`;
        });
    });

