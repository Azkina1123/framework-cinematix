import './bootstrap';

if (window.location.pathname == "/movies/edit/select-movie") {
    var editBtn = document.querySelector(".editing");
    var deleteBtn = document.querySelector(".deleting");
    editBtn.removeAttribute("href");
    deleteBtn.removeAttribute("href");

    var radios = document.querySelectorAll("input[type='radio']");

    for (var i = 0; i < radios.length; i++) {

        radios[i].onclick = function () {
            selectMovie();

            deleteBtn.addEventListener("click", function () {
                confirm('Are you sure you want to delete this movie?');
            })
        }

    }

}

// if (window.location.pathname == "/movies/add") {
//     var posterImg = document.querySelector(".poster-img");
//     var inputFile = document.querySelector("input[type='file']");
//     var poster = inputFile.getAttribute("value");

//     poster.onchange = function () {
//         posterImg.style.background = "url('" + poster + "')";
//     }
// }


function selectMovie(route) {
    var editBtn = document.querySelector(".editing");
    var deleteBtn = document.querySelector(".deleting");

    var radio = document.querySelector("input[type='radio']:checked")
    editBtn.setAttribute("href", "/movies/edit/" + radio.getAttribute("value"));
    deleteBtn.setAttribute("href", "/movies/delete/" + radio.getAttribute("value") + "/action");
}
