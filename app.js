let totalPrice;

function calculateShippingCost(totalPriceParam) {
    let shippingCost;
    
    if (totalPriceParam <= 10) {
        shippingCost = 5;
    } else if (totalPriceParam <= 20) {
        shippingCost = 3;
    } else {
        shippingCost = 0;
    }

    console.log('shipping cost for you is 3')
    console.log('for total price of 19')
}

// user starts shopping
totalPrice = 10
// more items added to shopping cart
totalPrice = 19
//ready to order
calculateShippingCost(totalPrice)
