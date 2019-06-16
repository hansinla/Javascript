/********************************************
*
*       CoinDeterminer
*       Hans van Riet
*       
*********************************************/

/*
Input = 6   Output = 2
Input = 16  Output = 2
*/

    //for testing:
    var amount = 25;

    // Variables
    var coinValue = 0;
    var numCoins = 0;

    var denominations = [11, 9, 7, 5, 1];
    
    for (var i = 0; i < denominations.length; i++) {
        coinValue = denominations[i];

        while (amount >= coinValue) {
            amount -= coinValue;
            numCoins += 1;
            debug(amount);
        } 
    }

    
    // Print output per requirements.
    //return (numCoins);
    //
    //debug(numCoins);
