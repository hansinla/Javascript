var argv = require('yargs')
	.command("hello", "Greets the user", function(yargs){
		yargs.options({
			name: {
				demand: true,
				alias: 'n',
				description: "Your first name goes here.",
				type: "string"
			},
			lastname: {
				demand: true,
				alias: 'l',
				description: "Your last name goes here.",
				type: "string"
			}
		}).help('help');
	})
	.help('help')
	.argv;

var command = argv._[0];

console.log(argv);

if (command === 'hello' && typeof argv.name !== 'undefined'){
	console.log("Hello " + argv.name +"!");
} else  {
	console.log("Hello World!");
}