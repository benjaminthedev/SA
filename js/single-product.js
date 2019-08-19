
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



    // var ele = document.getElementById('single-wrapper');

    // for( ele = 0; ele < 10; ele++){
    // 	jQuery("#single-wrapper"+ele+"").click(function(){
    // 		console.log("You have clicked: ", jQuery(this).attr('id'));            
    // 	});
    // }


    // const ele = document.getElementById('single-wrapper');
    // let x = 0;

    // ele.addEventListener('click', () => {
    // console.log(`You have clicked:`, ++x, `times`);

    // if (x >= 2){
    // 	console.log(`a message`);
    // 	location.reload(true);
    // } 

    // });






    // jQuery("#single-wrapper").one("click", function() {
    // 	console.log("Here after you cant click Div id1. Only once fired");
    // 	location.reload(true);
    // });

});




// finding .single-product tr and killing link

const link_kill = document.querySelectorAll('.single-product td label a');
console.log(link_kill);

link_kill.forEach(function (link_kill) {
    console.log(link_kill);
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