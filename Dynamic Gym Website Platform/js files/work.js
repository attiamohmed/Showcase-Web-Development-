//workoutplans
function handleFilterChange() {
    const selectedGoal = document.getElementById("sorttype").value;
    const lwgmSections = document.querySelectorAll(".lwgm");
    const lwSections = document.querySelectorAll(".lw");
    const bmSections = document.querySelectorAll(".bm");

    lwgmSections.forEach((section) => section.style.display = "none");
    lwSections.forEach((section) => section.style.display = "none");
    bmSections.forEach((section) => section.style.display = "none");

    if (selectedGoal === "lwgm") {
    lwgmSections.forEach((section) => section.style.display = "block");
    } else if (selectedGoal === "lw") {
    lwSections.forEach((section) => section.style.display = "block");
    } else if (selectedGoal === "bm") {
    bmSections.forEach((section) => section.style.display = "block");
    }
}

document.getElementById("sorttype").addEventListener("change", handleFilterChange);

handleFilterChange();