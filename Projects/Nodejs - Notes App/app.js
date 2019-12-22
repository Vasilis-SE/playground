const yargs = require("yargs");
const validator = require("validator");
const chalk = require("chalk");
const fs = require("fs");

// Custom defined chalks
const error = chalk.bold.red;
const success = chalk.bold.green;

yargs.command({
	command: 'add',
	describe: 'Add a new note',
	builder: {
		title: {
			describe: 'Note`s title',
			demandOption: true, 	// Attribute that makes the title to be necessary.
			type: 'string'			// The data type that the parameter must be.
		},
		body: {
			describe: 'Note`s content',
			demandOption: true,
			type: 'string'
		}
	},
	handler: function (argv) {
		let data = JSON.stringify({
			"title": argv.title,
			"body": argv.body
		});

		try {
			fs.writeFileSync("./datasets/notes.json", data);
			console.log( success('The new note has been successfully saved!') );
		} catch(err) {
			console.log( error(err) );
		}
	}
});

yargs.command({
	command: 'remove',
	describe: 'Remove a note',
	handler: function () {
		console.log("removing note");
	}
});

yargs.command({
	command: 'read',
	describe: 'Reading notes',
	handler: function () {
		console.log("reading notes");
	}
});

yargs.command({
	command: 'list',
	describe: 'Listing notes',
	handler: function () {
		console.log("listing notes");
	}
});

// This is necessary to let yargs know that it must parse the argumets
yargs.parse(); 