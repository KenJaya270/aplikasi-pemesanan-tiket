const jenisTransportasi = document.querySelector('.jenisTransportasi');
const formPencarian = document.querySelector('.form-pencarian');
const pesawatCont = document.querySelector('.pesawat-container-form');
const keretaCont = document.querySelector('.kereta-form-container');
const kereta = document.querySelector('.kereta');
const pesawat = document.querySelector('.pesawat');

kereta.addEventListener('click', ()=>{
    jenisTransportasi.innerHTML = 'Kereta';
    pesawatCont.classList.add('d-none');
    keretaCont.classList.remove('d-none');
})

pesawat.addEventListener('click', ()=>{
    jenisTransportasi.innerHTML = 'Pesawat';
    pesawatCont.classList.remove('d-none');
    keretaCont.classList.add('d-none');
})