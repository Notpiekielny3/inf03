const buttons = document.querySelectorAll("button")

buttons.forEach(button => {
    button.addEventListener("click", (element) => {
        const news = document.querySelectorAll(".blok1")
        news.forEach(div => {
            // div.style.display = "none"
            div.style.display = "none"
        })
        const nextElementDiv = button.nextElementSibling;
        nextElementDiv.style.display = "block";
    })
})