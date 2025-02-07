// this is the form in enter_new_record.php -
const protagform = document.querySelector('#form');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const form_div = document.querySelector('#form-container');
// show the DIV if it is hidden
form_div.style.display = 'block';


// event handler
protagform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(protagform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        form_div.style.display = 'none';
        response_content.innerHTML =
        "<p>" + data + "</p>" +
        "<p><a href='enter_new_record.php'>Return to the form</a></p>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end protagform.onsubmit