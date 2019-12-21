const validator = require("validator");
const chalk = require("chalk");

console.log(process.argv);

const command = process.argv[2];

if(command === 'add') {
	console.log("adding note");
}
else if(command === 'remove') {
	console.log("removing note");
} else {
	console.log("wrong command");
}