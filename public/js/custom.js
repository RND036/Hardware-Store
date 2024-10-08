(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();

	


	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        console.log(quantityAmount, quantityAmount.value);

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
	    }
	    
	    init();
		
	};
	sitePlusMinus();


})()
// dark mode 
      function myFunction() {
        var element = document.body;
        element.dataset.bsTheme =
          element.dataset.bsTheme == "light" ? "dark" : "light";
         element.classList.toggle("dark-mode");
      }
    // filter products
    document.addEventListener("DOMContentLoaded", function() {
		var mixer = mixitup('.products', {
			selectors: {
				target: '.mix'
			},
			animation: {
				duration: 300
			}
		});
	});
  
	// gallery of products
  
	let product_img = document.querySelector('.product-img img');
  let product_thumbnail = document.querySelectorAll('.product-thumbnail');
  
  product_thumbnail.forEach((product) => {
	product.addEventListener('click', () => {
	  product_thumbnail.forEach((product) => {
		product.classList.remove('active');
	  });
	  product.classList.add('active');
  
	  let img = product.querySelector('img').getAttribute('src');
	  let index = product.querySelector('img').getAttribute('data-index');
  
	  product_img.setAttribute('src', img);
	  product_img.setAttribute('data-index', index);
  
	  product_img.classList.add('product-down-animation');
	  setTimeout(() => {
		product_img.classList.remove('product-down-animation');
	  }, 500);
	});
  });
  
  // produck checkout
  
  let iconCart = document.querySelector('.iconCart');
  let cart = document.querySelector('.cart');
  let container = document.querySelector('.checkout_container');
  let close = document.querySelector('.close');
  
  iconCart.addEventListener('click', function(){
	  if(cart.style.right == '-100%'){
		  cart.style.right = '0';
		  container.style.transform = 'translateX(-400px)';
	  }else{
		  cart.style.right = '-100%';
		  container.style.transform = 'translateX(0)';
	  }
  })
  close.addEventListener('click', function (){
	  cart.style.right = '-100%';
	  container.style.transform = 'translateX(0)';
  })
  
  
  let products = null;
  // get data from file json
  fetch('product.json')
	  .then(response => response.json())
	  .then(data => {
		  products = data;
		  addDataToHTML();
  })
  
  //show datas product in list 
  function addDataToHTML(){
	  // remove datas default from HTML
	  let listProductHTML = document.querySelector('.listProduct');
	  listProductHTML.innerHTML = '';
  
	  // add new datas
	  if(products != null) // if has data
	  {
		  products.forEach(product => {
			  let newProduct = document.createElement('div');
			  newProduct.classList.add('item');
			  newProduct.innerHTML = 
			  `<img src="${product.image}" alt="">
			  <h2>${product.name}</h2>
			  <div class="price">Rs ${product.price}</div>
			  <button onclick="addCart(${product.id})">Add To Cart</button>`;
  
			  listProductHTML.appendChild(newProduct);
  
		  });
	  }
  }
  //use cookie so the cart doesn't get lost on refresh page
  
  
  let listCart = [];
  function checkCart(){
	  var cookieValue = document.cookie
	  .split('; ')
	  .find(row => row.startsWith('listCart='));
	  if(cookieValue){
		  listCart = JSON.parse(cookieValue.split('=')[1]);
	  }else{
		  listCart = [];
	  }
  }
  checkCart();
  function addCart($idProduct){
	  let productsCopy = JSON.parse(JSON.stringify(products));
	  //// If this product is not in the cart
	  if(!listCart[$idProduct]) 
	  {
		  listCart[$idProduct] = productsCopy.filter(product => product.id == $idProduct)[0];
		  listCart[$idProduct].quantity = 1;
	  }else{
		  //If this product is already in the cart.
		  //I just increased the quantity
		  listCart[$idProduct].quantity++;
	  }
	  document.cookie = "listCart=" + JSON.stringify(listCart) + "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
  
	  addCartToHTML();
  }
  addCartToHTML();
  function addCartToHTML(){
	  // clear data default
	  let listCartHTML = document.querySelector('.listCart');
	  listCartHTML.innerHTML = '';
  
	  let totalHTML = document.querySelector('.totalQuantity');
	  let totalQuantity = 0;
	  // if has product in Cart
	  if(listCart){
		  listCart.forEach(product => {
			  if(product){
				  let newCart = document.createElement('div');
				  newCart.classList.add('item');
				  newCart.innerHTML = 
					  `<img src="${product.image}">
					  <div class="content">
						  <div class="name">${product.name}</div>
						  <div class="price">Rs ${product.price} / 1 product</div>
					  </div>
					  <div class="quantity">
						  <button onclick="changeQuantity(${product.id}, '-')">-</button>
						  <span class="value">${product.quantity}</span>
						  <button onclick="changeQuantity(${product.id}, '+')">+</button>
					  </div>`;
				  listCartHTML.appendChild(newCart);
				  totalQuantity = totalQuantity + product.quantity;
			  }
		  })
	  }
	  totalHTML.innerText = totalQuantity;
  }
  function changeQuantity($idProduct, $type){
	  switch ($type) {
		  case '+':
			  listCart[$idProduct].quantity++;
			  break;
		  case '-':
			  listCart[$idProduct].quantity--;
  
			  // if quantity <= 0 then remove product in cart
			  if(listCart[$idProduct].quantity <= 0){
				  delete listCart[$idProduct];
			  }
			  break;
	  
		  default:
			  break;
	  }
	  // save new data in cookie
	  document.cookie = "listCart=" + JSON.stringify(listCart) + "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
	  // reload html view cart
	  addCartToHTML();
  }
  
  