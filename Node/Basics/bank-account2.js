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
	accounts.forEach(function(account){
		if (account.username === username){
			result = account;
		}
	});
	return result;
}

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

createAccount(12.50, "hansinla");
createAccount(46.50, "daniela");
createAccount(101, "julian");


console.log(getAccount("julian"));
