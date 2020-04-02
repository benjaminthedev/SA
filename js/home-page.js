const newHome = document.querySelectorAll('.increment');

newHome[0].addEventListener('click',
    function () {
        console.log('first one clicked');
        window.location = "/product-category/exhibition-on-screen-2/"
    });

newHome[1].addEventListener('click',
    function () {
        console.log('second one clicked');
        window.location = "/product-category/art/"
    }) 

newHome[2].addEventListener('click',
    function () {
        console.log('third one clicked');
        window.location = "/product-category/social-documentary/"
    })

newHome[3].addEventListener('click',
    function () {
        console.log('fourth one clicked');
        window.location = "/product-category/music/"
    })

newHome[4].addEventListener('click',
    function () {
        console.log('fifth one clicked');
        window.location = "/product-category/history/"
    })

newHome[5].addEventListener('click',
    function () {
        console.log('sixth one clicked');
        window.location = "/product-category/foreign-language-films/"
    })

newHome[6].addEventListener('click',
    function () {
        console.log('seventh art ;) one clicked');
        window.location = "/product-category/other-products/"
    })

newHome[7].addEventListener('click',
    function () {
        console.log('eighth one clicked');
        window.location = "/product-category/on-sale/"
    })  