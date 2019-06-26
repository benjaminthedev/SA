//alert('home');

console.log('Home JS loaded');



const original = document.querySelectorAll('.increment');

// original[0].style.color = 'red';

original[0].addEventListener('click',
    function () {
        console.log('first one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/exhibition-on-screen-2/"
    });

original[1].addEventListener('click',
    function () {
        console.log('second one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/music/"
    })


original[2].addEventListener('click',
    function () {
        console.log('third one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/social-documentary/"
    })

original[3].addEventListener('click',
    function () {
        console.log('fourth one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/history/"
    })

original[4].addEventListener('click',
    function () {
        console.log('fifth one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/art/"
    })

original[5].addEventListener('click',
    function () {
        console.log('sixth one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/foreign-language-films/"
    })

original[6].addEventListener('click',
    function () {
        console.log('seventh art ;) one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/other-products/"
    })

original[7].addEventListener('click',
    function () {
        console.log('eighth one clicked');
        window.location = "https://wordpress-219469-895469.cloudwaysapps.com/product-category/on-sale/"
    })