// change le fond de couleur lors de la séléction de la case

let Allinputs = document.getElementsByClassName("champ")
Array.from(Allinputs).forEach(function(input){
  input.addEventListener("focus",function(event){
    event.target.style.background = "rgb(231, 211, 172)";
  })

  input.addEventListener("blur",function(event){
    event.target.style.background = "";
  })
})


let orga = document.getElementById('organisation')

orga.addEventListener('change',function (event){
  alert("L'organisation de l'évènement sera géré par un petit groupe de 10 personnes notement pour gérer la logistique, les boissons, les repas, les animations, la préparation des lieux.")
})


