//masquer ou afficher element 
//clients et compte
var gestionClient = document.getElementById("clientGestion");
var gestionCompte = document.getElementById("compteGestion");
var donneClientSimple = document.getElementById("forCompteSimple");
var compteCourant = document.getElementById("compteCourant");
var compteBloque = document.getElementById("bloque");
var existanceClient = document.getElementById("ClientExistt");

//variable gestion des click
var newClient = document.getElementById("clientNew");
var clientPhysique = document.getElementById("physique");
//var clientEntreprise = document.getElementById("moral");
var compteSimple = document.getElementById("simple");
var donneesCompteCourant = document.getElementById("Courant");
var forCompteBloque = document.getElementById("bloqueButton");
var clientEntreprise = document.getElementById("moral");

var search = document.getElementById("search");
var searchImage = document.getElementById("boutton");
//afficher ou masquer elements lors du chargement de la page

window,onload = function(){
    gestionClient.style.display = "none";
    gestionCompte.style.display = "none";
    donneClientSimple.style.display = "none";
    compteCourant.style.display = "none";
    compteBloque.style.display = "none";
    search.style.display = "none";
    searchImage.style.display = "none";
}

//fonctionss pour les click dans les radio

function clients(){
    if(newClient.checked == true){
        gestionClient.style.display = "block";
        search .style.display = "none";
        searchImage.style.display = "none";
    }
    if(clientPhysique.checked == true){
        gestionCompte.style.display = "block";
        search .style.display = "none";
        searchImage.style.display = "none";
    }
    if(compteSimple.checked == true){
        donneClientSimple.style.display = "block";
        compteCourant.style.display = "none";
        compteBloque.style.display = "none";
        search .style.display = "none";
        searchImage.style.display = "none";
    }
    if(donneesCompteCourant.checked == true){
        compteCourant.style.display = "block";
        donneClientSimple.style.display = "none";
        compteBloque.style.display = "none";
        search .style.display = "none";
        searchImage.style.display = "none";
    }
    if(forCompteBloque.checked == true){
        compteBloque.style.display = "block";
        compteCourant.style.display = "none"; 
        donneClientSimple.style.display = "none";  
        search .style.display = "none";
        searchImage.style.display = "none";
    }
    if(clientEntreprise.checked == true){
        compteBloque.style.display = "none";
        compteCourant.style.display = "none"; 
        donneClientSimple.style.display = "none"; 
        gestionCompte.style.display = "none";
        search .style.display = "none";
        searchImage.style.display = "none";
    }
    if(existanceClient.checked == true){
        compteBloque.style.display = "none";
        compteCourant.style.display = "none"; 
        donneClientSimple.style.display = "none"; 
        gestionCompte.style.display = "none";
        gestionClient.style.display = "none";
        search .style.display = "block";
        searchImage.style.display = "block";
    } 

    
}
function searchBar(){
    if(searchImage.checked == true){
        compteBloque.style.display = "none";
        compteCourant.style.display = "none"; 
        donneClientSimple.style.display = "none"; 
        gestionCompte.style.display = "none";
        search .style.display = "none";
        searchImage.style.display = "none";
        gestionCompte.style.display = "none";
        gestionClient.style.display = "none";
    }
}


