console.log("Starting password manager.");

var crypto = require('crypto-js');
var storage = require("node-persist");
storage.initSync();

var argv = require('yargs')
	.command("create", "Create a new password account", function(yargs){
		yargs.options({
			name: {
				demand: true,
				alias: 'n',
				description: "Enter your account name.",
				type: "string"
			},
			username: {
				demand: true,
				alias: 'u',
				description: "Enter your username.",
				type: "string"
			},
			password: {
				demand: true,
				alias: 'p',
				description: "Enter your password.",
				type: "string"
			},
			masterPassword: {
				demand: true,
				alias: 'm',
				description: "Set your master password.",
				type: "string"
			}
		}).help('help');
	})
	.command("get", "Retrieve a password", function(yargs){
		yargs.options({
			name: {
				demand: true,
				alias: 'n',
				description: "Enter your account name.",
				type: "string"
			},
			masterPassword: {
				demand: true,
				alias: 'm',
				description: "Enter your master password.",
				type: "string"
			}
		}).help('help');
	})
	.help('help')
	.argv;

var command = argv._[0];


function createAccount(account, masterPassword)	{
	var accounts = getAccounts(masterPassword);
	
	accounts.push(account);
	saveAccounts(accounts, masterPassword);
	
	return account;
}

function getAccount(accountName, masterPassword){
	var accounts = getAccounts(masterPassword);

	var matchedAccount;
	accounts.forEach(function(thisAccount){
		if (thisAccount.name === accountName){
			matchedAccount = thisAccount;
		}
	});
	return matchedAccount;
}

function getAccounts(masterPassword){
	// get accounts
	var encryptedAccount = storage.getItemSync('accounts');
	var accounts = [];

	// and decrypt
	if (typeof encryptedAccount !== 'undefined'){
		var bytes = crypto.AES.decrypt(encryptedAccount, masterPassword);
		accounts = JSON.parse(bytes.toString(crypto.enc.Utf8));
	}

	// return accounts array
	return accounts;
}

function saveAccounts(accounts, masterPassword){

	var encryptedAccounts = crypto.AES.encrypt(JSON.stringify(accounts), masterPassword);
	storage.setItemSync('accounts', encryptedAccounts.toString());
	return accounts;
}

if (command === 'create'){
	try{
		var newAccount = {
			name: argv.name,
			username: argv.username,
			password: argv.password,
		};
		console.log("Creating account: " + newAccount.name);
		createAccount(newAccount, argv.masterPassword);
	} catch(error){
		console.log("Unable to create account." + error.message);
	}
		
} else if (command === 'get'){
	try{
		console.log("Retrieving account: " + argv.name);
		var fetchedAccount = getAccount(argv.name, argv.masterPassword);
		if (typeof fetchedAccount !== 'undefined') {
			console.log("Username: " + fetchedAccount.username + '\n' +
						"Password: " + fetchedAccount.password);
		} else {
			console.log("Could not find account: "+ argv.name);
		}
	} catch(error){
		console.log("Unable to fetch account." + error.message);
	}
}










