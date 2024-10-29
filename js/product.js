// Add to cart functionality
function addToCart(btn) {
  var product = $(btn).closest(".pro");
  var name = product.data("product-name");
  var price = parseInt(product.data("product-price"));
  var quantity = 1;

  var cartCounter = parseInt($("#cartCounter").text());
  cartCounter += quantity;
  $("#cartCounter").text(cartCounter);

  // Decrease available quantity if needed
  var availableQuantity = parseInt(product.find(".quantity").text());
  availableQuantity -= quantity;
  product.find(".quantity").text(availableQuantity);

  // Add the product to the cart (you can customize this part based on your needs)
  var cartItem = $("<li>").text(name + " - $" + price);
  $("#cartItems").append(cartItem);
}
