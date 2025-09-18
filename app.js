const standardShippingCost = 6;
const discountedShippingCost = 4;
let totalPrice;

function calculateShippingCost(totalPriceParam) {
    let shippingCost;
    
    if (totalPriceParam <= 10) {
        shippingCost = standardShippingCost
    } else if (totalPriceParam <= 20) {
        shippingCost = discountedShippingCost
    } else {
        shippingCost = 0;
    }

    console.log('shipping cost for you is 3')
    console.log('for total price of 19')
    console.log("---------------------------")
}

// user starts shopping
totalPrice = 10;
calculateShippingCost(totalPrice)

// more items added to shopping cart
totalPrice = 19;
//ready to order
calculateShippingCost(totalPrice)

// add another thing to cart
totalPrice = 24;
calculateShippingCost(totalPrice)

// place the order