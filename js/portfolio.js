var page = 1
var $leftArrow
var $rightArrow
var $portfolioContent

function init() {
    $leftArrow.css("display", "block")
    $rightArrow.css("display", "block")
    $portfolioContent = $("#portfolio-content")

    if (page == 1) {
        $leftArrow.css("display", "none")
    }
    if (page == 3) {
        $rightArrow.css("display", "none")
    }
}

function load() {
    $portfolioContent.load("portfolio-content" + page + ".html")
}

$(function() {
    $leftArrow = $("#left-arrow")
    $rightArrow = $("#right-arrow")

    $rightArrow.click(function() {
        page ++
        init()
        load()
    })

    $leftArrow.click(function() {
        page --
        init()
        load()
    })
})