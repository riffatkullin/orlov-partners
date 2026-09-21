document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.consultation-form');

    if (!form) {
        return;
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const button = form.querySelector('.submit-button');

        // Убираем старые ошибки
form.querySelectorAll('.form-error').forEach((error) => {
    error.remove();
});

// Убираем подсветку старых ошибок
form.querySelectorAll('.input-error').forEach((input) => {
    input.classList.remove('input-error');
});

const oldMessage = form.querySelector('.form-success');

        if (oldMessage) {
            oldMessage.remove();
        }

        button.classList.add('is-loading');
button.textContent = 'Отправляем...';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
            });

            const data = await response.json();

            // Ошибки валидации
            if (response.status === 422) {
                Object.entries(data.errors).forEach(([field, messages]) => {
                    const input = form.querySelector(`[name="${field}"]`);

                    if (!input) {
                        return;
                    }

                    const error = document.createElement('div');

error.className = 'form-error';
error.textContent = messages[0];

input.classList.add('input-error');
input.parentElement.appendChild(error);
                });

                button.classList.remove('is-loading');
button.textContent = 'Отправить запрос';

                return;
            }

            if (!response.ok) {
                throw new Error('Ошибка отправки');
            }

            form.reset();

            const successMessage = document.createElement('div');

            successMessage.className = 'form-success';
            successMessage.textContent = data.message;

            form.appendChild(successMessage);

            button.classList.remove('is-loading');
button.textContent = 'Отправлено';

        } catch (error) {
            button.classList.remove('is-loading');
button.textContent = 'Отправить запрос';

            alert('Не удалось отправить запрос. Попробуйте ещё раз.');
        }
    });
});