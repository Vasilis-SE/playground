const getNotes = function() {
	// TODO: Handle notes retrieve
	return null;
}

const addNote = function() {
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

module.exports = {
	getNotes: getNotes, 
	addNote: addNote
};