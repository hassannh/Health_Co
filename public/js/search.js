var search = document.getElementById('search');
var products = document.querySelectorAll('.prod');

search.addEventListener('keyup', e => {
    for (let product of products) {
        if (search.value == product.querySelector('.productsName').innerHTML) {
            product.classList.remove('hidden');
        } else if (search.value == '') {
            product.classList.remove('hidden');
        } else if (search.value != product.querySelector('.productsName').innerHTML)
            product.classList.add('hidden');
    }
})