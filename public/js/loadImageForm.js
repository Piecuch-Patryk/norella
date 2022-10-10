// Change image on to new one.
document.getElementById('image').addEventListener('change', function(){
    const img = document.getElementById('img');
    const btn = document.getElementById('imgBtn');
    img.setAttribute('src', window.URL.createObjectURL(this.files[0]));
    if(img.classList.contains('d-none')) img.classList.remove('d-none');
    btn.innerHTML = 'Zmień obrazek';
});