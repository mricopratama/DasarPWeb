function tombolTema (){
    if (document.body.classList.contains('light-theme')) {
        document.body.classList.remove('light-theme');
        document.body.classList.add('dark-theme');
        document.getElementById('theme-btn').textContent = "Light";
    } else if (document.body.classList.contains('dark-theme')) {
        document.body.classList.remove('dark-theme');
        document.body.classList.add('light-theme');
        document.getElementById('theme-btn').textContent = "Dark";
    }
}

function submitForm(){
    if (!document.forms['biodataform'].fullName.value || !document.forms['biodataform'].nim.value || !document.forms['biodataform'].gender.value || !document.forms['biodataform'].prodi.value || !document.forms['biodataform'].alamat.value) {
        alert("Silakan isi semua form");
    } else {
        document.getElementById('resultSection').style.display = 'block';

        document.getElementById('ofullName').textContent = document.forms['biodataform'].fullName.value;
        document.getElementById('onim').textContent = document.forms['biodataform'].nim.value;
        document.getElementById('ogender').textContent = document.forms['biodataform'].gender.value;
        document.getElementById('oprodi').textContent = document.forms['biodataform'].prodi.value;
        document.getElementById('oalamat').textContent = document.forms['biodataform'].alamat.value;
    }
}