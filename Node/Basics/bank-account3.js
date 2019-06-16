// Node basics bank account
var accounts =[];

// Account object
var Account = function(balance, username) {
	this.balance = balance;
	this.username = username;
};

// createAccount
function createAccount(balance, username){
	var newAccount =  new Account(balance, username);
	accounts.push(newAccount);
	return newAccount;
}

// getAccount(username)
function getAccount(username){
	var result;

	for (var i = 0; i < accounts.length; i++){
		if (accounts[i].username === username){
			result = accounts[i];
		}
	}
	
	return result;
}

// deposit
function deposit(account, amt){
	if (typeof amt === "number"){
		account.balance += amt;
	}
}

/// withdraw
function withdraw(account, amt){
	if (typeof amt === "number"){
		account.balance -= amt;
	}
}

// get balance
function getBalance(account){
	return account.balance ;
}

// balance getter
function createBalanceGetter(account){
	return function(){
		return account.balance;
	};
}

createAccount(12.50, "hansinla");
createAccount(46.50, "daniela");
createAccount(101, "julian");


console.log(getAccount("julian"));

var getJulianBalance = createBalanceGetter(getAccount("julian"));
console.log(getJulianBalance());



