let totalPrice = 19;

if (totalPrice <= 10) {
    shippingCost = 5;
} else if (totalPrice <= 20) {
    shippingCost = 3;
} else {
    shippingCost = 0;
}

console.log(shippingCost);