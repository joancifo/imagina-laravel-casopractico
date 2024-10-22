import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import 'bootstrap'
import {Modal } from 'bootstrap'

window.cargarDocentes = () => {
    Livewire.dispatch('fetch')

    Livewire.on('loaded', () => {
        const modal = new Modal(document.querySelector('#modal-seleccionar-docente'))

        modal.show()
    })
}
