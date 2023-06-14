document.getElementById("txt_nama").onkeyup = function(){
    //misal di input syarif
    let txnama = document.getElementById("txt_nama").value; //syarif
    let txnama2 = txnama.toUpperCase(); //ubah karakter jadi huruf kapital otomatis
    document.getElementById("txt_nama").value = txnama2;
};

document.getElementById("txt_pasw2").onchange = function(){
    let pas1 = document.getElementById("txt_pasw").value;
    let pas2 = document.getElementById("txt_pasw2").value;
    if(pas1 === pas2){
        alert("Password Sama");
        document.getElementById("btnsimpanuser").disabled = false;
    }else{
        alert("Password Tidak Sama")
        document.getElementById("btnsimpanuser").disabled = true;
    }
};