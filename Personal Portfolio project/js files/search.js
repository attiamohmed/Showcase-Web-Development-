var courses = [
    {name:'MAT8001C Technical Mathematics for Computer Science ', level:'Level 1 '},
    {name:'CST8215 Introduction to Database  ', level:'Level 1'},
    {name:'CST8116 Introduction to Computer Programming  ', level:'Level1'},
    {name:'CST8101 Computer Essential ', level:'Level 1'},
    {name:'ENL1813T Communications I', level:'Level 1'},
    {name:'CST8300 Achieving Success in Changing Environments', level:'Level 1'},
    {name:'CST2355 Database Systems', level:'Level 2'},
    {name:'CST8102 Operating System Fundamentals (GNU/Linux)', level:'Level 2'},
    {name:'CST8284 Object Oriented Programming (Java)', level:'Level 2'},
    {name:'GED5002 Victimology (Elective)', level:'Level 2'},
    {name:'CST8285 Web Programming', level:'Level 2'},
    {name:'ENL2019T Technical Communication for Engineering Technologies', level:'Level 2'}
];
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('Search');
    filter = input.value.toUpperCase();
    ul = document.querySelector('.list');
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
    } else {
        li[i].style.display = "none";
    }
    }
}

function sortCoursesByLevel() {
    var selectedLevel = document.getElementById("sortLevel").value;
    var courseListLevel1 = document.getElementById("courseListLevel1");
    var courseListLevel2 = document.getElementById("courseListLevel2");

    courseListLevel1.style.display = "none";
    courseListLevel2.style.display = "none";

    if (selectedLevel === "Level 1") {
        courseListLevel1.style.display = "block";
        courseListLevel1.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else if (selectedLevel === "Level 2") {
        courseListLevel2.style.display = "block";
        courseListLevel2.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
        courseListLevel1.style.display = "block";
        courseListLevel2.style.display = "block";
    }
}


    function sortCoursesByOrder() {
        var selectedLevel = document.getElementById("sortOrder").value;
        var courseListLevel1 = document.getElementById("courseListLevel1");
        var courseListLevel2 = document.getElementById("courseListLevel2");
        courseListLevel1.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (selectedLevel === "asc") {
            courseListLevel1.style.display = "block";
            courseListLevel2.style.display = "block";
            courseListLevel1.parentNode.insertBefore(courseListLevel1, courseListLevel2);
            courseListLevel1.scrollIntoView({ behavior: "smooth", block: "start" });
        } else if (selectedLevel === "desc") {
            courseListLevel2.style.display = "block";
            courseListLevel1.style.display = "block";
            courseListLevel1.parentNode.insertBefore(courseListLevel2, courseListLevel1);
            courseListLevel1.scrollIntoView({ behavior: "smooth", block: "start" });
        } else {
            courseListLevel1.style.display = "block";
            courseListLevel2.style.display = "block";
        }
    }









