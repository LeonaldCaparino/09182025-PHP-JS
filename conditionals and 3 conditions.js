let totalPrice: number = 19;
let shippingCost;

if (totalPrice > 20) {
    shippingCost = 0
} else {
    shippingCost = 5
}

if (totalPrice <= 20) {
    shippingCost = 5 
} else {
    shippingCost = 0
}

    // below 10 euros => 5 euro shipping cost
    // below 20 euros => 3 euro shipping cost
    // otherwise => 0 euro

    if (totalPrice <= 10) {
        shippingCost = 5
    } else if (totalPrice <= 20) {
        shippingCost = 3
    } else if (totalPrice > 20){
        shippingCost = 0
    }