var element = document.getElementById("modal-categories");

function showCategories() {
    element.classList.remove("modal-hide");
};



var li =  document.querySelectorAll(".modal-container ul li");
for(var i = 0;i<li.length;i++){
    li[i].addEventListener("click", myScript);
}

function myScript(e){

    element.classList.add("modal-hide");
}
