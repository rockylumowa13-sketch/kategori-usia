function cekUsia() {
    const usia = document.getElementById("usia").value;
    const hasilElement = document.getElementById("hasil");

    if (usia === "" || isNaN(usia)) {
        if (hasilElement) {
            hasilElement.textContent = "Silakan masukan usia anda terlebih dahulu atau masukkan angka yang valid.";
            hasilElement.style.color = "red";
        } else {
            alert("Silakan masukan usia anda terlebih dahulu atau masukkan angka yang valid.");
        }
        return;
    }

    // Convert string value to number
    const usiaAngka = parseInt(usia); 

    let kategori = "";

    if (usiaAngka < 12) {
        kategori = "Anak-anak";
    } else if (usiaAngka >= 12 && usiaAngka < 17) {
        kategori = "Remaja";
    } else if (usiaAngka >= 17 && usiaAngka < 30) {
        kategori = "Dewasa";
    } else {
        kategori = "Usia Produktif"; // Mengganti "so tua" agar lebih formal
    }
    
    const hasilText = `Usia ${usiaAngka} tahun termasuk pada kategori ${kategori}`;

    if (hasilElement) {
        hasilElement.textContent = hasilText;
        hasilElement.style.color = "blue";
    } else {
        // Jika elemen 'hasil' belum ditambahkan ke HTML:
        alert(hasilText + "\n\nCatatan: Tambahkan <div id='hasil'></div> di HTML Anda.");
    }
}