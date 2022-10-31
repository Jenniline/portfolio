// const text = document.querySelector('.text-3d');
// const strText = text.textContent;
// const splitText = strText.split("");
// console.log(splitText);

// for (let i = 0; i < splitText.length; i++) {
//     text.innerHTML += "<span>" + splitText[i] + "</span>";
    
// }

// let char = 0;
// let timer = setInterval(onTick, 50);

// function onTick() {
//     const span = text.querySelectorAll('span')[char];
//     span.classList.add('fade');
//     char++
//     if (char === splitText.length) {
//         complete();
//         return;
//     }
// }
// function complete() {
//     clearInterval(timer);
//     timer = null;
// }




$(document).ready(function () {
    $(window).on("scroll", function () {
      $(".progress").each(function (index, progress) {
        var progressBar = $(progress).find(".progress-bar");
        var progressPercent = parseInt($(progressBar).attr("data-progress"));
        if ($(window).scrollTop() > $(progress).offset().top - 400) {
          $(progressBar)
            .css("width", progressPercent + "%")
            .text(progressPercent + "%");
        }
      });
    });
  });