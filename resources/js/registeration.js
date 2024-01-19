import './bootstrap';
function showError(message){
    document.getElementById('error-message').innerHTML = message;
}
document.getElementById('submit')
.addEventListener('click',function (event) {
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').textContent;
    const formInfo ={
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
    };
    axios.post('/Register', formInfo, {
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Content-Type': 'application/json',
        },
        timeout: 5000,
    })
        .then(response => {
            console.log('Successful response:', response);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    
    
    //.catch(error => {
       // if(error.response.status === 422){
           // const errors = error.response.data.errors;
           // showError(errors.email ? errors.email[0] : '');
           // showError(errors.password ? errors.password[0] : '');
        //} else{
            //console.error(error);
        //}
    //});
});
{
    
}