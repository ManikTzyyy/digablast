const dialogAdd = document.querySelector("#dialog-add");
const showDialogAddButton = document.querySelector("#show-add-button");
const dialogContent = document.querySelectorAll(".dialog-content")
const closeDialogAddButton = document.querySelectorAll(".close-dialog-button");

const closeDialog = () => {
    dialogAdd.classList.remove("show");
};

const showDialog = () => {
    dialogAdd.classList.toggle("show");
};

showDialogAddButton.addEventListener("click", () => {
    showDialog();
});


for (let item of closeDialogAddButton) {
    item.addEventListener("click", () => {
        closeDialog();
    });
}

dialogAdd.addEventListener('click', (e)=>{
    let clickOutside = true;

    dialogContent.forEach(content =>{
        if(content.contains(e.target)){
            clickOutside = false
        }
    })

    if(clickOutside){
        closeDialog();
    }
})