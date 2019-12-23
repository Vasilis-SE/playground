const yargs = require("yargs");
const chalk = require("chalk");

// Custom made modules
const note = require("./notes.js");

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
		let response = note.addNote(argv);
		
		if(response.STATUS) {
			console.log( success(response.DATA) );		
		} else {
			console.log( error(response.DATA) );
		}
	}
});

yargs.command({
	command: 'remove',
	describe: 'Removes a note',
	builder: {
		title: {
			describe: "Note`s title",
			demandOption: true,
			type: 'string'
		}
	},
	handler: function (argv) {
		let response = note.removeNote(argv.title);

		if(response.STATUS) {
			console.log( success(response.DATA) );		
		} else {
			console.log( error(response.DATA) );
		}
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