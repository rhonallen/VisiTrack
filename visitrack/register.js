const container = document.getElementById("container");
const contactBtn = document.getElementById('conhid');
const nameBtn = document.getElementById('namehid');

function validateNameForm() {
    const lastName = document.getElementById("Lastname").value.trim();
    const firstName = document.getElementById("Firstname").value.trim();
    const middleInitial = document.getElementById("Middle_Initial").value.trim();

    if (lastName === "" || firstName === "" || middleInitial === "") {
        alert("Please fill out all the name fields before continuing.");
        return false;
    }

    return true;
}

contactBtn.addEventListener('click', () => {
    if (validateNameForm()) {
        container.classList.add("active");
    }
});

nameBtn.addEventListener('click', () => {
    container.classList.remove("active");
});