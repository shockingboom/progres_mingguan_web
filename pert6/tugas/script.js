document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formIdentitas");
    const tableBody = document.getElementById("tbBody");
    const tableHead = document.getElementById("tbHead");
    const lebelH = document.getElementById("hiden");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const nama = document.getElementById("nama").value.trim();
        const nim = document.getElementById("nim").value.trim();
        let nilai = parseInt(document.getElementById("nilai").value.trim());

        if (nama && nim && !isNaN(nilai)) {
            tableBody.style.display = "table-row-group";
            tableHead.style.display = "table-header-group";
            lebelH.style.display = "block";
            tableBody.innerHTML = "";

            let nilaiMutu;
            if (nilai >= 80 && nilai <= 100) {
                nilaiMutu = "A";
            } else if (nilai >= 70 && nilai <= 79) {
                nilaiMutu = "B";
            } else if (nilai >= 60 && nilai <= 69) {
                nilaiMutu = "C";
            } else if (nilai >= 50 && nilai <= 59) {
                nilaiMutu = "D";
            } else if (nilai >= 0 && nilai <= 49) {
                nilaiMutu = "E";
            } else {
                nilaiMutu = "Nilai tidak valid";
            }

            const newRow = tableBody.insertRow();
            const cellNama = newRow.insertCell(0);
            const cellNim = newRow.insertCell(1);
            const cellNilai = newRow.insertCell(2);

            cellNama.textContent = nama;
            cellNim.textContent = nim;
            cellNilai.textContent = nilaiMutu;

      
        } else {
            alert("Harap isi semua kolom dengan benar!");
        }
    });
});