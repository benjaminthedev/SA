jQuery(document).ready(function () {
    jQuery('.single-product .woocommerce-product-gallery, .single-product .woocommerce-notices-wrapper, .single-product ul.tabs.wc-tabs').hide();
    //Move the add to basket to the right place
    jQuery('.entry-summary').detach().prependTo('.product-info');
    //Name
    //jQuery('.single-product td.woocommerce-grouped-product-list-item__label').prependTo('.single-product .    ');

    jQuery('.single-product button.single_add_to_cart_button.button.alt').appendTo('.single-product .woocommerce-grouped-product-list-item');

    //stop stop the video
    // jQuery(window).click(function (e) {
    //     //console.log(e.target.id); // gives the element's ID 
    //     //console.log(e.target.className); // gives the elements class(es)

    //     e.preventDefault();
    //     jQuery('.embed-container').children('iframe').attr('src', '');
    // });


    // $('.close-modal').click(function (e) {
    //     e.preventDefault();
    //     $('.video-embed').children('iframe').attr('src', '');
    // });
});






// Get the modal
// let modal = document.getElementById("myModal");
// let yeah = document.querySelectorAll('.embed-container iframe');


// Get the button that opens the modal
// let para = document.getElementById("clicked-para");

// Get the <span> element that closes the modal
// let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
// para.onclick = function () {
//     modal.style.display = "block";
// }

//When parallax-no had the class no-click then block the pop up
// const removeClass = document.querySelector('.parallax-no').classList.contains('no-click');

// if (removeClass == true) {
//     // removeClass.remove('clicked-para');
//     para.onclick = function () {
//         modal.style.display = "none";
//     }

// }

// When the user clicks on <span> (x), clos	e the modal
// span.onclick = function () {
//     //modal.style.display = "none";
//     location.reload(true);
// }



// When the user clicks anywhere outside of the modal, close it
//window.onclick = (event) => {
//if (event.target == modal) {
//location.reload(true);
//window.history.forward(1);
//modal.style.display = "none";

// jQuery(document).ready(function () {
//     jQuery(window).click(function (e) {
//         e.preventDefault();
//         jQuery('.embed-container').children('iframe').attr('src', '');
//     });

// jQuery(function () {
//     setInterval(refreshiframe, 1000);
// });
// function refreshiframe() {
//     jQuery('.embed-container').attr('src', jQuery('.embed-container').attr('src'));
//     console.log('reloading frame');
// }


//});





// function reloadIFrame() {
//     document.frames["iframe"].location.reload();
//     console.log('reloading frame');
// }
//    }


//}



// finding .single-product tr and killing link

const link_kill = document.querySelectorAll('.single-product td label a');

link_kill.forEach(function (link_kill) {
    console.log(link_kill);
    link_kill.removeAttribute("href");
});




