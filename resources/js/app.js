import './bootstrap';
document.getElementById('submit')
.addEventListener('submit',function (event) {
    event.preventDefault();
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').textContent;
    const formInfo ={
        name:document.getElementById('name').value,
        email:document.getElementById('email').value,
        password: document.getElementById('password').value,
    };
    axios.post('/Register',formInfo ,{
        headers:{
            'X-CSRF-TOKEN':csrfToken,
            'content-Type': 'application/json',
        }
    })
    .then()
    .catch(error => {
        console.error(error.response.data);
    });
});
{
    
}