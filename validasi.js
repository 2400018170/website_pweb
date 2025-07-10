const body = document.body;
const form = document.forms['dataform'];

function kirim() {
    //mengambil nilai dari form
    const nama = form.nama.value.trim();
    const email = form.email.value.trim();
    const password = form.password.value.trim();
    const confirmpassword = form.confirmpassword.value.trim();

    //valisadi nama
    if(nama === ""|| nama.length <3){
        alert("Nama Harus diisi dan minimal 3 karakter.") ;
        return false;
    }

    //validasi email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Masukkan alamat email dengan benar.");
        return false;
    }

    //validasi Password
    if (password.length < 4) {
        alert("Password minimal 4 karakter.");
        return false;
    }

    //validasi confirm-Password
    if (password !== confirmpassword) {
        alert("Password dan konfirmasi password tidak sama!");
        return false;
    }

    //menampilkan hasil
    const hasil = `
        <p><strong>Nama Lengkap :</strong> ${nama}<p>
        <p><strong>Email :</strong> ${email}<p>
        <p><strong>Password :</strong> ${password}<p>
        <p><strong>Password :</strong> ${confirmpassword}<p>
        `;
    
    //menampilkan dalam alert
    alert("Registrasi Berhasil !!\n\n" + hasil.replace(/<[^>]*>/g, ''));

    return true;
}
