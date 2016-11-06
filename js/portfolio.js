var page = 1
var $leftArrow
var $rightArrow
var $portfolioContent

function init() {
    $leftArrow = $("#left-arrow")
    $rightArrow = $("#right-arrow")
    $leftArrow.css("visibility", "visible")
    $rightArrow.css("visibility", "visible")
    $portfolioContent = $("#portfolio-content")

    if (page == 1) {
        $leftArrow.css("visibility", "hidden")
    }
    if (page == 3) {
        $rightArrow.css("visibility", "hidden")
    }
}

function load() {
    $portfolioContent.load("portfolio-content" + page + ".html")
}

$(function() {
    document.getElementById("right-arrow").onclick = function() {
        page ++
        init()
        load()
    }

    document.getElementById("left-arrow").onclick = function() {
        page --
        init()
        load()
    }
})