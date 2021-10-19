//menampilkan jam
let d = new Date();
document.getElementById("theTime").innerHTML = "<p>Jam:  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds() + "</p>";

//membuat function makan untuk menentukan rekomendasi makanan dari sistem
function makan(){
    let selectFood = document.getElementById("selectFood");    
    let val = selectFood.options[selectFood.selectedIndex].value;
    let quotesOfTheDay = document.getElementById("quotesOfTheDay");

    if (val == "pedas"){
       quotesOfTheDay.innerText =  "Seblak dan baso aci cocok banget kalo kamu mau makan yang pedes-pedes";
    }else if (val == "manis"){
        quotesOfTheDay.innerText =  "Martabak keju susu serius enak dan manis apalagi kalo makannya sambil nonton hong-du-sik :)";
    }else if (val == "asam"){
        quotesOfTheDay.innerText =  "Youghurt cimory squezzzee bisa banget kamu konsumsi pas lagi pengen yang asem asem, rasanya enak dan sehat";
    }else{
        quotesOfTheDay.innerText =  "Pempek yang digoreng kering enak banget pasti dan gurih juga";
    }
};

//membuat function theme untuk mengganti tema
function theme(){
    let selectTheme = document.getElementById('selectTheme');
    let val = selectTheme.options[selectTheme.selectedIndex].value;
    let element = document.body;

    if(val == 'terang'){
        element.classList.remove("gelap");
    }else{
        element.classList.toggle("gelap");       
    }
};

//membuat function hitung untuk menghitung hasil faktorial
function hitung(){
    let angkaFact = document.getElementById('angkaFact').value;    
    let factorialResult = document.getElementById('factorialResult');    
    let hasil = angkaFact;
    for(i = hasil-1; i>1 ; i--){
        hasil*=i;
    };
    
    factorialResult.innerText = "Faktorial dari " + angkaFact + " adalah " + hasil;
};


