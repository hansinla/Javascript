// Node basics bank account
var account = {
	balance: 0
};

// deposit
function deposit(account, amt){
	account.balance += amt;
}

/// withdraw
function withdraw(account, amt){
	account.balance -= amt;
}

// get balance
function getBalance(account){
	return account.balance ;
}

deposit(account, 25);

withdraw(account,12);

console.log(getBalance(account));