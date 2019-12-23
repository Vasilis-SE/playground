const validator = require("validator");
const fs = require("fs");

const isEmptyArgument = (note) => {
	if(note.title == "") return false;
	if(note.body == "") return false;

	return true;
}

const noteAlreadyExists = (title, notes) => {
	const duplNotes = notes.filter((note) => note.title === title);
	return duplNotes.length === 0
}

const hasSpecialCharacters = (stringval) => {
	let format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
	return ((format.test(stringval)) ? true : false);
}

const loadNotes = (filepath) => {
	try {
		let dataBuffer = fs.readFileSync(filepath);
		let storedNotes = dataBuffer.toString();
		storedNotes = JSON.parse(storedNotes);
		return storedNotes;
	} catch(err) {
		return [];
	}
}

const saveNotes = (filepath, notes) => {	
	try {
		fs.writeFileSync(filepath, JSON.stringify(notes));
	} catch(err) {
		return false;
	}

	return true;
}


// ============== External Functions ============
const getNotes = () => {
	// TODO: Handle notes retrieve
	return null;
}

const addNote = (note) => {
	let response = {STATUS: true, DATA: ""};
	let storedNotes = loadNotes("./datasets/notes.json");

	if(!isEmptyArgument(note)) {
		response.STATUS = false;
		response.DATA = "One or more arguments are empty!!";
		return response;
	}

	if(hasSpecialCharacters(note.title)) {
		response.STATUS = false;
		response.DATA = "The title contains invalid characters!!";
		return response;
	}

	if(!noteAlreadyExists(note.title, storedNotes)) {
		response.STATUS = false;
		response.DATA = "The title for the argument is already taken!";
		return response;
	} 

	try {
		storedNotes.push({
			"title": note.title,
			"body": note.body
		});

		if(!saveNotes("./datasets/notes.json", storedNotes)) {
			response.STATUS = false;
			response.DATA = "Error, could not save data...";
			return response;
		}

		response.DATA = "The new note has been successfully saved!";
	} catch(err) {
		response.STATUS = false;
		response.DATA = "Error, " + err;
	}

	return response;
}

const removeNote = (title) => {
	let response = {STATUS: true, DATA: ""};
	let storedNotes = loadNotes("./datasets/notes.json");

	if(storedNotes.length == 0) {
		response.STATUS = false;
		response.DATA = "You have no saved notes...";
		return response;
	}

	if(noteAlreadyExists(title, storedNotes)) {
		response.STATUS = false;
		response.DATA = "The title you have given does not exist...";
		return response;
	}

	const newNotes = storedNotes.filter((note) => note.title !== title);

	if(!saveNotes("./datasets/notes.json", newNotes)) {
		response.STATUS = false;
		response.DATA = "Could not remove note...";
		return response;
	}

	response.DATA = "The note `" + title + "` has been delete!";
	return response;
}

module.exports = {
	getNotes: getNotes, 
	addNote: addNote,
	removeNote: removeNote
};