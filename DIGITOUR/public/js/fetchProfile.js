document.addEventListener('DOMContentLoaded', () => {
    const profileId = window.location.pathname.split('/').pop(); // Obtiene el ID del perfil de la URL
    const apiUrl = `/api/profiles/${profileId}`; // Endpoint API

    // Elementos donde se mostrarán los datos
    const profileNameElement = document.querySelector('.details h1');
    const offersContainer = document.querySelector('.offers');

    // Mostrar mensaje de carga
    profileNameElement.textContent = 'Cargando perfil...';
    offersContainer.innerHTML = '<p class="text-center text-muted">Cargando ofertas...</p>';

    // Fetch para cargar el perfil y sus ofertas
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar los datos');
            }
            return response.json();
        })
        .then(data => {
            // Actualiza el título del perfil
            profileNameElement.textContent = data.profile.nombre;

            // Limpia y renderiza las ofertas
            if (data.offers && data.offers.length > 0) {
                offersContainer.innerHTML = ''; // Limpia las ofertas
                data.offers.forEach(offer => {
                    const offerCard = document.createElement('div');
                    offerCard.classList.add('card');
                    offerCard.innerHTML = `
                        <p><span>Oferta:</span> ${offer.descripcion}</p>
                        <p><span>Válido desde:</span> ${offer.fecha_inicio}</p>
                        <p><span>Válido hasta:</span> ${offer.fecha_vencimiento}</p>
                    `;
                    offersContainer.appendChild(offerCard);
                });
            } else {
                offersContainer.innerHTML = '<p class="text-center text-muted">No hay ofertas disponibles para este perfil.</p>';
            }
        })
        .catch(error => {
            console.error(error);
            profileNameElement.textContent = 'Error al cargar el perfil';
            offersContainer.innerHTML = '<p class="text-center text-danger">Error al cargar las ofertas.</p>';
        });
});
