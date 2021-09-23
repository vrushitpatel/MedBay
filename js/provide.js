function changeActive(selectedLi, provideContent) {
    
    var selected = document.getElementById(selectedLi);
    var allLi = document.getElementsByClassName("provide-list");

    var selectedProvide = document.getElementById(provideContent);
    var allProvide = document.getElementsByClassName("content-provide");


    for (index = 0; index < allLi.length; index++) { 
        allLi[index].classList.remove("active-provide"); 
    }

    for (index = 0; index < allProvide.length; index++) { 
        allProvide[index].classList.add("hideClass"); 
    }
    
    selected.classList.add("active-provide");
    selectedProvide.classList.remove("hideClass");
}
console.log("Check");