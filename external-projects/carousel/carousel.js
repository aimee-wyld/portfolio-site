$(function() {
    var count = 2
    var totalPics = $(".image").length

   document.getElementById("left").onclick = function() {
       if (count == 1) {
           count +=totalPics
       }
       count --

       $("#goat" + count).prependTo(".carousel2").css("left", $("#goat" + count).width())

       $(".carousel2 .image").animate(
           {
               left: "-=" + $("#goat" + count).width()
           },
           1000,
           function() {
               if (count == totalPics) {
                   count -=totalPics
               }
               count ++
               $("#goat" + count).appendTo(".hide")
               if (count != 1) {
                   count --
               } else {
                   count += totalPics - 1
               }
           }
       )
   }

   document.getElementById("right").onclick = function() {
       if (count ==totalPics) {
           count -= totalPics
       }
       count ++

       $("#goat" + count).appendTo(".carousel2").css("left", - $("#goat" + count).width())

       $(".carousel2 .image").animate(
           {
               left: "+=" + $("#goat" + count).width()
           },
           1000,
           function() {
               if (count == 1) {
                   count += totalPics
               }
               count --
               $("#goat" + count).appendTo(".hide")
               count ++
               if (count == totalPics + 1) {
                   count -= totalPics
               }
           }
       )
   }
})
