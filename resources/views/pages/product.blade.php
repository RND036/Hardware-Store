<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CSS here -->
    @include('libraries.style')
</head>

<body data-bs-theme="light">

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        @include('components.navbar')
    </nav>
    <!-- End Header/Navigation -->
    <main>
        <!-- Hero Area Start -->
        <div class="slider-area3 slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

    </main>

    <!-- Product list  -->
    <div class="Product_container">
        <div class="icon-group">
            <div class="icon-item">
                <img src="https://openui.fly.dev/openui/64x64.svg?text=🔧" alt="Hand Tools icon" class="icon-image">
                <span class="icon-text">Hand Tools</span>
            </div>
            <div class="icon-item">
                <img src="https://openui.fly.dev/openui/64x64.svg?text=🔩" alt="Power Tools icon" class="icon-image">
                <span class="icon-text">Power Tools</span>
            </div>
            <div class="icon-item">
                <img src="https://openui.fly.dev/openui/64x64.svg?text=💡" alt="Electrical Items icon"
                    class="icon-image">
                <span class="icon-text">Electrical Items</span>
            </div>
            <div class="icon-item">
                <img src="https://openui.fly.dev/openui/64x64.svg?text=🧱" alt="Building Materials icon"
                    class="icon-image">
                <span class="icon-text">Building Materials</span>
            </div>
            <div class="icon-item">
                <img src="https://openui.fly.dev/openui/64x64.svg?text=🪣" alt="Paints icon" class="icon-image">
                <span class="icon-text">Paints</span>
            </div>
            <div class="icon-item">
                <img src="https://openui.fly.dev/openui/64x64.svg?text=🚰" alt="Plumbing Items icon" class="icon-image">
                <span class="icon-text">Plumbing Items</span>
            </div>
        </div>
    </div>

    </div>
    <!-- Product list end -->

    <!-- filter products list -->
    <section id="vertical_product">
        <div class="container">
            <div class="controls">
                <button type="button" class="control" data-filter="all">All Products</button>
                <button type="button" class="control" data-filter=".handtools">Hand Tools</button>
                <button type="button" class="control" data-filter=".powertools">Power Tools</button>
                <button type="button" class="control" data-filter=".electricalitems">Electrical Items</button>
                <button type="button" class="control" data-filter=".buildingmaterials">Buiding Materials</button>
                <button type="button" class="control" data-filter=".paints">Paints</button>
            </div>
            <div class="products">
                @foreach ($products as $product)
                <!-- to filter the data entered -->
                <div class="mix {{strtolower(str_replace(' ', '', $product->category))}}">

                        <img src="{{ asset('storage/' . $product->product) }}" alt="{{ $product->name }}" width="500px" height="500px" style="border-radius: 12px" />    
                    </div>
                @endforeach
            </div>

            </div> 
    </section>
    <!-- filter product list end -->

    <!-- gallery of products -->
    <section class="gallery">
        <h1>Product of gallery</h1>
        <div class="gallery_container">
            <div class="product_image_gallery">
                <div class="product-img">
                    <img src="images/heater.jpg" alt="Product Image" class="product-main-img" data-index="1" />
                </div>
                <div class="product-thumbnail-container">
                    <div class="product-thumbnail active">
                        <img src="images/buliding.jpg" alt="thumbnail Image" data-index="1" />
                    </div>
                    <div class="product-thumbnail">
                        <img src="images/drywall.jpg" alt="thumbnail Image" data-index="2" />
                    </div>
                    <div class="product-thumbnail">
                        <img src="images/cement.jpg" alt="thumbnail Image" data-index="3" />
                    </div>
                    <div class="product-thumbnail">
                        <img src="images/circularsaw.webp" alt="thumbnail Image" data-index="4" />
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- gallery of products end -->
    <!-- checkout page -->
    <div class="checkout_container">
        <header>
            <h1>List Of Products</h1>
            <div class="iconCart">
                <img src="images/cart.svg">
                <div class="totalQuantity">0</div>
            </div>
        </header>

        <div class="listProduct">
            <div class="item">
                <img src="images/1.webp" alt="" >
                <h2>CoPilot / Black / Automatic</h2>
                <div class="price">Rs 550</div>
                <button>Add To Cart</button>
            </div>
           
        </div>
    </div>

    <div class="cart">
        <h2>Cart Section</h2>
        <div class="listCart">
            <div class="item">
                <img src="images/1.webp">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">Rs550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>
        </div>

        <div class="buttons">
            <div class="close">
                Close
            </div>
            <div class="checkout">
                <a href="/checkout">Checkout</a>
            </div>
        </div>
    </div>
    <!-- checkout page end -->


    <!-- Start Footer Section -->
    <footer class="footer-section">
        @include('components.footer')
    </footer>
    @include('script.scripts')
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="/checkout"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    @include('script.scripts')
    <script src="https://cdn.jsdelivr.net/npm/mixitup@3.3.1/dist/mixitup.min.js"></script>

</body>

</html>