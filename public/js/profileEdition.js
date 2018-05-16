
var editingMode, image, name, description;

window.onload = function() {
	var editingMode = false;

	image = document.getElementById('profileImage');
	name = document.getElementsByClassName('name')[0];
	description = document.getElementsByClassName('description')[0];
	alert(name.innerText + "\n" + description.innerText);

	inputElements = document.getElementsByClassName('newData');
}

function editProfile(editBtn) {
	editingMode = !editingMode;
	if (editingMode) {
		for (var i = 0; i < inputElements.length; i++) {
			// name.style.display = "none";
			description.style.display = "none";
			inputElements[0].style.display = "block";
			inputElements[0].style.width = "100%";
		}
	} else {
		for (var i = 0; i < inputElements.length; i++) {
			// name.style.display = "block";
			description.style.display = "block";
			inputElements[0].style.display = "none";
			inputElements[0].style.width = "100%";
		}
	}
	/*
    if (editingMode) {
    	var nameInput = document.createElement("INPUT");
    	var descriptionInput = document.createElement("INPUT");
        var imageInput = document.createElement("INPUT");

        nameInput.setAttribute("type", "text");
        descriptionInput.setAttribute("type", "text");
        imageInput.setAttribute("type", "file");

        name.insertAdjacentElement('afterend', nameInput);
        description.insertAdjacentElement('beforebegin', descriptionInput);
        description.insertAdjacentElement('afterend', imageInput);
        
    }
    else {
    	editBtn.innerText = '';
        $(document).find('input.editing').each(function() {
            var div = $('<div class="editable" />').text($(this).val());
            $(this).replaceWith(div);
        });
    }
    */
}