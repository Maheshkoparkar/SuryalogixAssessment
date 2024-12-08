
//validate the contact form
function validateContactForm(event) {

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const message = document.getElementById('message');

    // Name validation
    if (name.value.trim() === '') {
        alert('Please enter your name.');
        name.focus();
        event.preventDefault(); 
        return false;
    }

    // Email validation
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email.value)) {
        alert('Please enter a valid email address.');
        email.focus();
        event.preventDefault(); 
        return false;
    }

    // Message validation
    if (message.value.trim() === '') {
        alert('Please enter your message.');
        message.focus();
        event.preventDefault(); 
        return false;
    }

    //everything is valid
    return true;
}
document.getElementById('contactForm').addEventListener('submit', function(event) {
    validateContactForm(event);
});


function myFunction() {
    confirm("Are you sure,You want delete record!");
}


document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('status')) {
        const status = urlParams.get('status');

        if (status === 'added') 
        {
            showPopup('Employee added successfully!', 'success');
        } 
        else if (status === 'deleted') 
        {
            showPopup('Employee deleted successfully!', 'success');
        }else if(status==='updated')
        {
            showPopup('Employee Details Updated successfully!', 'success');
        }else if(status==='submitted')
        {
            showPopup('Submitted successfully!', 'success');
        }
    }

    function showPopup(message, type) {
        const popup = document.createElement('div');
        popup.className = `alert alert-${type} alert-dismissible fade show`;
        popup.role = 'alert';
        popup.innerHTML = `${message} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>`;
        document.body.appendChild(popup);
    }
});
