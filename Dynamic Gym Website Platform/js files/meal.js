// mealplans 
document.addEventListener("DOMContentLoaded", function() {
    const sortTypeSelect = document.getElementById("sorttype");
    const vegetarianSection = document.querySelector(".vegetarian");
    const nonVegetarianSection = document.querySelector(".non-vegetarians");

    vegetarianSection.style.display = "none";
    nonVegetarianSection.style.display = "none";
    sortTypeSelect.addEventListener("change", function() {
    const selectedValue = sortTypeSelect.value;

    if (selectedValue === "Vegetarian") {
        vegetarianSection.style.display = "block";
        nonVegetarianSection.style.display = "none";
    } else if (selectedValue === "non-vegetarian") {
        vegetarianSection.style.display = "none";
        nonVegetarianSection.style.display = "block";
    } else {
        vegetarianSection.style.display = "block";
        nonVegetarianSection.style.display = "block";
        }
    });
});
