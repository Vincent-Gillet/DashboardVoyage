
// Fonction regroupant l'utilisation de tout les filtres

function generalFilter () {


    let selectCategorie = filterCategorie.value;
    let selectTriPrice = filterPrice.value;



    // let generationFilter = document.querySelector('#listeVoyages');

    // Utilisation des données du json
    fetch("/asset/php/filtre.php?id_categorie=" + selectCategorie + "&price=" + selectTriPrice)
        .then(resp => resp.text())
        .then(html => {
            document.querySelector('#listeVoyages').innerHTML = html;
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });

} ;

// Récupération de la valeur du filtre Catégorie
let filterCategorie = document.querySelector('#filterCategorie');
filterCategorie.addEventListener("change", generalFilter);



// Récupération de la valeur du filtre ordre numérique
let filterPrice = document.querySelector('#filterPrice'); 
filterPrice.addEventListener("change", generalFilter);


// fetch("/asset/php/listeVoyage.php").then((res) => res.json())
// .then(response => {
//     console.log(response);
//     let output = '';
//     for(let i in response) {
//         output += `
//         ${response[i].title}
//         ${response[i].categorie}
//         ${response[i].price}
//         `;
//     }

//     document.querySelector('#listeVoyages').innerHTML = output
// }).catch(error => console.log(error));




// document.getElementById('filterCategorie').addEventListener('change', filterResults);
// document.getElementById('filterPrice').addEventListener('change', filterResults);

// function filterResults() {
//     var categorie = document.getElementById('filterCategorie').value;
//     var price = document.getElementById('filterPrice').value;

//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', 'filter.php?categorie=' + categorie + '&price=' + price, true);
//     xhr.onload = function() {
//         if (this.status == 200) {
//             var data = JSON.parse(this.responseText);
//             // Mettez à jour l'interface utilisateur avec les données
//         }
//     }
//     xhr.send();
// }


// fetch("./asset/php/filtre.php?id_categorie=" + selectCategorie + "&price=" + selectTriPrice)
//     .then(resp => {
//         console.log('Response:', resp);
//         return resp.text();
//     })
//     .then(html => {
//         console.log('HTML:', html);
//         document.querySelector('#listeVoyages').innerHTML = html;
//     })
//     .catch(error => {
//         console.error('Error fetching data:', error);
//     });