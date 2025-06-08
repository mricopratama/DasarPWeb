document.writeln("<CENTER>");
document.writeln("<HR WIDTH=100% COLOR=Black>");
document.writeln("<H1>UNIVERSITAS AHMAD DAHLAN</H1>");
document.writeln("<H2>FAKULTAS TEKNOLOGI INDUSTRI<H2>");
document.writeln("<H3>INFORMATIKA<H3>");
document.writeln("<HR WIDTH=100% COLOR=Black>");
document.writeln("</CENTER>");

function warna(pilihan){
    alert("Anda memilih warna " + pilihan);
    document.body.style.background=pilihan;
}

function hitungtotal(){
    var nama = (document.forms['fform'].inama.value);
    var tujuan = (document.forms['fform'].itujuan.value);
    var jumlahpaket = parseInt(document.forms['fform'].ijumlah.value);
    var ht = 0;
    var sub = 0; 
    var diskon = 0; 
    var total = 0;
            
    if (nama == "") {
        alert("Nama harus diisi");
        return;
    }

    if (isNaN(jumlahpaket) || jumlahpaket <= 0) {
        alert("Jumlah tiket harus diisi di atas 0");
        return;
    }

    if (tujuan==""){
        alert("Tujuan harus dipilih");
        return;
    } else if (tujuan=="Jakarta"){
        ht =10000;
    } else if (tujuan=="Yogyakarta"){
        ht =5000;
    } else{
        ht =20000;
    }

    sub = jumlahpaket*ht;

    if (document.forms['fform'].imember.checked==true){
        diskon =0.10*sub;
    } else{
        diskon=0;
    }

    total = sub-diskon; 

    document.forms['fform'].otiket.value=ht;
    document.forms['fform'].osub.value=sub;
    document.forms['fform'].odiskon.value=diskon;
    document.forms['fform'].ototal.value=total;
}