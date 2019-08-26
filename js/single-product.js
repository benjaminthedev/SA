
jQuery(window).on("load", function () {
    jQuery('.single-product .woocommerce-product-gallery, .single-product .woocommerce-notices-wrapper, .single-product ul.tabs.wc-tabs').hide();
    //Move the add to basket to the right place
    jQuery('.entry-summary').detach().prependTo('.product-info');
    jQuery('.single-product button.single_add_to_cart_button.button.alt').appendTo('.single-product .woocommerce-grouped-product-list-item');

    jQuery("section#headerSliderProduct #clicked-para").click(function () {
        jQuery('#modal').modal('show');
        // console.log('Testing Tesla Model 3');
    });


    //Stops the videos when clicked away
    jQuery('#modal').each(function () {
        var src = jQuery(this).find('iframe').attr('src');

        jQuery(this).on('click', function () {

            jQuery(this).find('iframe').attr('src', '');
            jQuery(this).find('iframe').attr('src', src);

        });
    });

});
//end jquery



// finding .single-product tr and killing link

const link_kill = document.querySelectorAll('.single-product td label a');

link_kill.forEach(function (link_kill) {
    link_kill.removeAttribute("href");
});




const ele = document.querySelector('section#headerSliderProduct #clicked-para');

console.log(ele);

function clicky() {
    let x = 0;

    ele.addEventListener('click', () => {
        console.log(`You have clicked:`, ++x, `times`);

        if (x >= 2) {
            console.log(`a message`);
            location.reload(true);
        }

    });
}

clicky();

//created func to get class and check if more than 2, if so add a new class I can target in css
function addingClassesToTr(){

    const tables = document.querySelectorAll('.woocommerce-grouped-product-list tr');
    
    //Check to see if more than 2
    if (tables.length >= 2){
        //If so then we add the class .tr-3
        tables.forEach(function (table) {
            table.classList.add('tr-3');
        });
        
    }
}

addingClassesToTr();

