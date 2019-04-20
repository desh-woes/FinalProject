// Function to validate input in the contact page form
function validate_text() {
    console.log("I am calling this function");
    // Gets value of name input and stores it in the text_input variable
    let text_input = document.getElementById("f_name").value;

    // Removes spaces from the text input to aid the validation process
    text_input = text_input.split(" ").join("");

    // Gets value of email input and stores it in the email_input variable
    let email_input = document.getElementById("e_name").value;

    // Logic to validate that neither the name box not the email address box is left blank
    if (text_input.trim() === "" || email_input.trim() === "") {
        alert("Blank values are not allowed for the Name and email categories");
        return false;
    }

    // Logic to validate that text entered in the name segment is part of the valid set as described in the assignment.
    let valid_text = new Set(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '-']);
    for (let i = 0; i < text_input.length ; i++){
        if (!valid_text.has(text_input[i].toLowerCase())){
            alert("Name box only accepts valid english alphabets and hyphens");
            return false;
        }
    }

    // Logic to validate that email structure is standard and not invalid
    let valid_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!valid_email.test(String(email_input).toLowerCase())){
        alert("Email address is not valid. Please enter a valid address");
        return false;
    }
    alert("Thank you for your inquiry! You would be contacted within the next three days.");
    return true;
}