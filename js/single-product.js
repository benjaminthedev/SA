jQuery(document).ready(function () {
    jQuery('.single-product .woocommerce-product-gallery, .single-product .woocommerce-notices-wrapper, .single-product ul.tabs.wc-tabs').hide();       
    //Move the add to basket to the right place
    jQuery('.entry-summary').detach().prependTo('.product-info');
    //Name
    //jQuery('.single-product td.woocommerce-grouped-product-list-item__label').prependTo('.single-product .    ');

    jQuery('.single-product button.single_add_to_cart_button.button.alt').appendTo('.single-product .woocommerce-grouped-product-list-item');

});

// Get the modal
let modal = document.getElementById("myModal");

// Get the button that opens the modal
let para = document.getElementById("clicked-para");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
para.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), clos	e the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}	