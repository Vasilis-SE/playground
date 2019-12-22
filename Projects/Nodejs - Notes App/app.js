const yargs = require("yargs");
const validator = require("validator");
const chalk = require("chalk");
const fs = require("fs");

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
		console.log("Title: " + argv.title);
		console.log("Body: " + argv.body);
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